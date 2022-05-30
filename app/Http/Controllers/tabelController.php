<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;
class tabelController extends Controller
{
    public function index(){
        return view('tabel.index',[
            'tabel' => \App\Models\tabel::all()
        ]);
    }
    
    public function show($id){

        return view('tabel.show', [
            'tabel' => \App\Models\tabel::find($id),
        ]);
    }

    public function create(){
        return view('tabel.create', [
            'kind_of_tabel' => \App\Models\KindOftabel::all(),
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
        return view('tabel.create', ['tijden' => $tijden]);
    }

    public function tabel(){
        $tijden = DB::table('timetable')->get();
        return view('tabel.timetable', ['tijden' => $tijden]);
    }
}
