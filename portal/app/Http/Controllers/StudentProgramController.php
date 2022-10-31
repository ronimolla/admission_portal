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
use App\Models\Program;
use App\Models\Program_batch;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use App\Models\Event_batch;
use App\Models\StudentProgram;
use App\Models\Assesment;
use Session;

class StudentProgramController extends Controller
{
    //
    public function bblt() 
    { 
        $studentDetails = StudentContactInfo::where(['email_address'=>Session::get('userSession')])->first();
        $studentid = $studentDetails->student_id;
        // echo print_r($studentid); die;
        $student = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('student_educational_infos', 'student_personal_infos.student_id', '=', 'student_educational_infos.student_id')
        ->where('student_personal_infos.student_id','=', $studentid)
        ->first();
        //echo "<pre>";print_r($student); die;

        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','1')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        //echo "<pre>"; print_r($application_last_date); die;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('student.program_application_form.bblt')->with(compact('batchinfo','student'));
        }else{
            return view('student.program_application_form.blank');
        }
    }
    public function bbltstore(Request $request)
    { 
        $studentDetails = StudentContactInfo::where(['email_address'=>Session::get('userSession')])->first();
        $studentid = $studentDetails->student_id;


        if($request->isMethod('post')){
            $data = $request->input();
             
            $program_batch_id=$data['program_batch_id'];
            $programname=$data['program_name'];
            $student_id = $data['nid'];
            //echo "<pre>"; print_r($student_id); die;
            $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
            $student_batch= new StudentProgram;
            $student_batch->student_id = $student_id;
            $student_batch->program_batch_id = $batchinfo->batch_id ;
            $student_batch->program_batch_name = $batchinfo->batch_name ;
            $student_batch->save();
             StudentAddressInfo::where(['student_id'=>$student_id])->update(['present_apartment_no'=>$data['per_apartment'],'present_house_no'=>$data['per_house'],
             'present_road_no_OR_village'=>$data['per_road'],'present_thana_OR_upazala'=>$data['per_thana'],
             'present_district'=>$data['per_district'],'present_division'=>$data['per_division'],'present_post_code'=>$data['per_pc']]);

             StudentContactInfo::where(['student_id'=>$student_id])->update(['personal_phone_no'=>$data['mobile-number'],'emergency_contact_no'=>$data['emergency-contact']]);

            $edlevel = $data['edu_level'];
            if($edlevel =="HSC" || $edlevel =="Alim" || $edlevel =="A'Level"){
                StudentEducationalInfo::where(['student_id'=>$student_id])->update(['educational_lavel'=>$edlevel,'college'=>$data['institution'],
                'college_current_year'=>$data['study_year'],'gpa'=>$data['cgpa'],]);  
            }else{  
                StudentEducationalInfo::where(['student_id'=>$student_id])->update(['educational_lavel'=>$edlevel,'university'=>$data['institution'],
                'uni_current_year'=>$data['study_year'],'cgpa'=>$data['cgpa'],]);
            }


            if(empty($data['marketing_question'])){
                $knowing_media =' ';
            }else{
                 $knowing_media = $data['marketing_question'];
            }
            $marcominfo = new StudentMarcomInfo;
            $marcominfo->student_id = $student_id;
            $marcominfo->program_name =$programname; 
            $marcominfo->program_batch_id = $program_batch_id;
            $marcominfo->knowing_media = $knowing_media;
            $marcominfo->save();

            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->student_id = $student_id;
            $questioninfo->program_name =$programname; 
            $questioninfo->program_batch_id = $program_batch_id;
            $questioninfo->justify_answer = $data['justify_ans'];
            $questioninfo->save();
        
            $assesment = new Assesment;
            $assesment->student_id = $student_id;
            $assesment->program_name =$programname; 
            $assesment->program_batch_id = $program_batch_id;
            $assesment->save();
           
           
            return redirect('/program/bblt');
        }
    }

    public function bbltj()
    {  
        $studentDetails = StudentContactInfo::where(['email_address'=>Session::get('userSession')])->first();
        $studentid = $studentDetails->student_id;
        // echo print_r($studentid); die;
        $student = DB::table('student_personal_infos')
        ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
        ->join('student_educational_infos', 'student_personal_infos.student_id', '=', 'student_educational_infos.student_id')
        ->where('student_personal_infos.student_id','=', $studentid)
        ->first();

        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','2')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('student.program_application_form.bbltj')->with(compact('batchinfo','student'));
        }else{
            return view('program.blank');
        }
    }







 }
