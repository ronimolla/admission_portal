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
use App\Models\Assesment;
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
                Session::put('userSession', $data['email']);
                //Session::put('userName', $data['email']);
                
                return redirect('/student/dashboard');
        	}else{
               // echo "failed"; die;
                return redirect('/student/login')->with('flash_message_error','Invalid Username or Password');
        	}
        }    
    }
    public function stddashboard()
    {
        $studentDetails = User::where(['email'=>Session::get('userSession')])->first();
        $student_id = $studentDetails->student_id;
        
       $preselcetion = Assesment::where(['student_id'=>$student_id])->first();
        //$preselcetion = AssesementPreselection::all()->where(['student_id'=>$student_id])->last();
        $preselcetionpercentage = $preselcetion-> pre_subtotal/10;
        
        $testresult = Assesment::where(['student_id'=>$student_id])->first();
        $testpercentage = $testresult->total_score/25;

        $interviewresult = Assesment::where(['student_id'=>$student_id])->first();
        $interviewpercentage = $interviewresult->total_interview_marks/40;
        //echo $testpercentage; die;
        return view('student.std_dashboard')->with(compact('studentDetails','preselcetionpercentage','preselcetion','testresult','testpercentage','interviewresult','interviewpercentage')); 
    }

    public function logout(){
		Session::flush();
		return redirect('/student/login')->with('flash_message_error','Logout Successfully');
	}
    public function program()
    {
       
        return view('student.program');
    }

    public function event()
    {
       
        return view('student.event');
    }

    public function mywaiver()
    {
        $studentDetails = User::where(['email'=>Session::get('userSession')])->first();
        $student_id = $studentDetails->student_id;
        $mywaiver = Waiver::where(['student_id'=> $student_id])->first();
        $prodramBatch =Program_batch::where(['batch_name'=> $mywaiver->program_batch_code])->first();
        echo "<pre>"; print_r($mywaiver); die;
    }

}
