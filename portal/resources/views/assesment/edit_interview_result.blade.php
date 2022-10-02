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
                        <form method="post" action="{{url('/interviewresult/edit/'.$studentinfo->student_id)}}"> {{csrf_field()}}
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
                                    <label for="validationServer04">Program Code</label>
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code" value="{{$studentinfo->program_batch_id}}"  readonly>
                                </div>     
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Interviewer</label>
                                    <input type="text" class="form-control" id="interviewer" name="interviewer" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Attend interview</label>
                                    <select class="form-control" id="attend" name="attend">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Group Discussion attend</label>
                                    <select class="form-control" id="g_attend" name="g_attend">
                                        <option>Yes</option>
                                        <option> No</option>
                                    </select>
                                </div>    
                            </div> 
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Competence(10)</label>
                                    <input type="text" class="form-control" id="competence" name="competence" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Courage(10)</label>
                                    <input type="number" class="form-control" id="courage" name="courage" required>
                                </div>  
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Compassion(10)</label>
                                    <input type="number" class="form-control" id="compassion" name="compassion" required>
                                </div>    
                            </div>  
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Commitment(10)</label>
                                    <input type="text" class="form-control" id="commitment" name="commitment" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Total_Interview_marks(40)</label>
                                    <input type="number" class="form-control" id="courage" name="t_i_mark" required>
                                </div>  
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04">Total Marks(75)</label>
                                    <input type="number" class="form-control" id="compassion" name="t_mark" required>
                                </div>    
                            </div>  

                            <div class="form-row"> 
                                <div class="col-md-4 mb-3">
                                        <label for="validationServer03">Select For Registration</label>
                                        <select class="form-control" id="select_for_registration" name="select_for_registration">
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