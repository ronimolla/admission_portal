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
use App\Models\FinancialAid;
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

        $preselcetion = Assesment::where(['student_id'=>$student_id])->get();
        return view('student.st_dashboard')->with(compact('studentDetails','preselcetion')); 
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


    public function financialaid_form(Request $request){
        
		if($request->isMethod('post')){
            $data = $request->input();
          
            $financila = new FinancialAid;
            $financila->full_name = $data['full_name'];
            $financila->bgn_member_id = $data['bgn_id'];
            $financila->student_id = $data['student_id'];
            $financila->email = $data['email'];
            $financila->contact_number = $data['contact'];
           
            $financila->program_batch_id = $data['program_code'];
            if(empty($data['father'])){
                $father =' ';
            }else{
                $father = $data['father'];
            }
            if(empty($data['mother'])){
                $mother =' ';
            }else{
                $mother = $data['mother'];
            }
            if(empty($data['others'])){
                $others =' ';
            }else{
                $others = $data['others'];
            }
            $financila->family_members = $data['family_members'];
            $financila->earning_person_number = $data['earning_person_number'];
            $financila->earning_person_father = $father;
            $financila->earning_person_mother = $mother;
            $financila->earning_person_other  = $others;

            $financila->father_name = $data['father_name'];
            $financila->father_contact_number = $data['father_contact_number'];
            $financila->father_occupation = $data['father_occupation'];
            $financila->father_organization_name = $data['father_orgazation_name'];
            $financila->father_monthly_income = $data['father_monthly_income'];

            $financila->mother_name = $data['mother_name'];
            $financila->mother_contact_number = $data['mother_contact_number'];
            $financila->mother_occupation = $data['mother_occupation'];
            $financila->mother_organization_name = $data['mother_orgazation_name'];
            $financila->mother_monthly_income = $data['mother_monthly_income'];
            
            $financila->other_name = $data['other_name'];
            $financila->relation = $data['relation'];
            $financila->other_contact_number = $data['other_contact'];
            $financila->other_occupation = $data['other_occupation'];
            $financila->other_organization_name = $data['other_organization_name'];
            $financila->other_monthly_income = $data['mother_monthly_income'];
            $financila->income_from_asset = $data['monthly_fixedasset_income'];

            $financila-> tuition_fees= $data['tution_fees'];
            $financila->booking_supplies= $data['book&supply'];
            $financila->living_expenses = $data['living_expenses'];
            $financila->total_educational_expense = $data['total_educational_expense'];
            $financila->personal_expenses = $data['personal_expenses'];
            $financila->transportation_expenses = $data['transportation_expenses'];
            $financila->parent_contribution = $data['parent_contribution'];
            $financila->own_contribution = $data['own_contribution'];

            $financila->total_earning = $data['total_earn'];
            $financila->scholarship = $data['schlarship'];
            $financila->other_member_contribution = $data['family_menber_contribution'];
            $financila->total_resource = $data['total_resources'];
            $financila-> reason_for_apply= $data['reasoning'];
            $financila-> communicate_person= $data['verification_person'];
            $financila->save();
            
            return redirect('/student/dashboard');
        }  
        $studentinfo = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->where(['email_address'=>Session::get('userSession')])
        ->first();
        //  $batchinfo = Program_batch::all()
        //                 ->where('program_id', '= ','1')
        //                 ->last();
        $batchinfo = DB::table('assesments')
         ->join('program_batches', 'assesments.program_batch_id', '=', 'program_batches.batch_id')
         ->where(['student_id'=>$studentinfo->student_id,['request_faq','=','Yes']])
         ->get();
        
         return view('assesment.financialaid_form')->with(compact('studentinfo','batchinfo')); 
    }



    public function mywaiver()
    {
        $studentDetails = User::where(['email'=>Session::get('userSession')])->first();
        $student_id = $studentDetails->student_id;
        $mywaiver = Waiver::where(['student_id'=> $student_id])->get();
       $mywaiverdetails = DB::table('waivers')
       ->join('program_batches', 'waivers.program_batch_id', '=', 'program_batches.batch_id')
       ->where(['student_id'=> $student_id])->get();
       // echo "<pre>"; print_r($mywaiverdetails); die;
        return view('student.mywaiver')->with(compact('mywaiverdetails')); 
    }

}
