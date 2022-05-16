<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  use HasFactory;
  

  protected $fillable = ['body', 'game_id', 'user_id'];
  
  public function game()
  {
    return $this->belongsTo(Game::class);
  }

  public function user()
  {
    // return $this->belongsTo(User::class);
    // return $this->belongsTo('App\Models\User', 'user_id');
    return $this->belongsTo('App\Models\User', 'user_id', 'id');
  }
}
