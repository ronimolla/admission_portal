<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Models\StudentPersonalInfo;
use App\Models\StudentContactInfo;
use App\Models\StudentEducationalInfo;
use App\Models\StudentAddressInfo;
use App\Models\StudentMarcomInfo;
use App\Models\StudentQuestionaryInfo;
use App\Models\AssesementPreselection;
use App\Models\Program_batch;
use App\Models\WritingTest;
use App\Models\FollowUp;
use App\Models\Interview;
use App\Models\User;
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
        $student = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesement_preselections', 'student_personal_infos.student_id', '=', 'assesement_preselections.student_id')
        ->where('assesement_preselections.preselection_stage','=','pending')
        ->get();
        $preselection_stage = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('assesement_preselections', 'student_personal_infos.student_id', '=', 'assesement_preselections.student_id')
        ->where([['assesement_preselections.follow_up_stage','=','pending'],['assesement_preselections.preselection_stage','=','Done'],
        ['assesement_preselections.select_for_writing_test','=','Eligible']])->get();
        
       return view('assesment.preselection')->with(compact('student','preselection_stage'));
    }
    /*-----Update aApplicent Preselection Score
    Complite done Don't change the database and migration file
    ---------
    */
    public function update(Request $request,$student_id= null){	

        $studentcontactinfo = StudentContactInfo::where(['student_id'=>$student_id])->first();
        $email_address = $studentcontactinfo ->email_address;
        $password = random_int(100000, 999999);	

		if($request->isMethod('post')){ 

            $data = $request->input();
            $totall = 0;
            if($data['writting_eligibility'] == 'Eligible'){
                
                $student = new User;
                $student->student_id = $data['std_id'];
                $student->name = $data['full_name'];
                $student->email  = $email_address;
                $student->password =  $password; 
                $student->save(); 
            }
            $totall = $data['articulation'] + $data['logical_reasoning'] + $data['authemticity'] ;
            
            AssesementPreselection::where(['student_id'=>$student_id])->update(['assessor'=>$data['assessor_name'],'authenticity'=>$data['authemticity'],
                'articulation'=>$data['articulation'],'logical_reasoning'=>$data['logical_reasoning'],'subtotal'=>$totall,
                'select_for_writing_test'=>$data['writting_eligibility'],'preselection_stage'=>'Done']);
            

            return redirect('/assesment/preselection');
        }  
        $studentinfo = StudentPersonalInfo::where(['student_id'=>$student_id])->first();
        return view('assesment.edit_preselection')->with(compact('studentinfo'));  
    }
    /*
    -------
    Update preselection Follown up Discussion
    Succesfully done
    -------
    */
    public function follow_up(Request $request,$student_id= null){	
		if($request->isMethod('post')){
            $data = $request->input();
           // echo "<pre>"; print_r($data); die;
            FollowUp::where(['student_id'=>$student_id])->update(
                ['pre_follow_up_assessor_name'=>$data['assessor_name'],'pre_contact_media'=>$data['conatct_media'],'want_attend_for_test'=>$data['Student_decision'],
                'reason_for_not_attending_test'=>$data['reason'],'test_time'=>$data['time']]);
            AssesementPreselection::where(['student_id'=>$student_id])->update(['follow_up_stage'=>'Done']);
            return redirect('/assesment/preselection');
        } 

        $studentinfo = DB::table('student_personal_infos')
        ->join('assesement_preselections', 'student_personal_infos.student_id', '=', 'assesement_preselections.student_id')
        ->where('student_personal_infos.student_id','=',$student_id)
        ->first();
         return view('assesment.preselection_follow_up')->with(compact('studentinfo'));  
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
        ->join('follow_ups', 'student_personal_infos.student_id', '=', 'follow_ups.student_id')
        ->join('writing_tests', 'student_personal_infos.student_id', '=', 'writing_tests.student_id')
        ->where([['follow_ups.want_attend_for_test','=','Yes'],['writing_tests.writing_preselection_stage','=','pending']])
        ->get();
        $preselection_stage = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('follow_ups', 'student_personal_infos.student_id', '=', 'follow_ups.student_id')
        ->join('writing_tests', 'student_personal_infos.student_id', '=', 'writing_tests.student_id')
        ->where([['writing_tests.select_for_interview','=','Eligible'],['writing_tests.writing_follow_up_stage','=','pending'],['writing_tests.writing_preselection_stage','=','Done']])->get();
        
       return view('assesment.writingtest')->with(compact('student','preselection_stage'));
    }
    /*-------
    Update Student Test result
    Succefully complited
    --------
    */
    public function testresult(Request $request,$student_id= null){	
        
        //echo"$student_id";die;
        $prescore = AssesementPreselection::where(['student_id'=>$student_id])->first();
        $presubtotal = $prescore->subtotal;
        $WAscore = 0;
        if($request->isMethod('post')){    
            $data = $request->input();
            $WAscore = $data['test_score'] + $presubtotal;
            WritingTest::where(['student_id'=>$student_id])->update(['writing_test_assessor'=>$data['assessor_name'],'writing_test_attended'=>$data['attended'],
                'total_score'=>$data['test_score'],'writing_and_appication_score'=> $WAscore,'select_for_interview'=>$data['select_for_interview'],
                'writing_preselection_stage'=>'Done']);
            return redirect('/assesment/writing'); 
        }  
        $studentinfo = StudentPersonalInfo::where(['student_id'=>$student_id])->first();
        return view('assesment.edit_test_result')->with(compact('studentinfo'));   
    }
    /*---------
    Update Writing test Follown 
    up Discussion
    --------
    */
    public function writing_follow_up(Request $request,$student_id= null){	
		if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            FollowUp::where(['student_id'=>$student_id])->update([
                'test_follow_up_assessor_name'=>$data['assessor_name'],'test_contact_media'=>$data['conatct_media'],'want_attend_for_interview'=>$data['Student_decision'],
                'reason_for_not_attending_interview'=>$data['reason'],'interview_time'=>$data['time']]);
                WritingTest::where(['student_id'=>$student_id])->update(['writing_follow_up_stage'=>'Done']);
            return redirect('/assesment/writing');
        }  
        $studentinfo = DB::table('student_personal_infos')
        ->join('writing_tests', 'student_personal_infos.student_id', '=', 'writing_tests.student_id')
        ->where('student_personal_infos.student_id','=',$student_id)
        ->first();
         return view('assesment.writing_follow_up')->with(compact('studentinfo'));  
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
        ->join('follow_ups', 'student_personal_infos.student_id', '=', 'follow_ups.student_id')
        ->join('interviews', 'student_personal_infos.student_id', '=', 'interviews.student_id')
        ->where([['follow_ups.want_attend_for_interview','=','Yes'],['interviews.interview_preselection_stage','=','pending']])
        ->get();
        $preselection_stage = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('follow_ups', 'student_personal_infos.student_id', '=', 'follow_ups.student_id')
        ->join('interviews', 'student_personal_infos.student_id', '=', 'interviews.student_id')
        ->where([['interviews.select_for_registration','=','Eligible'],['interviews.interview_preselection_stage','=','Done'],['interviews.interview_follow_up_stage','=','pending']])->get();
        
       return view('assesment.interview')->with(compact('student','preselection_stage'));
    }
     /*-------
    Update Student Test resul8t
    Succefully complited
    --------
    */
    public function interviewresult(Request $request,$student_id= null){
        
        $writing_result = WritingTest::where(['student_id'=>$student_id])->first();
        $totalresult = $writing_result->writing_and_appication_score;
        $interviewtotal = 0;
         
        if($request->isMethod('post')){    
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            $interviewtotal =$data['competence'] + $data['courage'] + $data['compassion'] + $data['commitment'] ;
            $alltotall = $totalresult + $interviewtotal ;
           
            Interview::where(['student_id'=>$student_id])->update(['interviewer'=>$data['interviewer'],'attend_interview'=>$data['attend'],'attend_group_discussion'=>$data['g_attend'],
                'competence'=>$data['competence'],'courage'=>$data['courage'],'compassion'=>$data['compassion'],'commitment'=>$data['commitment'],'total_interview_marks'=>$interviewtotal,
                'all_totall_marks'=>$alltotall,'select_for_registration'=>$data['select_for_registration'],
                'interview_preselection_stage'=>'Done']);
            return redirect('/assesment/interview'); 
        }  
        $studentinfo = StudentPersonalInfo::where(['student_id'=>$student_id])->first();
        return view('assesment.edit_interview_result')->with(compact('studentinfo'));   
    }
    /*---------
    Update Interview  Follown 
    up Discussion
    --------
    */
    public function interview_follow_up(Request $request,$student_id= null){
		if($request->isMethod('post')){
            $data = $request->input();
           // echo "<pre>"; print_r($data); die;
            FollowUp::where(['student_id'=>$student_id])->update([
                'interview_follow_up_assessor_name'=>$data['assessor_name'],'interview_followup_contact_media'=>$data['conatct_media'],'want_to_registration'=>$data['want_to_registration'],
                'request_faq'=>$data['request_faq'],'sent_faq'=>$data['sent_fid'],'reason_for_not_registration'=>$data['reason'],'final_remark'=>$data['renark']]);
                Interview::where(['student_id'=>$student_id])->update(['interview_follow_up_stage'=>'Done']);
            return redirect('/assesment/interview');
        }  
        $studentinfo = DB::table('student_personal_infos')
        ->join('interviews', 'student_personal_infos.student_id', '=', 'interviews.student_id')
        ->where('student_personal_infos.student_id','=',$student_id)
        ->first();
         return view('assesment.interview_follow_up')->with(compact('studentinfo'));  
    }

    public function financialaid_form(Request $request){
        
		if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            $financila = new FinancialAid;
            $financila->full_name = $data['full_name'];
            $financila->bgn_member_id = $data['bgn_id'];
            $financila->student_id = $data['student_id'];
            $financila->email = $data['email'];
            $financila->contact_number = $data['contact'];
            $financila->program_name = $data['program_name'];
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
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','1')
                       ->last();
         return view('assesment.financialaid_form')->with(compact('studentinfo','batchinfo')); 
    }


    public function financialaid(){	
      
       // $finamce = FinancialAid::get();
        
        $finamce = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('financial_aids', 'student_personal_infos.student_id', '=', 'financial_aids.student_id')
        ->where('financial_aids.update_request','=','pending')
        ->get();
        return view('assesment.financialaid')->with(compact('finamce'));   
    }

    public function waiver(Request $request,$student_id= null){
		 if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            $waiver = new Waiver;
            $waiver->student_id = $data['std_id'];
            $waiver->full_name = $data['full_name'];
            $waiver->program_name = $data['program_name'];
            $waiver->program_batch_id = $data['program_code'];
            $waiver->educational_medium = $data['medium'];
            $waiver->request_Faq = $data['request_Faq'];
            $waiver->waiver_percentage = $data['waiver_amount'];
            $waiver->waiver_amount = $data['waiver_percentage'];
            $waiver->waiver_reason = $data['reason'];
            $waiver->save();

            FinancialAid::where(['student_id'=>$student_id])->update(['update_request'=>'Done']);
            return redirect('/assesment/financialaid');
         }  
        $applicaent = FinancialAid::where(['student_id'=>$student_id])->first();
         return view('assesment.update_financial_status')->with(compact('applicaent'));  
    }


}