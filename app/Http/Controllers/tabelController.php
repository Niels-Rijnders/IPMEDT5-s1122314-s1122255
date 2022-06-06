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
    /*deze functie haalt alle telefoonnummers uit de tabel waar het telefoonnummer 0 oftewel leeg is */
    public function show($id){
            $tijden = DB::table('timetable')->where('telefoonnummer', 0)->get();
            return view('tabel.show', [
                'tijden' => \App\Models\Timetable::find($id),
        ]);
    }

    public function create(){
        return view('tabel.create', [
            'kind_of_tabel' => \App\Models\KindOftabel::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }
    /*deze functie word gebruikt bij het reserveren waar bij het opgegeven tijdslot het nieuwe telefoonnummer
    in de tabel word gezet */
    public function store(Request $request, \App\Models\Timetable $timetable){
        $timetable->time = $request->input('time');
        $timetable->telefoonnummer = $request->input('telefoonnummer');
        

            DB::update("update timetable set telefoonnummer = '$timetable->telefoonnummer' where time = '$timetable->time'");
            return redirect('/tabel');

    }

    public function beschikbaar(){
        $tijden = DB::table('timetable')->where('telefoonnummer', 0)->get();
        return view('tabel.create', ['tijden' => $tijden]);
    }
    /*deze functie haalt de hele tabel op */
    public function tabel(){
        $tijden = DB::table('timetable')->get();
        return view('tabel.timetable', ['tijden' => $tijden]);
    }
}
