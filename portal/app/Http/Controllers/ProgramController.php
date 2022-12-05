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



class ProgramController extends Controller
{
    public function thankyou() 
    { 
        
            return view('program.thank');
        }
   

    /*  
        application process of BBLT program
        show the form for the student
        save the input data in different table 
    */
    public function bblt() 
    { 
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        
        

        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','1')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        //echo "<pre>"; print_r($application_last_date); die;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('program.bblt')->with(compact('batchinfo','division','district'));
        }else{
            return view('program.blank');
        }
    }


    public function bbltstore(Request $request)
    {     
        $request->validate([
            'email-address'=>'required | unique:student_contact_infos,email_address',
            'same_address'=>'required ',
            'nid'=>'required | unique:student_personal_infos,student_id'
        ]);

        if($request->isMethod('post')){
            $data = $request->input();
            
            //echo "<pre>"; print_r($data); die;
            // $usersCount = StudentPersonalInfo::where('student_id ',$data['email'])->count();
            // // echo $usersCount ; die;
            // if($usersCount>0){
            // return redirect()->back()->with('flash_message_error','Email already exists!');
            // }
            $program_batch_id=$data['program_batch_id'];
            $programname=$data['program_name'];
            $student_id = $data['nid'];
            $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
            $student_batch= new StudentProgram;
            $student_batch->student_id = $student_id;
            $student_batch->program_batch_id = $batchinfo->batch_id ;
            $student_batch->program_batch_name = $batchinfo->batch_name ;

            $info = new StudentPersonalInfo;
            $info->student_id = $student_id;
            $info->full_name = $data['full-name'];
        
            if(empty($data['gender'])){ 
                $gender =' ';
            }else{
                $gender = $data['gender'];
            }
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name']; 
            if(empty($data['ethnicity'])){
                $ethnicity =' ';
            }else{
                $ethnicity = $data['ethnicity'];
            }           
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            if(empty($data['disability'])){
                $disability =' ';  
            }else{
                $disability = $data['disability'];
            }
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            $info->nid = $data['nid'];

            //$info->save();

            $coninfo = new StudentContactInfo;
            $coninfo->student_id = $student_id;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $edinfo = new StudentEducationalInfo;
            $edinfo->student_id = $student_id;
            $edlevel = $data['edu_level'];
            if(empty($data['medium'])){
                $medium =' ';  
            }else{
                $medium = $data['medium'];
            }
            $edinfo->educational_medium = $medium;
            $edinfo->educational_lavel = $edlevel; 
            if($edlevel =="HSC" || $edlevel =="Alim" || $edlevel =="A'Level"){
                $edinfo->college = $data['institution']; 
                $edinfo->college_current_year = $data['study_year'];    
                $edinfo->gpa = $data['cgpa'];
            }else{  
                $edinfo->university = $data['institution']; 
                $edinfo->uni_current_year = $data['study_year'];    
                $edinfo->cgpa = $data['cgpa'];
            }
            $edinfo->extracurricular = $data['extracurricular'];
            //$edinfo->save();


            $addinfo = new StudentAddressInfo;
            $addinfo->student_id = $student_id;
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_similar_to_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent_thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent_thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();


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
           

            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->student_id = $student_id;
            $questioninfo->program_name =$programname; 
            $questioninfo->program_batch_id = $program_batch_id;
            $questioninfo->justify_answer = $data['justify_ans'];
           
            $assesment = new Assesment;
            $assesment->student_id = $student_id;
            $assesment->program_name =$programname; 
            $assesment->program_batch_id = $program_batch_id;

            // $preselection = new AssesementPreselection;
            // $preselection->student_id = $student_id;
            // $preselection->program_name =$programname; 
            // $preselection->program_batch_id = $program_batch_id;


            // $followup = new FollowUp;
            // $followup->student_id = $student_id;
            // $followup->program_name =$programname; 
            // $followup->program_batch_id = $program_batch_id;

            // $writing = new WritingTest;
            // $writing->student_id = $student_id;
            // $writing->program_name =$programname; 
            // $writing->program_batch_id = $program_batch_id;

            // $interview = new Interview;
            // $interview->student_id = $student_id;
            // $interview->program_name =$programname; 
            // $interview->program_batch_id = $program_batch_id;

            
            $questioninfo->save();
            $info->save();
            $coninfo->save();
            $edinfo->save();
            $addinfo->save();
            $marcominfo->save();
            
            //$preselection->save();
            //$followup->save();
            // $writing->save();
            // $interview->save();
            $assesment->save();
            $student_batch->save();

            return view('program.thank');
            
        }
      
    }
    /*  application process of BBLTJ program
        show the form for the student
        save the input data in different table  
    */
    public function bbltj()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','2')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('program.bbltj')->with(compact('batchinfo','division','district'));
        }else{
            return view('program.blank');
        }
    }

    public function bbltjstore(Request $request)
    {
        $request->validate([
            'email-address'=>'required | unique:student_contact_infos,email_address',
            'same_address'=>'required ',
            'nid'=>'required ',
            'nid'=>'required | unique:student_personal_infos,student_id'

        ]);

        if($request->isMethod('post')){
            $data = $request->input();
           // echo "<pre>"; print_r($data); die;

            $program_batch_id=$data['program_batch_id'];
            $programname=$data['program_name'];
            $student_id = $data['nid'];

            $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
            $student_batch= new StudentProgram;
            $student_batch->student_id = $student_id;
            $student_batch->program_batch_id = $batchinfo->batch_id ;
            $student_batch->program_batch_name = $batchinfo->batch_name ;
            
       
            $info = new StudentPersonalInfo;
            if(empty($data['gender'])){
                $gender =' ';
            }else{
                $gender = $data['gender'];
            }
            if(empty($data['ethnicity'])){
                $ethnicity =' ';
            }else{
                $ethnicity = $data['ethnicity'];
            }
            if(empty($data['disability'])){
                $disability =' ';
                
            }else{
                $disability = $data['disability'];
            }
            $info->student_id = $student_id;
            $info->full_name = $data['full-name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            $info->nid = $data['nid'];
            //$info->save();

            $coninfo = new StudentContactInfo;
            $coninfo->student_id = $student_id;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $edinfo = new StudentEducationalInfo;
            if(empty($data['medium'])){
                $medium =' ';  
            }else{
                $medium = $data['medium'];
            }
            $edinfo->student_id = $student_id;
            $edinfo->educational_medium = $medium;
            $edinfo->school = $data['institution']; 
            $edinfo->class = $data['school_class']; 
            $edinfo->extracurricular = $data['extracurricular'];
            //$edinfo->save();


            $addinfo = new StudentAddressInfo;
            $addinfo->student_id = $student_id;
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_similar_to_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent_thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent_thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();

            $marcominfo = new StudentMarcomInfo;
            $marcominfo->student_id = $student_id;
            if(empty($data['marketing_question'])){
                    $knowing_media =' ';
                }else{
                    $knowing_media = $data['marketing_question'];
                }
            $marcominfo->knowing_media = $knowing_media;
            $marcominfo->program_name =$programname; 
            $marcominfo->program_batch_id = $program_batch_id;
            //$marconinfo->save();

            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->student_id = $student_id;
            $questioninfo->program_name =$programname; 
            $questioninfo->program_batch_id = $program_batch_id;
            $questioninfo->justify_answer = $data['justify_ans'];
            //$questioninfo->save();

            // $preselection = new AssesementPreselection;
            // $preselection->student_id = $student_id;
            // $preselection->program_name =$programname; 
            // $preselection->program_batch_id = $program_batch_id;

            // $followup = new FollowUp;
            // $followup->student_id = $student_id;
            // $followup->program_name =$programname; 
            // $followup->program_batch_id = $program_batch_id;

            // $writing = new WritingTest;
            // $writing->student_id = $student_id;
            // $writing->program_name =$programname; 
            // $writing->program_batch_id = $program_batch_id;

            // $interview = new Interview;
            // $interview->student_id = $student_id;
            // $interview->program_name =$programname; 
            // $interview->program_batch_id = $program_batch_id;

            $assesment = new Assesment;
            $assesment->student_id = $student_id;
            $assesment->program_name =$programname; 
            $assesment->program_batch_id = $program_batch_id;

            $info->save();
            $coninfo->save();
            $edinfo->save();
            $addinfo->save();
            $marcominfo->save();
            $questioninfo->save();
            // $preselection->save();
            // $followup->save();
            // $writing->save();
            // $interview->save();
            $assesment->save();
            $student_batch->save();

            return redirect('/program/thank'); 
        }
    }
    /*  application process of APL program
        show the form for the student
        save the input data in different table 
    */
    public function apl()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','4')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('program.apl')->with(compact('batchinfo','district','division'));
        }else{
            return view('program.blank');
        }
    }

    public function aplstore(Request $request)
    { 
        $request->validate([
            'email-address'=>'required | unique:student_contact_infos,email_address',
            'same_address'=>'required ',
            'nid'=>'required ','nid'=>'required | unique:student_personal_infos,student_id'
        ]);

        if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;

            $program_batch_id=$data['program_batch_id'];
            $programname=$data['program_name'];
            $student_id = $data['nid'];

            $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
            $student_batch= new StudentProgram;
            $student_batch->student_id = $student_id;
            $student_batch->program_batch_id = $batchinfo->batch_id ;
            $student_batch->program_batch_name = $batchinfo->batch_name ;

            $info = new StudentPersonalInfo;
            if(empty($data['gender'])){
                $gender =' ';
            }else{
                $gender = $data['gender'];
            }
            if(empty($data['ethnicity'])){
                $ethnicity =' ';
            }else{
                $ethnicity = $data['ethnicity'];
            }
            if(empty($data['disability'])){
                $disability =' ';
                
            }else{
                $disability = $data['disability'];
            }
            $info->full_name = $data['full-name'];
            $info->student_id = $student_id;
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            $info->nid = $data['nid'];
            //$info->save();
          
            $coninfo = new StudentContactInfo;
            $coninfo->student_id = $student_id;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $addinfo = new StudentAddressInfo;
            $addinfo->student_id = $student_id;
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_similar_to_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent_thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent_thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();

            $edinfo = new StudentEducationalInfo;
            if(empty($data['medium'])){
                $medium =' ';  
            }else{
                $medium = $data['medium'];
            }
            $edinfo->student_id = $student_id;
            $edinfo->educational_medium = $medium;
            if(empty($data['current_year_study'])){
                $current_year_study =' ';  
            }else{
                $current_year_study = $data['current_year_study'];
            }
            $edinfo->uni_current_year = $current_year_study; 
            $edinfo->university = $data['institution']; 
            $edinfo->uni_passing_year = $data['graduation_year'];
            $edinfo->cgpa = $data['cgpa'];
            //$edinfo->save();
           
           $marcominfo = new StudentMarcomInfo;
           $marcominfo->student_id = $student_id;
           if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
           $marcominfo->knowing_media = $knowing_media;
           $marcominfo->program_name =$programname; 
            $marcominfo->program_batch_id = $program_batch_id;
           //$marconinfo->save();

           $questioninfo = new StudentQuestionaryInfo;
           $questioninfo->student_id = $student_id;
           $questioninfo->program_name =$programname; 
           $questioninfo->program_batch_id = $program_batch_id;
           $questioninfo->narrative_writing_1 = $data['narrative_writing_1'];
           $questioninfo->narrative_writing_2 = $data['narrative_writing_2'];
           //$questioninfo->save();

        //    $preselection = new AssesementPreselection;
        //    $preselection->student_id = $student_id;
        //     $preselection->program_name =$programname; 
        //     $preselection->program_batch_id = $program_batch_id;

        //     $followup = new FollowUp;
        //     $followup->student_id = $student_id;
        //     $followup->program_name =$programname; 
        //     $followup->program_batch_id = $program_batch_id;

        //     $writing = new WritingTest;
        //     $writing->student_id = $student_id;
        //     $writing->program_name =$programname; 
        //     $writing->program_batch_id = $program_batch_id;

        //     $interview = new Interview;
        //     $interview->student_id = $student_id;
        //     $interview->program_name =$programname; 
        //     $interview->program_batch_id = $program_batch_id;

        $assesment = new Assesment;
        $assesment->student_id = $student_id;
        $assesment->program_name =$programname; 
        $assesment->program_batch_id = $program_batch_id;

            $info->save();
            $coninfo->save();
            $edinfo->save();
            $addinfo->save();
            $marcominfo->save();
            $questioninfo->save();
            // $preselection->save();
            // $followup->save();
            // $writing->save();
            // $interview->save();
            $assesment->save();
            $student_batch->save();

            return redirect('/program/thank'); 
        }
    }
    /*  application process of YLS program
        show the form for the student
        save the input data in different table  
    */
    public function yls()
    {  
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','5')
                       ->last();
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('program.yls')->with(compact('batchinfo','district','division'));
        }else{
            return view('program.blank');
        }   
    }

    public function ylsstore(Request $request)
    { 
        $request->validate([
            'email-address'=>'required | unique:student_contact_infos,email_address',
            'same_address'=>'required ',
            'nid'=>'required ','nid'=>'required | unique:student_personal_infos,student_id'

        ]);

        if($request->isMethod('post')){
            $data = $request->input();
            echo "<pre>"; print_r($data); die;
            
            $program_batch_id=$data['program_batch_id'];
            $programname=$data['program_name'];

            $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
            $student_batch= new StudentProgram;
            $student_batch->program_batch_id = $batchinfo->batch_id ;
            $student_batch->program_batch_name = $batchinfo->batch_name ;

            $info = new StudentPersonalInfo;
            if(empty($data['gender'])){
                $gender =' ';
            }else{
                $gender = $data['gender'];
            }
            if(empty($data['ethnicity'])){
                $ethnicity =' ';
            }else{
                $ethnicity = $data['ethnicity'];
            }
            if(empty($data['disability'])){
                $disability =' ';
                
            }else{
                $disability = $data['disability'];
            }
            $info->full_name = $data['full-name'];
          
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            $info->nid = $data['nid'];
            //$info->save();
          
            $coninfo = new StudentContactInfo;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $addinfo = new StudentAddressInfo;
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_similar_to_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent_thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent_thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();

            $edinfo = new StudentEducationalInfo;
            if(empty($data['medium'])){
                $medium =' ';  
            }else{
                $medium = $data['medium'];
            }
            if(empty($data['undergrad_level'])){
                $undergrad_level =' ';  
            }else{
                $undergrad_level = $data['undergrad_level'];
            }
            $edinfo->educational_medium = $medium;
            $edinfo->secondary_educational_lavel = $data['secondary_level'];
            $edinfo->school = $data['school_name']; 
            $edinfo->ssc_passing_year = $data['graduation_year_school']; 
            $edinfo->ssc_result = $data['school_result']; 
            $edinfo->higher_secondary_level = $data['higher_secondary_level'];
            $edinfo->college = $data['collage_name'];
            $edinfo->college_passing_year = $data['graduation_year_college']; 
            $edinfo->gpa = $data['college_result'];
            $edinfo->admission_of_udergraduation = $data['get_admission'];
            $edinfo->undergraduate_level = $undergrad_level;
            //$edinfo->save();

            $marconinfo = new StudentMarcomInfo;
            if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
            $marconinfo->knowing_media = $knowing_media;
            $marcominfo->program_name =$programname; 
            $marcominfo->program_batch_id = $program_batch_id;
            //$marconinfo->save();

            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->program_name =$programname; 
            $questioninfo->program_batch_id = $program_batch_id;
            $questioninfo->narrative_writing_1 = $data['narrative_writing_1'];
            $questioninfo->narrative_writing_2 = $data['narrative_writing_2'];
            //$questioninfo->save();

            // $preselection = new AssesementPreselection;
            // $preselection->program_name =$programname; 
            // $preselection->program_batch_id = $program_batch_id;

            // $followup = new FollowUp;
            // $followup->program_name =$programname; 
            // $followup->program_batch_id = $program_batch_id;

            // $writing = new WritingTest;
            // $writing->program_name =$programname; 
            // $writing->program_batch_id = $program_batch_id;

            // $interview = new Interview;
            // $interview->program_name =$programname; 
            // $interview->program_batch_id = $program_batch_id;
            $assesment = new Assesment;
            $assesment->student_id = $student_id;
            $assesment->program_name =$programname; 
            $assesment->program_batch_id = $program_batch_id;

            $info->save();
            $coninfo->save();
            $edinfo->save();
            $addinfo->save();
            $marconinfo->save();
            $questioninfo->save();
            // $preselection->save();
            // $followup->save();
            // $writing->save();
            // $interview->save();
            $assesment->save();
            $student_batch->save();

            return redirect('/program/thank'); 
        }
    }


    public function careerx()
    {  
       
        $division = DB::table('divisions')->get();
        $district = DB::table('districts')->get();
        $date = now()->format('Y-m-d');
        $batchinfo = Program_batch::all()
                       ->where('program_id', '= ','3')
                       ->last();
       
        $application_last_date = $batchinfo->end_date;
        $application_start_date = $batchinfo->start_date;
        if($date <= $application_last_date && $date >= $application_start_date){
            return view('program.careerx')->with(compact('batchinfo','division','district'));
        }else{
            return view('program.blank');
        }
    }

    public function careerxstore(Request $request)
    { 
        $request->validate([
            'email-address'=>'required | unique:student_contact_infos,email_address',
            'same_address'=>'required ',
            'nid'=>'required ','nid'=>'required | unique:student_personal_infos,student_id'

        ]);
        
        if($request->isMethod('post')){
            $data = $request->input();
          // echo "<pre>"; print_r($data); die;
            
          $program_batch_id=$data['program_batch_id'];
          $programname=$data['program_name'];
          $student_id = $data['nid'];

          $batchinfo = Program_batch::where(['batch_id'=>$data['program_batch_id']])->first();
          $student_batch= new StudentProgram;
          $student_batch->student_id = $student_id;
          $student_batch->program_batch_id = $batchinfo->batch_id ;
          $student_batch->program_batch_name = $batchinfo->batch_name ;

            $info = new StudentPersonalInfo;
            $info->student_id =$student_id; 
            if(empty($data['gender'])){
                $gender =' ';
            }else{
                $gender = $data['gender'];
            }
            if(empty($data['ethnicity'])){
                $ethnicity =' ';
            }else{
                $ethnicity = $data['ethnicity'];
            }
            if(empty($data['disability'])){
                $disability =' ';    
            }else{
                $disability = $data['disability'];
            }
            $info->full_name = $data['full-name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            $info->nid = $data['nid'];
            //$info->save();

            $coninfo = new StudentContactInfo;
            $coninfo->student_id =$student_id; 
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $addinfo = new StudentAddressInfo;
            $addinfo->student_id =$student_id; 
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_similar_to_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent_thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent_thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();

            $edinfo = new StudentEducationalInfo;
            $edinfo->student_id =$student_id; 
            if(empty($data['medium'])){
                $medium =' ';  
            }else{
                $medium = $data['medium'];
            }
            $edinfo->educational_medium = $medium;
            if(empty($data['study_year'])){
                $study_year =' ';  
            }else{
                $study_year = $data['study_year'];
            }
            $edinfo->uni_current_year = $study_year;
            $edinfo->university = $data['institution'];
            $edinfo->degree = $data['degree'];
            $edinfo->cgpa = $data['cgpa'];
            $edinfo->uni_passing_year = $data['graduation_year'];
            //$edinfo->save();

            $marcominfo = new StudentMarcomInfo;
            $marcominfo->student_id =$student_id; 
            if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
            $marcominfo->knowing_media = $knowing_media;
            if(empty($data['CareerX_program'])){
                $careerx =' ';
            }else{
                $careerx = $data['CareerX_program'];
            }
            
            $marcominfo->careerx_program = $careerx;
            $marcominfo->careerx_bach_no =$data['CareerX'];
            if(empty($data['BYLC_bootcamp'])){
                $bootcamp =' ';
            }else{
                $bootcamp = $data['BYLC_bootcamp'];
            }
            $marcominfo->bootcamp_program = $bootcamp;
            $marcominfo->bootcamp_bach_no =$data['bootcamp'];
            $marcominfo->program_name = $programname; 
            $marcominfo->program_batch_id = $program_batch_id;
           
            //$marconinfo->save();

            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->student_id =$student_id; 
            if(empty($data['mcq1'])){
                $ans_mcq1 =' ';  
            }else{
                $ans_mcq1 = $data['mcq1'];
            }
            $questioninfo->mcq_1 = $ans_mcq1;
            if(empty($data['mcq2'])){
                $ans_mcq2 =' ';  
            }else{
                $ans_mcq2 = $data['mcq2'];
            }
            $questioninfo->mcq_2 = $ans_mcq2;
            if(empty($data['mcq3'])){
                $ans_mcq3 =' ';  
            }else{
                $ans_mcq3 = $data['mcq3'];
            }
            $questioninfo->mcq_3 = $ans_mcq3;
            $questioninfo->short_bio = $data['bio'];
            $questioninfo->program_name =$programname; 
            $questioninfo->program_batch_id = $program_batch_id;
            //$questioninfo->save();
            
            // $preselection = new AssesementPreselection;
            // $preselection->program_name =$programname; 
            // $preselection->program_batch_id = $program_batch_id;

            // $followup = new FollowUp;
            // $followup->program_name =$programname; 
            // $followup->program_batch_id = $program_batch_id;

            // $writing = new WritingTest;
            // $writing->program_name =$programname; 
            // $writing->program_batch_id = $program_batch_id;

            // $interview = new Interview;
            // $interview->program_name =$programname; 
            // $interview->program_batch_id = $program_batch_id;
            $assesment = new Assesment;
            $assesment->student_id = $student_id;
            $assesment->program_name =$programname; 
            $assesment->program_batch_id = $program_batch_id;


            $info->save();
            $coninfo->save();
            $edinfo->save();
            $addinfo->save();
            $marcominfo->save();
            $questioninfo->save();
            $assesment->save();
            $student_batch->save();

            return redirect('/program/thank'); 
        }
    }


    //---------------************------------ JUBAIR --------------************----------------

    // ---------------------Students-------------------------

    // View program page with table
    public function programs_info()
    {  
        $student_info = DB::table('student_personal_infos')
            ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
            ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
            ->join('student_programs', 'student_programs.student_id', '=', 'student_personal_infos.student_id')
            ->join('program_batches', 'program_batches.batch_id', '=', 'student_programs.program_batch_id')
            ->orderBy('program_batches.batch_name', 'ASC')
            ->orderBy('student_personal_infos.full_name', 'ASC')
            ->get();

        // echo "<pre>"; print_r($student_info); die;

        $program_name= DB::table('programs')
            ->get();

        $program_batch_name= DB::table('program_batches')
            ->get();
        
        return view('students.programs_info')->with(compact('student_info','program_name','program_batch_name'));
    }


        // Display table data based program-batch-name selected from dropdown
        public function getStudentType(Request $request)
        {
            $tid = $request->post('type');

            $state = DB::table('student_personal_infos')
                ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
                ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
                ->join('student_programs', 'student_programs.student_id', '=', 'student_personal_infos.student_id')
                ->join('program_batches', 'program_batches.batch_id', '=', 'student_programs.program_batch_id')
                ->orderBy('program_batches.batch_name', 'ASC')
                ->orderBy('student_personal_infos.full_name', 'ASC')
                ->where('student_programs.application_status',$tid)
                ->get();

                
            $html='  
                <thead>
                    <tr>
                        <th>Sl.No.</th>
                        <th>Student ID</th>
                        <th>Full name</th>
                        <th>Email ID</th>
                        <th>Phone No</th>
                        <th>Address</th>
                        <th>Batch</th>
                        <th>Profile</th>													
                    </tr>
                </thead>      
            ';
    
            $count=1;
            foreach($state as $list){
                $html.='
                <tbody>                        
                    <tr>
                        <td>'.$count++.'</td>
                        <td>'.$list->student_id.'</td>
                        <td>'.$list->full_name.'</td>
                        <td>'.$list->email_address.'</td>
                        <td>'.$list->personal_phone_no.'</td>
                        <td>'.$list->present_district.'</td>
                        <td>'.$list->batch_name.'</td>
                        <td>
                            <a href="/view-profile/'.$list->student_id.'" class="btn btn-primary">View</a>
                        </td>
                    </tr>	
                </tbody>
                ';
            }
            echo $html;
        }


    //Get Table data program-wise when a program is selected
    public function getBatch(Request $request)
    {
        $cid=$request->post('cid');
        $state = DB::table('student_personal_infos')
            ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
            ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
            ->join('student_programs', 'student_programs.student_id', '=', 'student_personal_infos.student_id')
            ->join('program_batches', 'program_batches.batch_id', '=', 'student_programs.program_batch_id')
            ->where('program_batches.program_id',$cid)
            ->get();
        
        $table='  
            <thead>
                <tr>
                    <th>Sl.No.</th>
                    <th>Student ID</th>
                    <th>Full name</th>
                    <th>Email ID</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Batch</th>
                    <th>Profile</th>													
                </tr>
            </thead>      
        ';
    
        $count=1;
        foreach($state as $list){
            $table.='
            <tbody>                        
                <tr>
                    <td>'.$count++.'</td>
                    <td>'.$list->student_id.'</td>
                    <td>'.$list->full_name.'</td>
                    <td>'.$list->email_address.'</td>
                    <td>'.$list->personal_phone_no.'</td>
                    <td>'.$list->present_district.'</td>
                    <td>'.$list->batch_name.'</td>
                    <td>
                        <a href="/view-profile/'.$list->student_id.'" class="btn btn-primary">View</a>
                    </td>
                </tr>	
            </tbody>
            ';
        }
        echo $table;
    }

    
    //Get Batch Name in dropdown-menu when a program is selected
    public function getBatch2(Request $request)
    {
        $cid=$request->post('cid');
        
    	$state=DB::table('program_batches')->where('program_id',$cid)->get();
    	$html='<option value="">Select Batch</option>';
    	foreach($state as $list)
        {
    		$html.='<option value="'.$list->batch_id.'">'.$list->batch_name.'</option>';
    	}
    	echo $html;
    }
    

    // Display table data based program-batch-name selected from dropdown
    public function getBatchData(Request $request)
    {
        $bid=$request->post('bid');

        $state = DB::table('student_personal_infos')
            ->join('student_contact_infos', 'student_personal_infos.student_id', '=', 'student_contact_infos.student_id')
            ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')
            ->join('student_programs', 'student_programs.student_id', '=', 'student_personal_infos.student_id')
            ->join('program_batches', 'program_batches.batch_id', '=', 'student_programs.program_batch_id')
            ->orderBy('program_batches.batch_name', 'ASC')
            ->orderBy('student_personal_infos.full_name', 'ASC')
            ->where('student_programs.program_batch_id',$bid)
            ->get();
        
        $html='  
            <thead>
                <tr>
                    <th>Sl.No.</th>
                    <th>Student ID</th>
                    <th>Full name</th>
                    <th>Email ID</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Batch</th>
                    <th>Profile</th>													
                </tr>
            </thead>      
        ';

        $count=1;
        foreach($state as $list){
            $html.='
            <tbody>                        
                <tr>
                    <td>'.$count++.'</td>
                    <td>'.$list->student_id.'</td>
                    <td>'.$list->full_name.'</td>
                    <td>'.$list->email_address.'</td>
                    <td>'.$list->personal_phone_no.'</td>
                    <td>'.$list->present_district.'</td>
                    <td>'.$list->batch_name.'</td>
                    <td>
                         <a href="/view-profile/'.$list->student_id.'" class="btn btn-primary">View</a>
                    </td>
                </tr>	
            </tbody>
            ';
        }
        echo $html;
    }

    // Display table data based program-batch-name selected from dropdown
    public function downloadCSVReport(Request $request)
    {   
        $bid2=$request->post('bid2');
        // echo "<pre>"; print_r($bid); die;

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=Student_Batch_Information-' . date("Y-m-d-h-i-s") . '.csv ');
        $output = fopen('php://output', 'w');
    
        fputcsv($output, array('SL.NO.', 'PROGRAM BATCH NAME', 'STUDENT ID', 'FULL NAME ', 'GENGER', 'EMAIL', 'PERSONAL PHONE NO.', 'EMERGENCY CONTACT NO.', 'PRESENT ADDRESS', 'FATHER NAME', 'MOTHER NAME', 'GUARDIAN PHONE NUMBER', 'ETHNICITY', 'DISABILITY', 'EDUCATIONAL MEDIUM','SCHOOL'));
        // fputcsv($output, array('SL.NO.', 'PROGRAM BATCH NAME', 'STUDENT ID', 'FULL NAME ', 'GENGER', 'EMAIL', 'PERSONAL PHONE NO.', 'EMERGENCY CONTACT NO.', 'PRESENT ADDRESS', 'FATHER NAME', 'MOTHER NAME', 'GUARDIAN PHONE NUMBER', 'ETHNICITY', 'DISABILITY', 'EDUCATIONAL MEDIUM',  'SCHOOL NAME', 'PASSING YEAR', 'RESULT', 'COLLEGE', 'DEPARTMENT', 'PASSING YEAR', 'RESULT', 'UNIVERSITY', 'DEGREE', 'PASSING YEAR', 'CGPA'));
        $tweets = StudentPersonalInfo :: join('student_contact_infos', 'student_contact_infos.student_id', '=', 'student_personal_infos.student_id')
                                        ->join('student_address_infos', 'student_personal_infos.student_id', '=', 'student_address_infos.student_id')   
                                        ->join('student_educational_infos', 'student_personal_infos.student_id', '=', 'student_educational_infos.student_id')  
                                        ->join('student_programs', 'student_programs.student_id', '=', 'student_personal_infos.student_id')
                                        ->join('program_batches', 'program_batches.batch_id', '=', 'student_programs.program_batch_id')
                                        //->where('student_programs.program_batch_id','1')
                                        ->get();
                                        //echo "<pre>"; print_r($tweets); die;
        $c=1;                            
        if (count($tweets) > 0) {
            foreach ($tweets as $product) 
            {
                $product_row = 
                [
                    $c++,
                    $product['program_batch_name'],
                    $product['student_id'],
                    $product['full_name'],
                    $product['gender'],
                    // $product['dob'],
                    $product['email_address'],
                    $product['personal_phone_no'],
                    $product['present_district'],
                    $product['permanent_district'],           
                    $product['father_name'],
                    $product['mother_name'], 
                    $product['guardian_phone_no'],
                    $product['ethnicity'],
                    $product['disability'], 
                    $product['educational_medium'],
                    $product['school']

                ];

                fputcsv($output, $product_row);
            }
        }
    }


    //-----------Programs------------------

    // Display All program information (Programs Page)
    public function programsView(){        
        $program_name= DB::table('programs')->get();
        $totalBatch = DB::table('programs')
            ->join('program_batches', 'programs.program_id', '=', 'program_batches.program_id')
            ->get();

        return view('programs.programsView')->with(compact('program_name','totalBatch'));
    }

    // Display table data based category selected from dropdown (Program Page)
    public function getProgramDatabyCategory(Request $request)
    {
        $cat=$request->post('cat');
        
        $state = DB::table('programs')
        ->where('category',$cat)
        ->get();
        
        $totalBatch = DB::table('programs')
            ->join('program_batches', 'programs.program_id', '=', 'program_batches.program_id')
            ->where('category',$cat)
            ->get();
        
        $html=
        '  
            <thead>
                <tr>
                    <th>SL.No.</th>
                    <th>Program Name</th>
                    <th>Category</th>
                    <th>Total Batches</th>
                    <th>Donor</th>													
                </tr>
            </thead>      
        ';

        $count=1;
        $batch=0;
        foreach($state as $list){
            foreach($totalBatch as $tb){
                if($list->program_id == $tb->program_id){
                    $batch++;
                }
            }

            $html.='
            <tbody>                        
                <tr>
                    <td>'.$count++.'</td>
                    <td>'.$list->program_name.'</td>
                    <td>'.$list->category.'</td>
                    <td>'.$batch.'</td>
                    <td>'.$list->donor.'</td>              
                </tr>	
            </tbody>
            ';
            $batch=0;
        }
        echo $html;
    }

        // Display table data based category selected from dropdown (Program Page)
        public function getProgramDatabyProject(Request $request)
        {
            $proj=$request->post('proj');
            
            $state = DB::table('programs')
                ->where('donor',$proj)
                ->get();
            
            $totalBatch = DB::table('programs')
                ->join('program_batches', 'programs.program_id', '=', 'program_batches.program_id')
                ->where('donor',$proj)
                ->get();
            
            $html=
            '  
                <thead>
                    <tr>
                        <th>SL.No.</th>
                        <th>Program Name</th>
                        <th>Category</th>
                        <th>Total Batches</th>
                        <th>Donor</th>													
                    </tr>
                </thead>      
            ';
    
            $count=1;
            $batch=0;
            foreach($state as $list){
                foreach($totalBatch as $tb)
                {
                    if($list->program_id == $tb->program_id){
                        $batch++;
                    }
                }
    
                $html.='
                <tbody>                        
                    <tr>
                        <td>'.$count++.'</td>
                        <td>'.$list->program_name.'</td>
                        <td>'.$list->category.'</td>
                        <td>'.$batch.'</td>
                        <td>'.$list->donor.'</td>              
                    </tr>	
                </tbody>
                ';
                $batch=0;
            }
            echo $html;
        }

    // Create new program (Programs Page)
    public function createProgram(Request $request){

        if($request->isMethod('post'))
        {
            $data = $request->input();
            $program = new Program;
        
            $program ->program_name = $data['program_name'];
            $program ->category = $data['category'];  
            $program ->donor = $data['donor'];  
                   
            $program->save();
            return redirect('/programs/programsView');
        }
        return view('programs.createProgram');
    }

    
    // Display program-batch information in (Program-Batch Page)
    public function programBatch(){        
        //Table Data Fetch
        $program_info = DB::table('programs')
            ->join('program_batches', 'programs.program_id', '=', 'program_batches.program_id')
            ->orderBy('end_date', 'DESC')
            ->get();

        $totalStudents = DB::table('student_programs')
            ->join('program_batches', 'student_programs.program_batch_id', '=', 'program_batches.batch_id')
            ->orderBy('end_date', 'DESC')
            ->get();    

        //Programs Dropdown
        $program_name= DB::table('programs')->get();

        return view('programs.programBatch')->with(compact('program_name','program_info','totalStudents'));
    }

    // Display table data based program-name selected from dropdown (program-batch Page)
    public function getProgramData(Request $request)
    {
        $pnid=$request->post('pnid');
        
        $state = DB::table('programs')
            ->join('program_batches', 'program_batches.program_id', '=', 'programs.program_id')
            ->orderBy('end_date', 'DESC')
            ->where('programs.program_id',$pnid)
            ->get();

        $totalStudents = DB::table('student_programs')
            ->join('program_batches', 'student_programs.program_batch_id', '=', 'program_batches.batch_id')
            ->orderBy('end_date', 'DESC')
            ->get(); 
        
        $html=
        '  
            <thead>
                <tr>
                    <th>Sl.No.</th>
                    <th>State</th>
                    <th>Batch Name</th>
                    <th>Program</th>
                    <th>Total Students</th>
                    <th>Application Start</th>
                    <th>Application End</th>
                    <th>Program Start</th>
                    <th>Program End</th>
                    <th>Registration Fees</th>
                    <th>Action</th>													
                </tr>
            </thead>      
        ';

        $c=1;
        $count=0;
        foreach($state as $list){
            foreach($totalStudents as $ts){
                if($list->batch_id == $ts->program_batch_id){
                    $count++;
                }
            }

            $currentState="";
            $stateColor="";
            $otherColor="";
            $todayDate = now()->format('Y-m-d');
            $weight="";
    
            if($todayDate > $list->start_date && $todayDate < $list->end_date){
                $currentState="Running";
                $stateColor = "red";
                $weight = "bold";
                $otherColor= "black";
            }
            elseif( $todayDate > $list->end_date){
                $currentState="Closed";
            }
            else{
                $currentState="Upcoming";
                $stateColor = "blue";
                $otherColor = "black";
            }
                
            $html.='
            <tbody>                        
                <tr>
                    <td style="font-weight:'.$weight.'">'.$c++.'</td>
                    <td style="color: '.$stateColor.';font-weight:'.$weight.'">'.$currentState.'</td>
                    <td style="color:'.$otherColor.'">'.$list->batch_name.'</td>
                    <td style="color:'.$otherColor.'">'.$list->program_name.'</td>
                    <td style="color:'.$otherColor.'">'.$count.'</td>
                    <td style="color:'.$otherColor.'">'.$list->start_date.'</td>
                    <td style="color:'.$otherColor.'">'.$list->end_date.'</td>
                    <td style="color:'.$otherColor.'">'.$list->program_start_date.'</td>
                    <td style="color:'.$otherColor.'">'.$list->program_end_date.'</td>
                    <td style="color:'.$otherColor.'">'.$list->registration_fees.'</td>
                    <td>

                        <a href="/programs/editBatch/'.$list->batch_id.'" class="btn btn-primary">Update</a>

                    </td>              
                </tr>	
            </tbody>
            ';
            $count=0;
        }
        echo $html;
    }

    // Create new batch
    public function createProgramBatch(Request $request){
        $program_name= DB::table('programs')->get();
        
        if($request->isMethod('post')){
            $data = $request->input();
            $program_batch = new Program_batch;
        
            $program_batch ->program_id = $data['category_program'];
            $program_batch ->batch_name = $data['batch_name'];

            $program_batch ->start_date = $data['application_start_date'];
            $program_batch ->end_date = $data['application_end_date'];
            $program_batch ->program_start_date = $data['program_start_date'];
            $program_batch ->program_end_date = $data['program_end_date'];
            $program_batch ->start_date = $data['application_start_date'];
            $program_batch ->end_date = $data['application_end_date'];

            $program_batch ->program_duration = $data['program_duration'];
            $program_batch ->program_mode = $data['program_mode'];
            $program_batch ->class_time = $data['class_time'];
            $program_batch ->registration_fees = $data['registration_fees'];
            $program_batch ->registration_deadline = $data['registration_deadline'];
            
            $program_batch->save();
            return redirect('/programs/programBatch');
        }
        return view('programs.createBatch')->with(compact('program_name'));
    }

    //edit program batch details
    public function editProgramBatch(Request $request,$program_batch_id= null){
        //echo $program_batch_id ;die;

        $program_batch= Program_batch:: where(['batch_id'=>$program_batch_id])->first();
        
             if($request->isMethod('post')){
             $data = $request->input();
             //echo "<pre>"; print_r($data); die;
             Program_batch::where(['batch_id'=>$program_batch_id])->update([
                'start_date'=>$data['application_start_date'],'end_date'=>$data['application_end_date'],'program_start_date'=>$data['program_start_date'],
                'program_end_date'=>$data['program_end_date'],'program_duration'=>$data['program_duration'],'program_mode'=>$data['program_mode'],'class_time'=>$data['class_time'],
                'registration_deadline'=>$data['registration_deadline'],'registration_fees'=>$data['registration_fees']]);

            return redirect('/programs/programBatch')->with('flash_message_error','Program Batch edited successfully');
        }
         return view('programs.editBatch')->with(compact('program_batch'));
    }



    //-----------Events------------------

    // Display All event information (Event Page)
    public function eventsView(){        
        $event_name= DB::table('events')->get();
        
        $totalBatch = DB::table('events')
        ->join('event_batches', 'events.id', '=', 'event_batches.event_id')
        ->get();

        return view('events.eventsView')->with(compact('event_name','totalBatch'));
    }

    // Display table data based on category selected from dropdown (EVENT Page)
    public function getEventDatabyCategory(Request $request)
    {
        $cat=$request->post('cat');
        
        $state = DB::table('events')
        ->where('category',$cat)
        ->get();

        $totalBatch = DB::table('events')
        ->join('event_batches', 'events.id', '=', 'event_batches.event_id')
        ->get();
        
        $html=
        '  
            <thead>
                <tr>
                    <th>SL.No.</th>
                    <th>Event Name</th>
                    <th>Category</th>
                    <th>Total Batches</th>													
                </tr>
            </thead>      
        ';

        $c=1;
        $count=0;
        foreach($state as $list){
            foreach($totalBatch as $tb){
                if($list->id == $tb->event_id){
                    $count++;
                }
            }
           
            $html.='
            <tbody>                        
                <tr>
                    <td>'.$c++.'</td>
                    <td>'.$list->event_name.'</td>
                    <td>'.$list->category.'</td>
                    <td>'.$count.'</td>
                </tr>	
            </tbody>
            ';
            $count=0;
        }
        echo $html;
    }

    // Create new event (EVENT PAGE)
    public function createEvent(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $event = new Event;
        
            $event -> category = $data['category'];
            $event -> event_name = $data['event_name'];
              
            $event -> save();
            return redirect('/events/eventsView');
        }
        return view('events.createEvent');
    }



    // Display program-batch information in (EVENT-batch Page)
    public function eventBatch(){        
        //Table Data Fetch
        $event_info = DB::table('events')
            ->join('event_batches', 'events.id', '=' , 'event_batches.event_id')
            ->get();
        $totalStudents = DB::table('student_events')
            ->join('event_batches', 'student_events.event_batch_name', '=', 'event_batches.batch_name')
            ->get();
        $totalParticipants = DB::table('participant_events')
            ->join('event_batches', 'participant_events.event_batch_name', '=', 'event_batches.batch_name')
            ->get();

        //Events Dropdown
        $event_name = DB::table('events')->get();

        return view('events.eventBatch')->with(compact('event_name','event_info','totalStudents','totalParticipants'));
    }

    // Display table data based program-name selected from dropdown (EVENT-batch Page)
    public function getEventData(Request $request)
    {
        $eid=$request->post('eid');
        
        $state = DB::table('events')
            ->join('event_batches', 'event_batches.event_id', '=', 'events.id')
            ->where('event_batches.event_id',$eid)
            ->get();

        $totalStudents = DB::table('student_events')
            ->join('event_batches', 'student_events.event_batch_name', '=', 'event_batches.batch_name')
            ->get();
        $totalParticipants = DB::table('participant_events')
            ->join('event_batches', 'participant_events.event_batch_name', '=', 'event_batches.batch_name')
            ->get();
        
        $html=
        '  
            <thead>
                <tr>
                    <th>SL.No.</th>
                    <th>Batch Name</th>
                    <th>Event Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Year</th>
                    <th>Budget</th>
                    <th>Sponser</th>
                    <th>Total Participants</th>													
                </tr>
            </thead>      
        ';

        $c=1;
        $count=0;
        
        foreach($state as $list)
        {
            foreach($totalStudents as $ts){
                if($list->batch_name == $ts->event_batch_name){
                    $count++;
                }
            }
            foreach($totalParticipants as $ps){
                if($list->batch_name == $ps->event_batch_name){
                    $count++;
                }
            }

            $html.='
            <tbody>                        
                <tr>
                    <td>'.$c++.'</td>
                    <td>'.$list->batch_name.'</td>
                    <td>'.$list->event_name.'</td>
                    <td>'.$list->start_date.'</td>
                    <td>'.$list->end_date.'</td>
                    <td>'.$list->year.'</td>
                    <td>'.$list->budget.'</td>
                    <td>'.$list->sponser.'</td>
                    <td>'.$count.'</td>
                </tr>	
            </tbody>
            ';
            $count=0;
        }
        echo $html;
    }

    // Create new Event-batch (EVENT-batch Page)
    public function createEventBatch(Request $request)
    {
        $event_name= DB::table('events')->get();
        
        if($request->isMethod('post')){
            $data = $request->input();
            $event_batch = new Event_batch;
        
            $event_batch ->event_id = $data['event_name'];
            $event_batch ->batch_name = $data['batch_name'];
            $event_batch ->start_date = $data['start_date'];
            $event_batch ->end_date = $data['end_date'];
            $event_batch ->year = $data['year'];
            $event_batch ->budget = $data['budget'];
            $event_batch ->sponser = $data['sponser'];
            
            $event_batch->save();
            return redirect('/events/eventBatch');
        }
        return view('events.createEventBatch')->with(compact('event_name'));
    }


    //------------- Event FORMS ----------------------

    public function alumni_iftar()
    {
        return view('events.forms.alumni_iftar');
    }

    public function careerExpo()
    {
        return view('events.forms.careerExpo');
    }

    //------------- Dashboard ----------------------
    public function dashboard()
    {
        //Counting Total No. of applicants
        $total_applicants= DB::table('student_personal_infos')->count();
        $registered_students = 123;
        $total_programs = DB::table('program_batches')->count();
        $total_events = DB::table('event_batches')->count();

        return view('/dashboard')->with(compact('total_applicants','registered_students','total_programs','total_events'));
    }

    public function fetchMedium() {
        $medium = StudentEducationalInfo::select(DB::raw('COUNT(*) as total_student, educational_medium'))
            ->groupBy('educational_medium')
            ->get();

        foreach($medium->toArray() as $row)
        {
            $output[] = array(
            'educational_medium' => $row['educational_medium'],
            'total_student' => $row['total_student']
            );
        }
        echo json_encode($output);
    }

    public function fetchEthnicity() {
        $ethnicity = StudentPersonalInfo::select(DB::raw('COUNT(*) as total_student, ethnicity'))
            ->groupBy('ethnicity')
            ->get();

        foreach($ethnicity->toArray() as $row)
        {
            $output[] = array(
            'ethnicity' => $row['ethnicity'],
            'total_student' => $row['total_student']
            );
        }
        echo json_encode($output);
    }

    public function fetchGender() {
        $gender = StudentPersonalInfo::select(DB::raw('COUNT(*) as total_student, gender'))
            ->groupBy('gender')
            ->get();

        foreach($gender->toArray() as $row)
        {
            $output[] = array(
                'gender' => $row['gender'],
                'total_student' => $row['total_student']
            );
        }
        echo json_encode($output);
    }

    public function fetchStudyear() {
        
    }

    public function fetchDivision() {
        // $division = StudentAddressInfo::select(DB::raw('COUNT(*) as total_student, present_division'))
        //     ->groupBy('present_division')
        //     ->get();
    }


    public function old_data(){
        return view('old_data.programs');
    }

    




}
