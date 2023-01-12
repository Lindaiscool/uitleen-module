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
        
    
        $uitl = DB::table('uitleen')
        ->leftJoin('sensoren', 'uitleen.sensoren', '=', 'sensoren.serienummer')
        ->leftJoin('boeken', 'uitleen.boeken', '=', 'boeken.isbn')
        ->leftJoin('arduino', 'uitleen.arduinos', '=', 'arduino.serienummer')
        ->select('boeken.*', 'arduino.*', 'sensoren.*', 'uitleen.*', 'uitleen.id as uitleenId')->get();
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
        //dd($uitleen);
        $studenten= DB::table('student')->select('*')->get();
        
        $boeken= DB::table('boeken')->select('*')->leftjoin('uitleen', 'uitleen.boeken', '=', 'isbn')->whereNull('boeken')->get();
        
        $sensoren= DB::table('sensoren')->select('*')->whereNull('defect')->leftjoin('uitleen', 'uitleen.sensoren', '=', 'serienummer')->whereNull('sensoren')->get();
        $arduinos = DB::table('arduino')->select('*')->whereNull('defect')->leftjoin('uitleen', 'uitleen.arduinos', '=', 'serienummer')->whereNull('arduinos')->get();
        
        $uitl = DB::table('uitleen')->select('*')->where('uitleen.id', '=', $id)
            ->leftJoin('boeken', 'uitleen.boeken', '=', 'boeken.isbn')->select('*')
            ->leftJoin('arduino', 'uitleen.arduinos', '=', 'arduino.serienummer')->select('*')
            ->leftJoin('sensoren', 'uitleen.sensoren', '=', 'sensoren.serienummer')->select('*')->get();
        // dd($uitl);
        return view('edit-uitleen', compact('uitleen'))->with('arduinos',$arduinos)->with('boeken',$boeken)->with('sensoren',$sensoren)->with('studenten',$studenten)->with('uitl', $uitl);
    }


        //     $uitl = DB::table('uitleen')
    //         ->leftJoin('boeken', 'uitleen.boeken', '=', 'boeken.titel')
    //         ->leftJoin('arduino', 'uitleen.arduinos', '=', 'arduino.type')
    //         ->leftJoin('sensoren', 'uitleen.sensoren', '=', 'sensoren.soort')
    //         ->select('boeken.*', 'arduino.*', 'sensoren.*', 'uitleen.*', 'uitleen.id as uitleenId')->get();

    //     return view('edit-uitleen', compact('uitleen'))->with('uitl', $uitl)->with('studenten',$studenten)->with('boeken',$boeken)->with('sensoren',$sensoren)->with('arduinos',$arduinos);
    // }
    
    
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
