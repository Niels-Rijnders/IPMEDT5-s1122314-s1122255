<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiNigiriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nigiri_sushi_array = ["Maguro", "Saka", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach($nigiri_sushi_array as $nigiri){
            DB::table('sushi')->insert([
                'name' => $nigiri,
                'kind' => "Nigiri", 
                'image' => "/img/sushi_2.jpg",
                'description' => "en vanavond nog fuckng sportschool" . $nigiri . "damn",
            ]);
        }
    }
}
