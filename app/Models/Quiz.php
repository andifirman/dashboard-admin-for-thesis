<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
  use HasFactory;

  protected $fillable = ['cover'];


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
