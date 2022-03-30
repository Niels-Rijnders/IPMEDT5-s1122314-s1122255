<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiSashimiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sashimi_sushi_array = ["Salmon", "Tuna"];

        foreach($sashimi_sushi_array as $sashimi){
            DB::table('sushi')->insert([
                'name' => $sashimi,
                'kind' => "Sashimi",
                'image' => "/img/sushi_3.jpg",
                'description' => "man ik wil fucking elden ring spelen" . $sashimi,
            ]);
        }
    }
}