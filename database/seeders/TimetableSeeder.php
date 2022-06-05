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
        $timehour = 900;
        $timeminute = 0;

        while($timehour <= 1700){
            if($timeminute <= 55){
                $time = $timehour + $timeminute;
                //$time = number_format($time, 2);
                DB::table('timetable')->insert([
                    'time' => $time,
                ]);
                $timeminute = $timeminute + 5;
            } else{
                $timehour = $timehour + 100;
                $timeminute = 0;
            }
            }
        }

    }

