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
            <h2>{{$program_batch->batch_name}} Information</h2>
          </div>

          <div class="card-body">
            
            <form method="post" action="{{url('programs/editBatch/'.$program_batch->batch_id)}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
               
                <div class="form-group">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Application Start Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="application_start_date" value = "{{$program_batch->start_date}}" required> 
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Application End Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="application_end_date" value = "{{$program_batch->end_date}}" required>
                    </div>     
                  </div>              
                </div> 
                <div class="form-group">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Program Start Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="program_start_date" value = "{{$program_batch->program_start_date}}" required> 
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="exampleFormControlInput1">Program End Date</label>
                      <input type="date" class="form-control" id="validationServer03" name="program_end_date"  value = "{{$program_batch->program_end_date	}}" required>
                    </div>  
                  </div>                   
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Program Duration (in months)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="program_duration"  value = "{{$program_batch->program_duration}}"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Class Time (whatever you write will be visible in the form)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="class_time" placeholder ="Sunday through Thursday from 3:30 pm to 6:00 pm" value = "{{$program_batch->class_time}}"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mode of Program</label>
                    <select class="form-control" name="program_mode" id="exampleFormControlSelect12">
                      <option value="0" disabled="true" selected="true">Select Mode</option>
                      <option value="online" {{ $program_batch->program_mode == 'online' ? 'selected' : ' ' }}>Online</option>
                      <option value="Offline" {{ $program_batch->program_mode == 'Offline' ? 'selected' : ' ' }}>Offline</option>			
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">registration fees (in BDT)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="registration_fees" placeholder ="5000" value = "{{$program_batch->registration_fees}}"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">registration Deadline</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="registration_deadline" value = "{{$program_batch->registration_deadline}}"> 
                </div>


                <div class="form-footer pt-4 pt-4 mt-4 border-top">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
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
