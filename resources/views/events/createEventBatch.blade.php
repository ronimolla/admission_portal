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
            <h2>Create a new event batch</h2>
          </div>

          <div class="card-body">
            
            <form method="post" action="{{url('/events/createEventBatch')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlSelect12">Category</label>
                    <select class="form-control" name="event_name" id="exampleFormControlSelect12" required>
                        <option value="0" disabled="true" selected="true">Select Program</option>												
                            @foreach($event_name as $pname)
                              <option value="{{$pname->id}}">{{$pname->event_name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Batch Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="batch_name" placeholder="CareerExpo14"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Start Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="start_date" placeholder="CareerExpo14"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">End Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="end_date" placeholder="CareerExpo14"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Year</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="year" placeholder="2022"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Budget (BDT)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="budget" placeholder="write budget allocated"> 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Sponser</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="sponser" placeholder="write sponser name"> 
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Create Batch</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
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
