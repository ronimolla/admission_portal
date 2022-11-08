<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Program_batch;

class ViewController extends Controller
{
    //
    public function bblt() 
    { 
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $batchinfo = Program_batch::all()
            ->where('program_id', '= ','1')
            ->last();
        return view('program.bblt')->with(compact('batchinfo','district','division'));
    }
    public function bbltj()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','2')
                       ->last();
        return view('program.bbltj')->with(compact('batchinfo','district','division'));
     
    }
    public function apl()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','4')
                       ->last();
        return view('program.apl')->with(compact('batchinfo','district','division'));
    }
    public function yls()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','4')
                       ->last();
        return view('program.yls')->with(compact('batchinfo','district','division'));
     
    }
  
    public function careerx()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','3')
                       ->last();
        return view('program.careerx')->with(compact('batchinfo','district','division'));
    }
}
