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
use App\Models\WritingTest;
use App\Models\FollowUp;
use App\Models\Interview;

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
		if($request->isMethod('post')){    
            $data = $request->input();
            AssesementPreselection::where(['student_id'=>$student_id])->update(['assessor'=>$data['assessor_name'],'authenticity'=>$data['authemticity'],
                'articulation'=>$data['articulation'],'logical_reasoning'=>$data['logical_reasoning'],'subtotal'=>$data['total_marke'],
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
        if($request->isMethod('post')){    
            $data = $request->input();
            WritingTest::where(['student_id'=>$student_id])->update(['writing_test_assessor'=>$data['assessor_name'],'writing_test_attended'=>$data['attended'],
                'total_score'=>$data['test_score'],'writing_and_appication_score'=>$data['writing_and_appication_score'],'select_for_interview'=>$data['select_for_interview'],
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
        if($request->isMethod('post')){    
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            Interview::where(['student_id'=>$student_id])->update(['interviewer'=>$data['interviewer'],'attend_interview'=>$data['attend'],'attend_group_discussion'=>$data['g_attend'],
                'competence'=>$data['competence'],'courage'=>$data['courage'],'compassion'=>$data['compassion'],'commitment'=>$data['commitment'],'total_interview_marks'=>$data['t_i_mark'],
                'all_totall_marks'=>$data['t_mark'],'select_for_registration'=>$data['select_for_registration'],
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


    public function financialaid(Request $request){
		if($request->isMethod('post')){
            $data = $request->input();
           echo "<pre>"; print_r($data); die;
            FollowUp::where(['student_id'=>$student_id])->update([
                'interview_follow_up_assessor_name'=>$data['assessor_name'],'interview_followup_contact_media'=>$data['conatct_media'],'want_to_registration'=>$data['want_to_registration'],
                'request_faq'=>$data['request_faq'],'sent_faq'=>$data['sent_fid'],'reason_for_not_registration'=>$data['reason'],'final_remark'=>$data['renark']]);
                Interview::where(['student_id'=>$student_id])->update(['interview_follow_up_stage'=>'Done']);
            return redirect('/assesment/interview');
        }  
        
         return view('assesment.financialaid');  
    }

}