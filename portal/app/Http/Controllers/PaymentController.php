<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Http\UploadedFile;
use Session;
use App\Models\AssesementPreselection;
use App\Models\WritingTest;
use App\Models\User;
use App\Models\Interview;
use App\Models\Waiver;
use App\Models\Program_batch;
use App\Models\Payment;
use Image;
use App\Models\Assesment;
use App\Models\FinancialAid;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    /*------------ show the financial form and sent the request for financial application----------*/
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
      
        $batchinfo = DB::table('assesments')
         ->join('program_batches', 'assesments.program_batch_id', '=', 'program_batches.batch_id')
         ->where(['student_id'=>$studentinfo->student_id,['request_faq','=','Yes']])
         ->get();
        
         return view('assesment.financialaid_form')->with(compact('studentinfo','batchinfo')); 
    }

    /*------------ Display the waiver request result 
    that was responce by the admintion team----------*/
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

    /*------------ Show me the all program registration details those program
     i applied and selected for registeration ----------*/
    public function mypayment()
    {
        $studentDetails = User::where(['email'=>Session::get('userSession')])->first();
        $student_id = $studentDetails->student_id;
        $mywaiver = Waiver::where(['student_id'=> $student_id])->get();
        $mywaiverdetails = DB::table('payments')
            ->join('program_batches', 'payments.program_batch_id', '=', 'program_batches.batch_id')
            ->where(['student_id'=> $student_id,['payment_status','=','pending']])->get();
      // echo "<pre>"; print_r($mywaiverdetails); die;
        return view('student.payment')->with(compact('mywaiverdetails')); 
    }

    /*------------ Update the payment details what 
    was i paide for the program ----------*/
    public function updatemypayment(Request $request,$student_id= null,$program_batch_id= null){
        
        if($request->isMethod('post')){
            
           $data = $request->input();
            //if($request->hasFile('img')){
                //$image_temp = $request->file('img');
               
                 
                
                  // if($image_temp->isValid()){
                       // $extension = $image_temp->getClientOriginalExtension();
                       // $filename = rand(111,99999).'.'.$extension;
                       // $filename->store('images');
                        //echo $filename; die;
                         //$large_image_path = 'images/payment/'.$filename;
            //             $medium_image_path = 'images/backend_images/products/medium/'.$filename;
            //             $small_image_path = 'images/backend_images/products/small/'.$filename;
                        
                       // Image::make($image_temp)->save($large_image_path );
            //             Image::make($image_temp)->resize(600,600)->save($medium_image_path );
            //             Image::make($image_temp)->resize(300,300)->save($small_image_path );
                        
            //             $product->image=$filename;
                  //  }
               // }

                Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->update(['payment_media'=>$data['pay_method'],
                'reference'=>$data['referenceid'],'payment_mobileno'=>$data['mobileno'],'payment_status'=>'Sent']);

           return redirect('/student/my-payments');
           
        }  
        $updatepayment = Payment::where(['student_id'=>$student_id,'program_batch_id'=>$program_batch_id])->first();
       
        return view('student.updatepayment_details')->with(compact('updatepayment'));  
   }
}
