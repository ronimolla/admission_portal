<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Session;
use App\Models\AssesementPreselection;
use App\Models\WritingTest;
use App\Models\User;
use App\Models\Interview;
use App\Models\Waiver;
use App\Models\Program_batch;
use App\Models\Payment;
use App\Models\Assesment;
use App\Models\FinancialAid;
class UserController extends Controller
{
    
    /*------------view  login page where from
     student can login for the portal----------*/
    public function stdlog()
    {
        return view('student.stdlogin');
    }
  
    /*------------ sent the login request for
     student dashboard ----------*/
    public function loginrequest(Request $request){
      
        if($request->isMethod('post')){
            $data = $request->input();
            $user = DB::table('users')->where(['email'=> $data['email'],'password' => $data['password']])->count(); 
            //$faq =  DB::table('assesments')->where(['student_id'=> $user->student_id])->first(); 
            //echo $faq; die;
            if($user > 0){
                //echo "Success"; die;
                Session::put('userSession', $data['email']);
                //Session::put('userName', $data['email']);
                
                return redirect('/student/dashboard');
        	}else{
               // echo "failed"; die;
                return redirect('/student/login')->with('flash_message_error','Invalid Username or Password');
        	}
        }    
    }
    /*------------ First look for the 
    student dashboard----------*/
    public function stddashboard()
    {
        $studentDetails = User::where(['email'=>Session::get('userSession')])->first();
        $student_id = $studentDetails->student_id;    

        $preselcetion = Assesment::where(['student_id'=>$student_id])->get();
        return view('student.st_dashboard')->with(compact('studentDetails','preselcetion')); 
    }
    /*------------ sent the logout request 
    for student dashboard ----------*/
    public function logout(){
		Session::flush();
		return redirect('/student/login')->with('flash_message_error','Logout Successfully');
	}
    /*------------ show all program form
     for the student ----------*/
    public function program()
    {
       
        return view('student.program');
    }
    /*------------ show all event form 
    for the student ----------*/
    public function event()
    {
       
        return view('student.event');
    }

   





}
