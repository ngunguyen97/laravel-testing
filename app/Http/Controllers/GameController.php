<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function compact;
use function view;

class GameController extends Controller
{
    public function index() {
      $games = \App\Game::with(['users'])->get();
      $collection = $games->map(function ($query) {
        return [
          'game_name' => $query->name,
          'user_name' => $query->getRelation('users')->first()->name,
          'score' => $query->getRelation('users')->first()->pivot->score
        ];
      });

      return view('game', compact('collection'));
    }
}
