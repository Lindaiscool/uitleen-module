<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boeken;
use Illuminate\Support\Facades\DB;

class BoekenController extends Controller
{
    function index(){
        $boek = DB::table('boeken')->select('*')->get();
        return view('boeken')->with('boek',$boek);   
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

    public function destroy($id)
    {
        $boeken = Boeken::find($id);
        $boeken->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }

    public function edit($id)
    {
        $boeken = Boeken::find($id);
        $boek = DB::table('boeken')->select('*')->get();
        return view('edit-boeken', compact('boeken'))->with('boek', $boek);
    }

    public function update(Request $request, $id)
    {
        $boeken = Boeken::find($id);
        $boeken->serienummer = $request->input('serienummer');
        $boeken->isbn = $request->input('isbn');
        $boeken->titel = $request->input('titel');
        $boeken->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
}
