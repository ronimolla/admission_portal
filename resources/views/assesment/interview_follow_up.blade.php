@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-1">
            </div>

            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Basic Validation</h2>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{url('/interview/follow-up/'.$studentinfo->student_id.'/'.$assinfo->program_batch_id)}}"> {{csrf_field()}}
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Student ID</label>
                                    <input type="text" class="form-control" id="validationServer03" name="std_id" value="{{$studentinfo->student_id}}" readonly>  
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Student Full Name</label>
                                    <input type="text" class="form-control" id="validationServer04" name="full_name" value="{{$studentinfo->full_name}}" readonly>         
                                </div>     
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Program Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="program_name" value="{{$assinfo->program_name}}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Batch ID</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code"  value="{{$assinfo->program_batch_id}}"   readonly>
                                </div>     
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Comtact No</label>
                                    <input type="text" class="form-control" id="validationServer03"  name="eligible_writing_exam" value="{{$coninfo->personal_phone_no}}"readonly>
                                </div> 
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Application & Test Score</label>
                                    <input type="text" class="form-control" id="validationServer03" name="preselection_score" value="{{$assinfo->all_totall_marks}}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Registration Eligibility</label>
                                    <input type="text" class="form-control" id="validationServer03"  name="registration_eligibility" value="{{$assinfo->select_for_registration}}"readonly>
                                </div>     
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Interviewer Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="assessor_name" value= "{{$assinfo->interviewer}}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Assessor Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="assessor_name" value= "{{Session::get('AdminName')}}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04" class="required">Contact Media</label>
                                    <input type="text" class="form-control" id="validationServer04" name="conatct_media" required>
                                </div>  
                                   
                            </div>  
                            <div class="form-row">
                               <div class="col-md-4 mb-3">
                                    <label for="exampleFormControlSelect12" class="required">Want to register</label>
                                    <select class="form-control" id="want_to_registration" name="want_to_registration">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>    
                                </div>   
                                <div class="col-md-4 mb-3">
                                    <label for="exampleFormControlSelect12" class="required">Request for Financial AID</label>
                                    <select class="form-control" id="request_faq" name="request_faq">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>                              
                                </div>  
                                <div class="col-md-4 mb-3">                          
                                    <label for="exampleFormControlSelect12" class="required">Sent Financial AID Form</label>
                                    <select class="form-control" id="sent_fid" name="sent_fid">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>
                                </div>
                            </div>  
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Reason For not Registration</label>
                                    <textarea class="form-control" id="validationServer03" name ="reason"rows="4" cols="50"></textarea>                                   
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04" class="required">Fiman remark</label>
                                    <textarea class="form-control" id="validationServer03" name ="renark"rows="4" cols="50" required></textarea>
                                </div>     
                            </div>  
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
    </div>
</div>
@endsection