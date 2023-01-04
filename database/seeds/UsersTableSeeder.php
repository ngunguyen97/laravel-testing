<?php



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      DB::table('users')->truncate();

      $users = ['Riddle', 'Hugh', 'Kusa', 'Bob', 'Eagle', 'Neko'];

      foreach ($users as $user) {
        DB::table('users')->insert([
          'name' => $user
        ]);
      }

      Schema::enableForeignKeyConstraints();

    }
}
