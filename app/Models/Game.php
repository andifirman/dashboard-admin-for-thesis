<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
  use HasFactory;

  // protected $fillable = ['user_id', 'title', 'cover'];
  protected $fillable = ['cover', 'users_id'];



  public function reviews()
  {
    return $this->hasMany(Review::class)->orderBy('created_at', 'desc');
  }
  
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
  public function scopeNintendo($query)
  {
    return $query->where('publisher', '=', 'Nintendo');
  }
  
  public function addReview($body, $userid)
  {
    $this->reviews()->create(['body' => $body, 'user_id' => $userid]);
  }
  
}
