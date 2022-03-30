<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiMakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maki_sushi_array = ["Cucumber", "Tamago", "Tuna", "Kani"];

        foreach($maki_sushi_array as $maki){
            DB::table('sushi')->insert([
                'name' => $maki,
                'kind' => "Maki",
                'image' => "/img/sushi_1.jpg",
                'description' => "waarom duurt dit zo ontiegelijk lang" . $maki,
            ]);
        }
    }
}
