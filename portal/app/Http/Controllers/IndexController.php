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
    public function form()
    {
       
       //echo "Success"; die;
        return view('form_collection');
    }
    public function overview()
    {
       
      // echo "Success"; die;
        return view('overview');
    }



}
