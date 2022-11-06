<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welcome;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Uitleen;

class WelcomeController extends Controller
{
    function index(){
        // return view('sensoren');
        
    
        $uitl = DB::table('uitleen')->select('*')->get();
        return view('/welcome')->with('uitl', $uitl);
        
    }

    public function destroy($id)
    {
        $uitleen = Uitleen::find($id);
        $uitleen->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }

    public function edit($id)
    {
        $uitleen = Uitleen::find($id);
        $studenten= DB::table('student')->select('*')->get();
        $boeken= DB::table('boeken')->select('*')->get();
        $sensoren= DB::table('sensoren')->select('*')->whereNull('defect')->get();
        $arduinos = DB::table('arduino')->select('*')->whereNull('defect')->get();
        $uitl = DB::table('uitleen')->select('*')->get();
        return view('edit-uitleen', compact('uitleen'))->with('arduinos',$arduinos)->with('boeken',$boeken)->with('sensoren',$sensoren)->with('studenten',$studenten)->with('uitl', $uitl);
    }

    public function update(Request $request, $id)
    {
        $uitleen = Uitleen::find($id);
        $uitleen->student = $request->input('student');
        $uitleen->datum = $request->input('datum');
        $uitleen->boeken = $request->input('boeken');
        $uitleen->arduinos = $request->input('arduinos');
        $uitleen->sensoren = $request->input('sensoren');
        $uitleen->opmerking = $request->input('opmerking');
        $uitleen->ingeleverd = $request->input('ingeleverd');
        $uitleen->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    
}