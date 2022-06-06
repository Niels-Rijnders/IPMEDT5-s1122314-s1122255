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
    /*hier word de tabel aangemaakt met tijdsloten van 900 tot 1700, in mijn (s1122255) reflectieverslag 
    ga ik wat verder in op waarom deze functie op deze manier is geprogrammeerd maar waar het op neer komt is dat
    ik eerst check zijn de uren al boven 1700 en daarna check ik of de minuten al boven 55 zijn, zo niet dan kan 
    het gewoon ingevoerd worden in de tabel en anders komt er 1 uur bij en gaan de minuten terug naar 0. zo zorg ik
    dat we de 60 minuten aanhouden in plaats van dat we een tijd van 1095 krijgen. */
        $timehour = 900;
        $timeminute = 0;

        while($timehour <= 1700){
            if($timeminute <= 55){
                $time = $timehour + $timeminute;
                //$time = number_format($time, 2);
                DB::table('timetable')->insert([
                    'time' => $time,
                    'telefoonnummer' => 0,
                ]);
                $timeminute = $timeminute + 5;
            } else{
                $timehour = $timehour + 100;
                $timeminute = 0;
            }
            }
        }

    }

