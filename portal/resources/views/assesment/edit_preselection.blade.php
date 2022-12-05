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
                        <h2>Update pre selction result</h2>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{url('/preselection/edit/'.$studentinfo->student_id.'/'.$assinfo->program_batch_id)}}"> {{csrf_field()}}
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
                                    <input type="text" class="form-control" id="validationServer04"  name="program_code" value="{{$assinfo->program_batch_id}}"  readonly>
                                </div>     
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03">Assessor Name</label>
                                    <input type="text" class="form-control" id="validationServer03" name="assessor_name" value= "{{Session::get('AdminName')}}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04" class="required">Authenticity(3)</label>
                                    <input type="number" class="form-control" id="validationServer04" name="authemticity" min="0" max="3" required>
                                </div>  
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer04" class="required">Articulation(3) </label>
                                    <input type="number" class="form-control" id="validationServer04" name="articulation" min="0" max="3" required>
                                </div>    
                            </div>  
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03" class="required">Logical_reasoning(4)</label>
                                    <input type="number" class="form-control" id="validationServer03" name="logical_reasoning" min="0" max="4" required>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03" class="required">@if( $program_name =="BBLTJ" || $program_name == "BBLT") Writting Exam Eligibility @else Interview Eligibility @endif</label>
                                    <select class="form-control" id="writting_eligibility" name="writting_eligibility">
                                        <option>Eligible</option>
                                        <option>Incapable</option>
                                    </select>    
                                </div> 

                            </div>  
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer03" class="required">Remark</label>
                                    <textarea class="form-control" id="validationServer03" name ="pre_remark"rows="4" cols="50" required></textarea>    
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