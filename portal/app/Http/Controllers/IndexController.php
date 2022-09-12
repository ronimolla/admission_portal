<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function dashboard()
    {
       
       //echo "Success"; die;
        return view('dashboard');
    }


}
