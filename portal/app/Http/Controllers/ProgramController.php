<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Models\StudentPersonalInfo;
use App\Models\StudentContactInfo;
use App\Models\StudentEducationalInfo;
use App\Models\StudentAddressInfo;
use App\Models\StudentMarcomInfo;

class ProgramController extends Controller
{
    //
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
                     $disability = $data['knowing_media'];
            }
            $info = new StudentPersonalInfo;
            $info->full_name = $data['full-name'];
            $info->gender = $gender;
            $info->dob = $data['date-of-birth']; 
            $info->nationality = $data['nationality']; 
            $info->father_name = $data['father_name'];    
            $info->mother_name = $data['mother-name'];            
            $info->ethnicity = $ethnicity; 
            $info->disability = $disability; 
            $info->save();

            $coninfo = new StudentContactInfo;
            $coninfo->personal_phone_no = $data['mobile-number'];
            $coninfo->emergency_contact_no = $data['emergency-contact']; 
            $coninfo->email_address = $data['email-address'];            
            $coninfo->save();

            $edinfo = new StudentEducationalInfo;
            $edlevel = $data['edu_level'];
            $edinfo->educational_medium = $data['medium'];
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
            $edinfo->save();


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
            $addinfo->save();


            if(empty($data['knowing_media'])){
                $knowing_media =' ';
                }else{
                   $knowing_media = $data['knowing_media'];
           }
           $marconinfo = new StudentMarcomInfo;
           $marconinfo->knowing_media = $knowing_media;
           $marconinfo->save();



            return redirect('/program');
            
        }
      
    }
}
