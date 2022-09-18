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

class ProgramController extends Controller
{
    /*  application process of BBLT program
        show the form for the student
        save the input data in different table 
    */
    public function bblt() 
    { 
        //echo "Success"; die;
        return view('program.bblt');
    }
    public function bbltstore(Request $request)
    {     
        if($request->isMethod('post')){
            $data = $request->input();
             //echo "<pre>"; print_r($data); die;
            // $usersCount = StudentPersonalInfo::where('student_id ',$data['email'])->count();
            //echo $usersCount ; die;
            //if($usersCount>0){
              // return redirect()->back()->with('flash_message_error','Email already exists!');
            //}
            $info = new StudentPersonalInfo;
            $info->full_name = $data['full-name'];
            $info->program_name = $data['program_name'];
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
            //$info->save();

            $coninfo = new StudentContactInfo;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            //$coninfo->save();

            $edinfo = new StudentEducationalInfo;
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
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_simeelar_To_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent__thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent__thana_OR_upazala = $data['thana'];
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
           $marconinfo = new StudentMarcomInfo;
           $marconinfo->knowing_media = $knowing_media;
           $marconinfo->save();

           $questioninfo = new StudentQuestionaryInfo;
           $questioninfo->justify_answer = $data['justify_ans'];
           $questioninfo->save();


           $info->save();
           $coninfo->save();
           $edinfo->save();
           $addinfo->save();
           $marconinfo->save();

            return redirect('/program/bblt');
            
        }
      
    }
    /*  application process of BBLTJ program
        show the form for the student
        save the input data in different table  
    */
    public function bbltj()
    {  
       //echo "Success"; die;
       return view('program.bbltj');
    }

    public function bbltjstore(Request $request)
    {
        
        if($request->isMethod('post')){

            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
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
            $info = new StudentPersonalInfo;
            $info->full_name = $data['full-name'];
            $info->program_name = $data['program_name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
            //$info->save();

            $coninfo = new StudentContactInfo;
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
            $edinfo->educational_medium = $medium;
            $edinfo->school = $data['institution']; 
            $edinfo->class = $data['school_class']; 
            $edinfo->extracurricular = $data['extracurricular'];
            //$edinfo->save();


            $addinfo = new StudentAddressInfo;
            $addinfo->present_apartment_no = $data['per_apartment'];
            $addinfo->present_house_no = $data['per_house'];
            $addinfo->present_road_no_OR_village = $data['per_road'];
            $addinfo->present_thana_OR_upazala = $data['per_thana'];
            $addinfo->present_district = $data['per_district'];
            $addinfo->present_division = $data['per_division'];
            $addinfo->present_post_code = $data['per_pc'];
            $sameaddress = $data['same_address'];
            $addinfo->present_simeelar_To_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent__thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent__thana_OR_upazala = $data['thana'];
                $addinfo->permanent_district = $data['district'];
                $addinfo->permanent_division = $data['division'];
                $addinfo->permanent_post_code = $data['pc'];
            }      
            //$addinfo->save();


            
           $marconinfo = new StudentMarcomInfo;
           if(empty($data['marketing_question'])){
                $knowing_media =' ';
            }else{
                $knowing_media = $data['marketing_question'];
            }
           $marconinfo->knowing_media = $knowing_media;
           //$marconinfo->save();

           $questioninfo = new StudentQuestionaryInfo;
           $questioninfo->justify_answer = $data['justify_ans'];
           //$questioninfo->save();

            
           $info->save();
           $coninfo->save();
           $edinfo->save();
           $addinfo->save();
           $marconinfo->save();
           $questioninfo->save();
           return redirect('/program/bblt'); 
        }
    }
    /*  application process of APL program
        show the form for the student
        save the input data in different table 
    */
    public function apl()
    {  
       //echo "Success"; die;
       return view('program.apl');
    }
    public function aplstore(Request $request)
    { 
        if($request->isMethod('post')){

            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
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
            $info->program_name = $data['program_name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
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
            $addinfo->present_simeelar_To_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent__thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent__thana_OR_upazala = $data['thana'];
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
            $edinfo->educational_medium = $medium;
            $edinfo->uni_current_year = $data['current_year_study']; 
            $edinfo->university = $data['institution']; 
            $edinfo->uni_passing_year = $data['graduation_year'];
            $edinfo->cgpa = $data['cgpa'];
            //$edinfo->save();

           
           $marconinfo = new StudentMarcomInfo;
           if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
           $marconinfo->knowing_media = $knowing_media;
           //$marconinfo->save();


           $questioninfo = new StudentQuestionaryInfo;
           $questioninfo->narrative_writing_1 = $data['narrative_writing_1'];
           $questioninfo->narrative_writing_2 = $data['narrative_writing_2'];
           //$questioninfo->save();


           $info->save();
           $addinfo->save();
           $coninfo->save();
           $edinfo->save();
           $marconinfo->save();
           $questioninfo->save();
            return redirect('/program/apl'); 
        }
    }
    /*  application process of YLS program
        show the form for the student
        save the input data in different table  
    */
    public function yls()
    {  
       //echo "Success"; die;
       return view('program.yls');
    }
    public function ylsstore(Request $request)
    { 
        if($request->isMethod('post')){

            $data = $request->input();
           // echo "<pre>"; print_r($data); die;
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
            $info->program_name = $data['program_name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity;
            $info->ethnicity_name = $data['ethnicity_name'];
            $info->disability = $disability; 
            $info->disability_name = $data['disability_name'];
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
            $addinfo->present_simeelar_To_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent__thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent__thana_OR_upazala = $data['thana'];
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
            $edinfo->undergraduate_level = $data['undergrad_level'];
            //$edinfo->save();


            $marconinfo = new StudentMarcomInfo;
            if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
            $marconinfo->knowing_media = $knowing_media;
            //$marconinfo->save();


            $questioninfo = new StudentQuestionaryInfo;
            $questioninfo->narrative_writing_1 = $data['narrative_writing_1'];
            $questioninfo->narrative_writing_2 = $data['narrative_writing_2'];
            //$questioninfo->save();


            $info->save();
            $coninfo->save();
            $addinfo->save();
            $edinfo->save();
            $marconinfo->save();
            $questioninfo->save();
            return redirect('/program/yls'); 
        }
    }


    public function careerx()
    {  
       //echo "Success"; die;
       return view('program.careerx');
    }
    public function careerxstore(Request $request)
    { 
        if($request->isMethod('post')){

            $data = $request->input();
            // echo "<pre>"; print_r($data); die;
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
            $info->program_name = $data['program_name'];
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
            $addinfo->present_simeelar_To_permanent= $sameaddress;
            if($sameaddress =="yes"){
                $addinfo->permanent_apartment_no = $data['per_apartment'];
                $addinfo->permanent_house_no =  $data['per_house'];
                $addinfo->permanent_road_no_OR_village = $data['per_road'];
                $addinfo->permanent__thana_OR_upazala = $data['per_thana'];
                $addinfo->permanent_district = $data['per_district'];
                $addinfo->permanent_division = $data['per_division'];
                $addinfo->permanent_post_code = $data['per_pc'];
            }else{
                $addinfo->permanent_apartment_no = $data['apartment'];
                $addinfo->permanent_house_no = $data['house'];
                $addinfo->permanent_road_no_OR_village = $data['road'];
                $addinfo->permanent__thana_OR_upazala = $data['thana'];
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


            $marconinfo = new StudentMarcomInfo;
            if(empty($data['marketing_question'])){
            $knowing_media =' ';
            }else{
            $knowing_media = $data['marketing_question'];
            }
            $marconinfo->knowing_media = $knowing_media;
            if(empty($data['CareerX_program'])){
                $careerx =' ';
            }else{
                $careerx = $data['CareerX_program'];
            }
            $marconinfo->bootcamp_program = $careerx;
            $marconinfo->careerx_bach_no =$data['CareerX'];
            if(empty($data['BYLC_bootcamp'])){
                $bootcamp =' ';
            }else{
                $bootcamp = $data['BYLC_bootcamp'];
            }
            $marconinfo->careerx_program = $bootcamp;
            $marconinfo->bootcamp_bach_no =$data['bootcamp'];
            //$marconinfo->save();


            $questioninfo = new StudentQuestionaryInfo;
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
            //$questioninfo->save();
            
           
            $info->save();
            $coninfo->save();
            $addinfo->save();
            $edinfo->save();
            $marconinfo->save();
            $questioninfo->save();

            return redirect('/program/careerx'); 
        }
    }









}
