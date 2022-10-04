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
                    <label for="exampleFormControlInput1">Batch Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="batch_name" placeholder="BBLT5"> 
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Create</button>
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