@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-lg-3">   
      </div>
      <div class="col-lg-6">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Create a new program batch</h2>
          </div>

          <div class="card-body">
            
            <form method="post" action="{{url('/programs/createBatch')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlSelect12">Program Category</label>
                    <select class="form-control" name="category_program" id="exampleFormControlSelect12">
                      <option value="0" disabled="true" selected="true">Select Program</option>												
                        @foreach($program_name as $pname)
                          <option value="{{$pname->program_id}}">{{$pname->program_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">New Batch Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="batch_name" placeholder="BBLT5"> 
                </div>
                <div class="form-group">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Application Start Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="application_start_date" required> 
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Application End Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="application_end_date" required>
                    </div>     
                  </div>              
                </div> 
                <div class="form-group">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Program Start Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="program_start_date" required> 
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Program End Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="program_end_date" required>
                    </div>  
                  </div>                   
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Program Duration (in months)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="program_duration" placeholder ="3" > 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Class Time (whatever you write will be visible in the form)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="class_time" placeholder ="Sunday through Thursday from 3:30 pm to 6:00 pm" > 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mode of Program</label>
                    <select class="form-control" name="program_mode" id="exampleFormControlSelect12">
                      <option value="0" disabled="true" selected="true">Select Mode</option>
                      <option value="Online">Online</option>
                      <option value="Offline">Offline</option>
                      <option value="Hybrid">Hybrid</option>			
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">registration fees (in BDT)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="registration_fees" placeholder ="5000" > 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">registration Deadline</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="registration_deadline" > 
                </div>


                <div class="form-footer pt-4 pt-4 mt-4 border-top">
                  <button type="submit" class="btn btn-success btn-lg btn-block">Create</button>
                </div>

            </form>

          </div>
        </div>
      </div>
      <div class="col-lg-3">
      </div>
    </div> 
  </div>
</div>
@endsection
