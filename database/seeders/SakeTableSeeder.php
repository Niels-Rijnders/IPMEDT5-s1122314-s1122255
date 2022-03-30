<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sake_array = ["Black bottle with Yellow text"];

        foreach($sake_array as $sake){
            DB::table('drinks')->insert([
                'name' => $sake,
                'kind' => "Sake",
                'image' => "/img/sake.png",
                'description' => "Sake is a traditional Japanese consumption"
            ]);
    }
}
}