<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Mail;
use App\Models\StudentPersonalInfo;
use App\Models\StudentContactInfo;
use App\Models\StudentEducationalInfo;
use App\Models\StudentAddressInfo;
use App\Models\StudentMarcomInfo;
use App\Models\StudentQuestionaryInfo;
use App\Models\StudentProgram;
use App\Models\AssesementPreselection;
use App\Models\Program_batch;
use App\Models\WritingTest;
use App\Models\FollowUp;
use App\Models\Interview;
use App\Models\Assesment;
use App\Models\Payment;
use App\Models\User;
use App\Mail\SigmUp;
use App\Mail\PreselectionStaus;
use Session;
use App\Models\FinancialAid;
use App\Models\Waiver;

class AssesmentController extends Controller
{
    /* ------
    view All applicant data who are waiting for preselection
    Complite done Don't change the database and migration file
    ------
    */
    public function preselection()
    {  
        
        $student = DB::table('student_personal_infos') ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->where('assesments.preselection_stage','=','pending')->get();
        //echo "<pre>"; print_r($student); die;

        $preselection_stage = DB::table('student_personal_infos') ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->where([['assesments.pre_follow_up_stage','=','pending'],['assesments.preselection_stage','=','Done'],
        ['assesments.select_for_writing_test','=','Eligible']])->get();

       return view('assesment.preselection')->with(compact('student','preselection_stage'));
    }

    /*-----Update aApplicent Preselection Score
    Complite done Don't change the database and migration file
    ---------
    */
    public function update(Request $request,$student_id= null,$program_batch_code= null){

        $program_info = DB::table('program_batches') ->join('programs', 'program_batches.program_id', '=', 'programs.program_id')
        ->where('program_batches.batch_id','=',$program_batch_code)->first();
        $program_name =$program_info->program_name;	
        //echo "<pre>"; print_r($program_name); die;

        $studentcontactinfo = StudentContactInfo::where(['student_id'=>$student_id])->first();
        $email_address = $studentcontactinfo ->email_address;
        $password = random_int(100000, 999999);	

        $usersCount = User::where('email',$email_address)->count();
            
		if($request->isMethod('post')){ 
            $data = $request->input(); 
            $totall = 0; 

            Mail:: to ($email_address)->send(new SigmUp($email_address));
            if($data['writting_eligibility'] == 'Incapable'){
                StudentProgram::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_code])->update(['application_status'=>'rejected']);     
            }

            if($data['writting_eligibility'] == 'Eligible' && $usersCount==0 ){
                
                $student = new User;
                $student->student_id = $data['std_id'];
                $student->name = $data['full_name'];
                $student->email  = $email_address;
                $student->password =  $password;
                $student->save(); 
            }

            $totall = $data['articulation'] + $data['logical_reasoning'] + $data['authemticity'] ;
            Mail:: to ($email_address)->send(new PreselectionStaus($email_address,$totall));
            if( $program_name =='BBLT' || $program_name =='BBLTJ'  ){
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_code])->update(['pre_assessor'=>$data['assessor_name'],'pre_authenticity'=>$data['authemticity'],
                'pre_articulation'=>$data['articulation'],'pre_logical_reasoning'=>$data['logical_reasoning'],'pre_subtotal'=>$totall,
                'select_for_writing_test'=>$data['writting_eligibility'],'pre_selection_remark'=>$data['pre_remark'],'preselection_stage'=>'Done']);
            }else{
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_code])->update(['pre_assessor'=>$data['assessor_name'],'pre_authenticity'=>$data['authemticity'],
                'pre_articulation'=>$data['articulation'],'pre_logical_reasoning'=>$data['logical_reasoning'],'pre_subtotal'=>$totall,
                'select_for_interview'=>$data['writting_eligibility'],'select_for_writing_test'=>$data['writting_eligibility'],'pre_selection_remark'=>$data['pre_remark'],'preselection_stage'=>'Done']);
            }

            return redirect('/assesment/preselection')->with('flash_message_success','Preselection result updated');
        }  

        $studentinfo = DB::table('student_personal_infos')->where('student_personal_infos.student_id','=',$student_id)->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_code])->first();
       
        //echo "<pre>"; print_r($assinfo) ; die;

        return view('assesment.edit_preselection')->with(compact('studentinfo','assinfo','program_name'));  
    }
    /*
    -------
    Update preselection Follown up Discussion
    Succesfully done
    -------
    */
    public function follow_up(Request $request,$student_id= null,$program_batch_id= null){	
       
        $program_info = DB::table('program_batches') ->join('programs', 'program_batches.program_id', '=', 'programs.program_id')
        ->where('program_batches.batch_id','=',$program_batch_id)->first();
        $program_name =$program_info->program_name;	
        //echo "<pre>"; print_r($program_name); die;

		if($request->isMethod('post')){
            $data = $request->input();
           // echo "<pre>"; print_r($data); die;
           if( $program_name =='BBLT' || $program_name =='BBLTJ'  ){
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(
                ['pre_follow_up_assessor_name'=>$data['assessor_name'],'pre_contact_media'=>$data['conatct_media'],'want_attend_for_test'=>$data['Student_decision'],
                'reason_for_not_attending_test'=>$data['reason'],'pre_follow_up_stage'=>'Done']);
           }else{
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(
                ['pre_follow_up_assessor_name'=>$data['assessor_name'],'pre_contact_media'=>$data['conatct_media'],'want_attend_for_interview'=>$data['Student_decision'],
                'reason_for_not_attending_interview'=>$data['reason'],'writing_follow_up_stage'=>'Done','pre_follow_up_stage'=>'Done']);

           }
          
            return redirect('/assesment/preselection')->with('flash_message_success_follow_up','Preselection follow up updated');
        } 

        $studentinfo = DB::table('student_personal_infos')->where('student_personal_infos.student_id','=',$student_id)->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
        $coninfo = StudentContactInfo::where(['student_id'=>$student_id])->first();
         return view('assesment.preselection_follow_up')->with(compact('studentinfo','assinfo','coninfo','program_name'));  
    }

    /*------
    view All applicant data who are Selected for Writing Test
    Succesfully Done
    -------
    */
    public function writingtest()
    {    
        
        $student = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->where([['assesments.want_attend_for_test','=','Yes'],['assesments.writing_preselection_stage','=','pending']])
        ->get();

        $preselection_stage = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->where([['assesments.select_for_interview','=','Eligible'],['assesments.writing_follow_up_stage','=','pending'],['assesments.writing_preselection_stage','=','Done']])->get();
        //echo "<pre>"; print_r($preselection_stage); die;
       return view('assesment.writingtest')->with(compact('student','preselection_stage'));
    }

    /*-------
    Update Student Test result
    Succefully complited
    --------
    */
    public function testresult(Request $request,$student_id= null,$program_batch_id= null){	
        
        //echo"$student_id";die;
        $prescore = Assesment::where(['student_id'=>$student_id])->first();
        $presubtotal = $prescore->pre_subtotal;
        $WAscore = 0;
        if($request->isMethod('post')){    
            $data = $request->input();
            $WAscore = $data['test_score'] + $presubtotal;

            if($data['select_for_interview'] == 'Incapable'){
                StudentProgram::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['application_status'=>'rejected']);     
            }
            
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['writing_test_assessor'=>$data['assessor_name'],'writing_test_attended'=>$data['attended'],
                'total_score'=>$data['test_score'],'writing_and_appication_score'=> $WAscore,'select_for_interview'=>$data['select_for_interview'],
                'writing_preselection_stage'=>'Done']);
            return redirect('/assesment/writing'); 
        }  
        $studentinfo = StudentPersonalInfo::where(['student_id'=>$student_id])->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();

        return view('assesment.edit_test_result')->with(compact('studentinfo','assinfo'));   
    }

    /*---------
    Update Writing test Follown 
    up Discussion
    --------
    */
    public function writing_follow_up(Request $request,$student_id= null,$program_batch_id= null){	
		if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update([
                'test_follow_up_assessor_name'=>$data['assessor_name'],'test_contact_media'=>$data['conatct_media'],'want_attend_for_interview'=>$data['Student_decision'],
                'reason_for_not_attending_interview'=>$data['reason'],'writing_follow_up_stage'=>'Done']);
            return redirect('/assesment/writing');
        }  
        $studentinfo = DB::table('student_personal_infos')->where('student_personal_infos.student_id','=',$student_id)->first();
        $coninfo = StudentContactInfo::where(['student_id'=>$student_id])->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
         return view('assesment.writing_follow_up')->with(compact('studentinfo','assinfo','coninfo'));  
    }

    /*-----------
    view All applicant data who are Selected for 
    Writing Test Succesfully Done
    --------
    */
    public function interview()
    {    
        $student = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->where([['assesments.want_attend_for_interview','=','Yes'],['assesments.interview_preselection_stage','=','pending']])
        ->get();

        $preselection_stage = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesments', 'student_personal_infos.student_id', '=', 'assesments.student_id')
        ->where([['assesments.select_for_registration','=','Eligible'],['assesments.interview_preselection_stage','=','Done'],['assesments.interview_follow_up_stage','=','pending']])->get();
        
       return view('assesment.interview')->with(compact('student','preselection_stage'));
    }

     /*-------
    Update Student Test resul8t
    Succefully complited
    --------
    */
    public function interviewresult(Request $request,$student_id= null,$program_batch_id= null){
        
        $writing_result = Assesment::where(['student_id'=>$student_id])->first();
        $totalresult = $writing_result->writing_and_appication_score;
        $interviewtotal = 0;
         
        if($request->isMethod('post')){    
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            $interviewtotal =$data['competence'] + $data['courage'] + $data['compassion'] + $data['commitment'] ;
            $alltotall = $totalresult + $interviewtotal ;

            if($data['select_for_registration'] == 'Incapable'){
                StudentProgram::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['application_status'=>'rejected']);     
            }

            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['interviewer'=>$data['interviewer'],'attend_interview'=>$data['attend'],'attend_group_discussion'=>$data['g_attend'],
                'competence'=>$data['competence'],'courage'=>$data['courage'],'compassion'=>$data['compassion'],'commitment'=>$data['commitment'],'total_interview_marks'=>$interviewtotal,
                'all_totall_marks'=>$alltotall,'select_for_registration'=>$data['select_for_registration'],
                'interview_preselection_stage'=>'Done']);
            return redirect('/assesment/interview'); 
        }  
        $studentinfo = StudentPersonalInfo::where(['student_id'=>$student_id])->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
        return view('assesment.edit_interview_result')->with(compact('studentinfo','assinfo'));   
    }

    /*---------
    Update Interview  Follown 
    up Discussion
    --------
    */
    public function interview_follow_up(Request $request,$student_id= null,$program_batch_id= null){
        $info = Assesment::join('program_batches','assesments.program_batch_id', '=', 'program_batches.batch_id')
        ->where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
        
		if($request->isMethod('post')){
            $data = $request->input();
          
           Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update([
                'interview_follow_up_assessor_name'=>$data['assessor_name'],'interview_followup_contact_media'=>$data['conatct_media'],'want_to_registration'=>$data['want_to_registration'],
                'request_faq'=>$data['request_faq'],'sent_faq'=>$data['sent_fid'],'reason_for_not_registration'=>$data['reason'],'final_remark'=>$data['renark'],'interview_follow_up_stage'=>'Done']);

            $payment = new Payment;
            $payment->student_id = $info->student_id; 
            $payment->full_name = $data['full_name']; 
            $payment->program_batch_name = $info->batch_name; 
            $payment->program_batch_id = $info->batch_id; 
            $payment->registration_fees = $info->registration_fees; 
            $payment->final_registration_fees = $info->registration_fees; 
            $payment->save(); 
    
            return redirect('/assesment/interview');
        }  
        $studentinfo = DB::table('student_personal_infos')->where('student_personal_infos.student_id','=',$student_id)->first();
        $coninfo = StudentContactInfo::where(['student_id'=>$student_id])->first();
        $assinfo = Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
         return view('assesment.interview_follow_up')->with(compact('studentinfo','assinfo','coninfo'));  
    }

    /*-----------------------All application for wqaiver request 
    those are applied by student-------------------*/
    public function financialaid(){	
      
        $finance = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('financial_aids', 'student_personal_infos.student_id', '=', 'financial_aids.student_id')
        ->join('program_batches', 'financial_aids.program_batch_id', '=', 'program_batches.batch_id')
        ->where('financial_aids.update_request','=','pending')
        ->get();
        //echo "<pre>"; print_r($finance); die;
        return view('assesment.financialaid')->with(compact('finance'));   
    }

    public function waiver(Request $request,$student_id= null,$program_batch_id= null){

		 if($request->isMethod('post')){
              
            $data = $request->input();
            $finalfees = $data['registration_fees'] - $data['waiver_amount'] ;
            Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])
            ->update(['final_registration_fees'=>$finalfees]);
            $waiver = new Waiver;
            $waiver->student_id = $data['std_id'];
            $waiver->full_name = $data['full_name'];
            $waiver->program_batch_name = $data['program_name'];
            $waiver->program_batch_id = $data['program_code'];
            $waiver->educational_medium = $data['medium'];
            $waiver->waiver_percentage = $data['waiver_percentage'];
            $waiver->waiver_amount = $data['waiver_amount'];
            $waiver->waiver_reason = $data['reason'];
            $waiver->save();
            FinancialAid::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])
            ->update(['update_request'=>'Done']);
            
         }  
        $fastudent = FinancialAid::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
        $edinfo = StudentEducationalInfo::where(['student_id'=>$student_id])->first();
        $batchdetails = Program_batch::where(['batch_id'=> $fastudent->program_batch_id])->first();
        
         return view('assesment.update_financial_status')->with(compact('fastudent','batchdetails','edinfo'));  
    }

    public function payment(){	
      
        $paymentdetails = Payment::where('payment_status','=','sent')->get();
        //echo "<pre>"; print_r($finance); die;
        return view('assesment.paymentdetails')->with(compact('paymentdetails'));   
    }

    public function acceptregistration($student_id= null,$program_batch_id= null){
        Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['payment_status'=>'Accept']);
        StudentProgram::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['application_status'=>'selected']); 
        Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['registration_status'=>'selected']); 
        return redirect()->back();
       
    }

    public function update_payment(Request $request,$student_id= null,$program_batch_id= null){
        
        if($request->isMethod('post')){
            
            $data = $request->input();
           //echo "<pre>"; print_r($data); die;
            Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['2nd_payment_media'=>$data['pay_method'],
            '2nd_reference'=>$data['referenceid'],'2nd_payment_mobileno'=>$data['mobileno'],'payment_status'=>'Accept']);
            StudentProgram::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['application_status'=>'selected']); 
            Assesment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['registration_status'=>'selected']); 

           return redirect('/assesment/payment');
           
        }  
        $updatepayment = Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
       
        return view('assesment.updatepayment_details')->with(compact('updatepayment'));  
   }


}