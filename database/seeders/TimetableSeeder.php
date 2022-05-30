<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timehour = 9.00;
        $timeminute = 0.00;

        while($timehour <= 17.00){
            if($timeminute <= 0.55){
                $time = $timehour + $timeminute;
                $time = number_format($time, 2);
                DB::table('timetable')->insert([
                    'time' => $time,
                ]);
                $timeminute = $timeminute + 0.05;
            } else{
                $timehour = $timehour + 1.00;
                $timeminute = 0.00;
            }
            }
        }

    }

