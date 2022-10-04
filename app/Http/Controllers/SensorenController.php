<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensoren;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SensorenController extends Controller
{
    function index(){
        // return view('sensoren');
        
        $sensor = DB::table('soortsensor')->select('*')->get();
        return view('sensoren')->with('sensor',$sensor);
        
    }
 
    public function store(Request $request){
        
        // dd($request);
        $con = new Sensoren;
  
        $con->serienummer = $request->input('serienummer');
        $con->soort = $request->input('soort');
        $con->defect = $request->input('defect');
 
        $con->save();
 
        return redirect('sensoren')->with('status', 'Form Data Has Been Inserted');
 
    }
}
