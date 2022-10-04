<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arduino;
use Illuminate\Support\Facades\DB;

class ArduinoController extends Controller
{
    function index(){
        // $ard = arduino::all();
        // return view('arduino');// ->with(compact('ard'));

        $arduin = DB::table('arduinotype')->select('*')->get();
        return view('arduino')->with('arduin',$arduin);
        
    }

    public function store(Request $request){
        
        // dd($request);
        $con = new Arduino;
  
        $con->serienummer = $request->input('serienummer');
        $con->type = $request->input('type');
        $con->defect = $request->input('defect');
 
        $con->save();
 
        return redirect('arduino')->with('status', 'Form Data Has Been Inserted');
 
    }
}
