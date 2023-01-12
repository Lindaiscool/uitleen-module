<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Arduino;
use App\Models\Boeken;
use App\Models\Sensoren;
use App\Models\Uitleen;

class UitleenController extends Controller
{
    function index(){
        // return view('uitleen');   
    $studenten= DB::table('student')->select('*')->get();
    $boeken= DB::table('boeken')->select('*')->leftjoin('uitleen', 'uitleen.boeken', '=', 'isbn')->whereNull('boeken')->get();
    // $sensoren= DB::table('sensoren')->select('*')->whereNull('defect')->get();
    $sensoren= DB::table('sensoren')->whereNull('defect')->leftjoin('uitleen', 'uitleen.sensoren', '=', 'serienummer')->whereNull('sensoren')->get();
    // die($sensoren);
    $arduinos = DB::table('arduino')->select('*')->whereNull('defect')->leftjoin('uitleen', 'uitleen.arduinos', '=', 'serienummer')->whereNull('arduinos')->get();
    $uitl = DB::table('uitleen')->select('*')->get();
        return view('uitleen')->with('arduinos',$arduinos)->with('boeken',$boeken)->with('sensoren',$sensoren)->with('studenten',$studenten)->with('uitl', $uitl);     
    }

    public function store(Request $request){

        $sensoren = $request->input('sensoren');
        // dd($sensoren);
        if ($sensoren != null){ 
            foreach ($sensoren as $sensor) {
            $con = new Uitleen;
            $con->datum = $request->input('datum');
            $con->student = $request->input('student');
            $con->boeken = "";
            $con->arduinos = "";
            $con->opmerking="";
            $con->ingeleverd = $request->input('ingeleverd');
            $con->sensoren = $sensor;
            $con->save();
        }
    }
            $con = new Uitleen;
            $con->sensoren="";
            $con->student = $request->input('student');
            $con->datum = $request->input('datum');
            $con->boeken = $request->input('boeken');;
            $con->arduinos = $request->input('arduinos');
            $con->opmerking = $request->input('opmerking');
            $con->ingeleverd = $request->input('ingeleverd');
            $con->save();

        return redirect('uitleen')->with('status', 'Form Data Has Been Inserted');

    }


} 
