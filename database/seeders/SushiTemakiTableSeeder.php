<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiTemakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temaki_sushi_array = ["Salmon", "Tuna", "Ebi", "Eel"];

        foreach($temaki_sushi_array as $temaki){
            DB::table('sushi')->insert([
                'name' => $temaki,
                'kind' => "Temaki",
                'image' => "/img/sushi_4.jpg",
                'description' => 'moet dit nou echt voor elke fucking soort sushi' . $temaki,
            ]);
        }
    }
}