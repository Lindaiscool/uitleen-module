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
    $boeken= DB::table('boeken')->select('*')->get();
    $sensoren= DB::table('soortsensor')->select('*')->get();
    $arduinos = DB::table('arduinotype')->select('*')->get();
        return view('uitleen')->with('arduinos',$arduinos)->with('boeken',$boeken)->with('sensoren',$sensoren)->with('studenten',$studenten);     
    }

    public function store(Request $request){
        
        // dd($request);
        $con = new Uitleen;
  
        $con->student = $request->input('student');
        $con->datum = $request->input('datum');
        $con->boeken = $request->input('boeken');
        $con->arduinos = $request->input('arduinos');
        $con->sensoren = $request->input('sensoren');

 
        $con->save();
 
        return redirect('uitleen')->with('status', 'Form Data Has Been Inserted');
 
    }
}
