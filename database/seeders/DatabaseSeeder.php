<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // ImagesTableSeeder::class,
            // KindOfSushiTableSeeder::class,
            // SushiMakiTableSeeder::class,
            // SushiNigiriTableSeeder::class,
            // SushiSashimiTableSeeder::class,
            // SushiTemakiTableSeeder::class,
            // SushiUramakiTableSeeder::class,
            // KindOfDrinksTableSeeder::class,
            // BeerTableSeeder::class,
            // WineTableSeeder::class,
            // SakeTableSeeder::class,
            // RolesTableSeeder::class,
            // UsersTableSeeder::class,
            TimetableSeeder::class,
        ]);
    }
}
