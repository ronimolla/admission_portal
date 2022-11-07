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
            <h2>Edit employ account</h2>
          </div>

          <div class="card-body">
            <form  method="post" action="{{ route('Admins.update', $employe->id) }}">@method('PATCH') {{csrf_field()}}
              <div class="form-group">
                <label for="exampleFormControlInput1">First Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name" placeholder="First Name" value="{{$employe->first_name}}"> 
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Last Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" placeholder="Last Name" value="{{$employe->last_name}}">
              </div>
              <div class="form-group">
						    <label for="exampleFormControlInput1">Email address</label>
						    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" value="{{$employe->email}}"> 
					    </div>
              <div class="form-group">
                <label for="exampleFormControlSelect12">Department</label>
                  <select class="form-control" name="department" id="exampleFormControlSelect12">
                    <option>IT</option>
                    <option>OPD</option>
                    <option>RME</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect12">Position</label>
                  <select class="form-control" name="position" id="exampleFormControlSelect12">
                    <option  @if ($employe->designation=="Manager") selected @endif >Manager</option>
                    <option  @if ($employe->designation=="Executive") selected @endif >Executive</option>
                    <option  @if ($employe->designation=="Project Assistance") selected @endif >Project Assistance</option>
                    <option  @if ($employe->designation=="Intern") selected @endif >Intern</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect12">role</label>
                  <select class="form-control" name="role" id="exampleFormControlSelect12">
                    <option>Admin</option>
                    <option>Super Admin</option>
                    <option>Supported Admin</option>
                  </select>
              </div>
              <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
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