<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      DB::table('users_games')->truncate();

      $records = [
        [1, 1, 10],
        [2, 1, 20],
        [3, 3, 50],
        [5, 3, 40],
        [1, 1, 100],
        [6, 3, 80],
        [2, 3, 10],
        [4, 2, 90],
        [1, 3, 60],
        [3, 2, 30]
      ];

      foreach ($records as $record) {
        DB::table('users_games')->insert([
          'user_id' => $record[0],
          'game_id' => $record[1],
          'score' => $record[2]
        ]);
      }

      Schema::enableForeignKeyConstraints();
    }
}
