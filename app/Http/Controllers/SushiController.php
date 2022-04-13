<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;
class SushiController extends Controller
{
    public function index(){
        return view('sushi.index',[
            'sushi' => \App\Models\Sushi::all()
        ]);
    }
    
    public function show($id){

        return view('sushi.show', [
            'sushi' => \App\Models\Sushi::find($id),
        ]);
    }

    public function create(){
        return view('sushi.create', [
            'kind_of_sushi' => \App\Models\KindOfSushi::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Timetable $timetable){
        $timetable->time = $request->input('time');
        $timetable->telefoonnummer = $request->input('telefoonnummer');
        

            DB::update("update timetable set telefoonnummer = '$timetable->telefoonnummer' where time = '$timetable->time'");
            return redirect('/tabel');

    }

    public function beschikbaar(){
        $tijden = DB::table('timetable')->where('telefoonnummer', NULL)->get();
        return view('sushi.create', ['tijden' => $tijden]);
    }

    public function tabel(){
        $tijden = DB::table('timetable')->where('telefoonnummer', NULL)->get();
        return view('sushi.timetable', ['tijden' => $tijden]);
    }
}
