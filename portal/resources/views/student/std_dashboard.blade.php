@extends('layouts.StudentLayout.student_design')
@section('content')
<div class="content-wrapper">
  <div class="content">

  
    <p>Welcome {{$studentDetails->name}}</p><br>
    <div class="row">
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Pre-Selection</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value="{{$preselcetionpercentage}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$preselcetion->pre_subtotal}}/10</h6>

                  <strong></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Writing-test</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value="{{$testpercentage}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$testresult->total_score}}/25</h6>

                  <strong></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Interview</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value="{{$interviewpercentage}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$interviewresult->total_interview_marks}}/40</h6>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Registration</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value=".0"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">00%</h6>

                  <strong></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  
  </div>
</div>
@endsection