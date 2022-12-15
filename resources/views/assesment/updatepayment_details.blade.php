@extends('layouts.AdminLayout.admin_design')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Update Payment Details by admission team</h2>
                    </div>

                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{url('/registration/update/'.$updatepayment->student_id.'/'.$updatepayment->program_batch_id)}}"> {{csrf_field()}}
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Student ID</label>
                                    <input type="text" class="form-control" id="validationServer03" name="std_id" value="{{$updatepayment->student_id}}" readonly>  
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Student Full Name</label>
                                    <input type="text" class="form-control" id="validationServer04" name="full_name" value="{{$updatepayment->full_name}}" readonly>         
                                </div>     
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Program-Batch Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="program_name" value="{{$updatepayment->program_batch_name}}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Registration Fees</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code" value="{{$updatepayment->final_registration_fees}}"  readonly>
                                </div>     
                            </div>

                            <div class="form-row">
                            <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Payment Media</label>
                                    <select class="form-control" id="attend" name="pay_method">
                                        <option>bKash</option>
                                        <option> Bank Card</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Reference Number</label>
                                    <input type="text" class="form-control" id="interviewer" name="referenceid" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">bKash Number</label>
                                    <input type="text" class="form-control" id="interviewer" name="mobileno" required>
                                </div>     
                            </div> 
                            <!-- <div class="form-row"> 
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Upoad the image of Payment details</label><br>
                                    <input type="file" id="img" name="img"/>
                                </div>    
                                
                            </div>   -->
                            
                        
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