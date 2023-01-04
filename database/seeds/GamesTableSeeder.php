<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      DB::table('games')->truncate();

      $games = ['Gunny', 'Subway Suffers', 'Flappy bird'];

      foreach ($games as $game) {
        DB::table('games')->insert([
          'name' => $game
        ]);
      }

      Schema::enableForeignKeyConstraints();

    }
}
