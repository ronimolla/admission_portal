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
            <h2>Create a new program</h2>
          </div>

          <div class="card-body">
            
            <form method="post" action="{{url('programs/createProgram')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlSelect12">Project</label>
                    <select class="form-control" name="donor" id="project">
                        <option value="CSF">CSF</option>
                        <option value="EKN">EKN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect12">Category</label>
                    <select class="form-control" name="category" id="exampleFormControlSelect12">
                        <option value="Leadership">Leadership</option>
                        <option value="Professional Development">Professional Development</option>
                        <option value="Entrepreneurship">Entrepreneurship</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Program Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="program_name" placeholder="BBLT"> 
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
