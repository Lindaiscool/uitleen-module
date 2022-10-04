<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boeken;

class BoekenController extends Controller
{
    function index(){
        return view('boeken');   
    }

    public function store(Request $request){
        
        // dd($request);
        $con = new Boeken;
  
        $con->serienummer = $request->input('serienummer');
        $con->isbn = $request->input('isbn');
        $con->titel = $request->input('titel');
 
        $con->save();
 
        return redirect('boeken')->with('status', 'Form Data Has Been Inserted');
 
    }
}
