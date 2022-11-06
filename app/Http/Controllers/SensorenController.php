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
        
        $soortsensor = DB::table('soortsensor')->select('*')->get();
        $sensor = DB::table('sensoren')->select('*')->get();
        return view('sensoren')->with('soortsensor',$soortsensor)->with('sensor', $sensor);
        
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

    public function destroy($id)
    {
        $sensoren = Sensoren::find($id);
        $sensoren->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }

    public function edit($id)
    {
        $sensoren = Sensoren::find($id);
        $soortsensor = DB::table('soortsensor')->select('*')->get();
        $sensor = DB::table('sensoren')->select('*')->get();
        return view('edit-sensoren', compact('sensoren'))->with('soortsensor',$soortsensor)->with('sensor', $sensor);
    }

    public function update(Request $request, $id)
    {
        $sensoren = Sensoren::find($id);
        $sensoren->serienummer = $request->input('serienummer');
        $sensoren->soort = $request->input('soort');
        $sensoren->defect = $request->input('defect');
        $sensoren->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
}
