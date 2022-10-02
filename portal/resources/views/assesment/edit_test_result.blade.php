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
                        <form method="post" action="{{url('/testresult/edit/'.$studentinfo->student_id)}}"> {{csrf_field()}}
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
                                    <input type="text" class="form-control" id="validationServer03" name="program_name" value="{{$studentinfo->program_name}}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer04">Batch ID</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code" value="{{$studentinfo->program_batch_id}}" readonly>
                                </div>     
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Assessor Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="assessor_name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Attend writing test</label>
                                    <select class="form-control" id="writting_eligibility" name="attended">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Writing Test Score</label>
                                    <input type="number" class="form-control" id="validationServer04" name="test_score" required>
                                </div>    
                            </div> 

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Writing at Application Score(35)</label>
                                    <input type="number" class="form-control" id="validationServer04" name="writing_and_appication_score" required>
                                </div>  
                                <div class="col-md-4 mb-3">
                                        <label for="validationServer03">Interview Eligibility</label>
                                        <select class="form-control" id="writting_eligibility" name="select_for_interview">
                                            <option>Eligible</option>
                                            <option> Incapable</option>
                                        </select>   
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