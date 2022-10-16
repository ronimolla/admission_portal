<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
class UserController extends Controller
{
    //

    public function stdlog()
    {
       
        return view('student.stdlogin');
    }
    public function loginrequest(Request $request){
        
        if($request->isMethod('post')){
            $data = $request->input();
            $user = DB::table('users')->where(['email'=> $data['email'],'password' => $data['password']])->count(); 
            if($user > 0){
                //echo "Success"; die;
                Session::put('adminSession', $data['email']);
                
                return redirect('/student/dashboard');
        	}else{
               // echo "failed"; die;
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
        	}
        }    
    }
    public function stddashboard()
    {
        $studentDetails = User::where(['email'=>Session::get('adminSession')])->first();
        //echo "<pre>"; print_r($studentDetails); die;
        return view('student.std_dashboard')->with(compact('studentDetails')); 
    }

    public function logout(){
		Session::flush();
		return redirect('/student/login')->with('flash_message_error','Logout Successfully');
	}


}
