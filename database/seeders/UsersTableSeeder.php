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
            'email' => "s1122255@student.hsleiden.nl",
            'password' => bcrypt('12176'),
            'age' => 21,
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => "niels rijnders",
            'email' => "standaard@email.nl",
            'password' => bcrypt('12345'),
            'age' => 21,
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => "shinobu oshino",
            'email' => "s1122266@student.hsleiden.nl",
            'password' => bcrypt('12176'),
            'age' => 17,
        ]);
    }
}
