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

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=StudentPersonalInfo::get(); 
        //echo "<pre>"; print_r($student); die;
        return view('programdata')->with(compact('student'));
    }


    public function profile($std_id,$program_batch_code)
    {
        $personalinfo = StudentPersonalInfo::where('student_id',$std_id)->first();
        $contactinfo = StudentContactInfo::where('student_id',$std_id)->first();
        $eduinfo = StudentEducationalInfo::where('student_id',$std_id)->first();
        $addressinfo = StudentAddressInfo::where('student_id',$std_id)->first(); 
        //['student_id'=>$std_id,'program_batch_id'=>$program_batch_code]
        $questionaryinfo = StudentQuestionaryInfo::where(['student_id'=>$std_id,'program_batch_id'=>$program_batch_code])->first(); 
 

        //echo "<pre>"; print_r($orderDetails); die;
        return view('profile')->with(compact('personalinfo','contactinfo','eduinfo','addressinfo','questionaryinfo'));
    }
    public function editprofile($std_id)
    {
        $personalinfo = StudentPersonalInfo::where('student_id',$std_id)->first();
        $contactinfo = StudentContactInfo::where('student_id',$std_id)->first();
        $eduinfo = StudentEducationalInfo::where('student_id',$std_id)->first();
        $addressinfo = StudentAddressInfo::where('student_id',$std_id)->first();
        echo "pre"; die;
        return view('profile')->with(compact('personalinfo','contactinfo','eduinfo','addressinfo'));
    }

    // public function studentlogin(Request $request){
	// 	if($request->isMethod('post')){
    //         $data = $request->input();
          
    //         return redirect('/assesment/interview');
    //     }  
       
    //      return view('assesment.interview_follow_up');  
    // }

























    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // echo "My job"; die;
       // $student = StudentPersonalInfo::where(['id'=>$id])->first();
        //return view('profile')->with(compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
