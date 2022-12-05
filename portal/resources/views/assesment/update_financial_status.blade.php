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
                        <form method="post" action="#"> {{csrf_field()}}
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">Student ID</label>
                                    <input type="text" class="form-control" id="validationServer03" name="std_id" value="{{$fastudent->student_id}}" readonly>  
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Student Full Name</label>
                                    <input type="text" class="form-control" id="validationServer04" name="full_name" value="{{$fastudent->full_name}}" readonly>         
                                </div>     
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Batch Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="program_name" value="{{$batchdetails->batch_name}}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Batch Code</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code" value="{{$batchdetails->batch_id}}"  readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Educational Medium</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="medium" value="{{$edinfo->educational_medium}}"  readonly>
                                </div>     
                            </div>

                            <div class="form-row">
                                
                                <div class="col-md-4 mb-3">
                                
                                    <label for="validationServer03">registration fees</label>
                                    <input type="text" class="form-control" id="registration_fees" name="registration_fees" value="{{$batchdetails->registration_fees}}"   readonly>
                                
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Waiver Amount</label>
                                    <input type="text" class="form-control" id="waiver_amount" name="waiver_amount" onkeyup="mult(this.value);" required>
                                </div>  
                                <div class="col-md-4 mb-6">
                                    <label for="validationServer03">Waiver Percentage</label>
                                    <input type="text" class="form-control" id="waiver_percentage" name="waiver_percentage" required>
                                </div> 
                            </div> 
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <textarea id="w3review" placeholder = "descride the for giving waiver" name="reason" rows="4" cols="50"></textarea>
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