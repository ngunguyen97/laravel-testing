<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = [
    'name'
  ];

  public function users() {
    return $this->belongsToMany(User::class, 'users_games', 'game_id', 'user_id')
      ->withPivot('score')
      ->orderBy('users_games.score', 'desc');
  }
}
