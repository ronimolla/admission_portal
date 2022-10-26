<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Session;

class StudentProgramController extends Controller
{
    //
    public function bblt() 
    { 
        $studentDetails = StudentContactInfo::where(['email_address'=>Session::get('userSession')]);
         echo print_r($studentDetails); die;


        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','1')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        //echo "<pre>"; print_r($application_last_date); die;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('student.program_application_form.bblt')->with(compact('batchinfo','studentDetails'));
        }else{
            return view('student.program_application_form.blank');
        }
    }
    public function bbltstore(Request $request)
    { 
        if($request->isMethod('post')){
            $data = $request->input();
            
            echo "<pre>"; print_r($data); die;
        }
    }
 }
