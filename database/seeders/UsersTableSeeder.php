<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => "niels rijnders",
            'email' => "standaard@email.nl",
            'password' => bcrypt('12345'),
            'age' => 21,
            'role' => "Admin",
        ]);
    }
}
