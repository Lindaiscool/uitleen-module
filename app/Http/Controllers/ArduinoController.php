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
        $arduino = DB::table('arduino')->select('*')->get();
        return view('arduino')->with('arduin',$arduin)->with('arduino',$arduino);
        
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

    public function destroy($id)
    {
        $arduinos = Arduino::find($id);
        $arduinos->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }

    public function edit($id)
    {
        $arduinos = Arduino::find($id);
        $arduinotype = DB::table('arduinotype')->select('*')->get();
        $arduino = DB::table('arduino')->select('*')->get();
        return view('edit-arduino', compact('arduinos'))->with('arduinotype',$arduinotype)->with('arduino', $arduino);
    }

    public function update(Request $request, $id)
    {
        $arduinos = Arduino::find($id);
        $arduinos->serienummer = $request->input('serienummer');
        $arduinos->type = $request->input('type');
        $arduinos->defect = $request->input('defect');
        $arduinos->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
}


