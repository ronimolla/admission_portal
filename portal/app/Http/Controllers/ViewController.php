<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_batch;

class ViewController extends Controller
{
    //
    public function bblt() 
    { 
        $batchinfo = Program_batch::all()
            ->where('program_id', '= ','1')
            ->last();
        return view('program.bblt')->with(compact('batchinfo'));
    }
    public function bbltj()
    {  
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','2')
                       ->last();
        return view('program.bbltj')->with(compact('batchinfo'));
     
    }
    public function apl()
    {  
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','3')
                       ->last();
        return view('program.apl')->with(compact('batchinfo'));
    }
    public function yls()
    {  
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','4')
                       ->last();
        return view('program.yls')->with(compact('batchinfo'));
     
    }
  
    public function careerx()
    {  
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','5')
                       ->last();
        return view('program.careerx')->with(compact('batchinfo'));
    }
}
