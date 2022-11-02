@extends('layouts.StudentLayout.student_design')
@section('content')
<div class="content-wrapper">
  <div class="content">

  
    <p>Welcome {{$studentDetails->name}}</p><br>
    @foreach($preselcetion as $selcetion)
    <div class="card card-default">
      <div class="content">
      <h2>Resault of <strong>{{$selcetion->program_name}}<strong> Program<h2>
        <br>
      <div class="row">
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Pre-Selection</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value="{{$selcetion->pre_subtotal/10}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$selcetion->pre_subtotal}}/10</h6>

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
                  data-value="{{$selcetion->total_score/10}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$selcetion->total_score}}/25</h6>

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
                  data-value="{{$selcetion->total_interview_marks/40}}"
                  data-thickness="20"
                  data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                  >
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold">{{$selcetion->total_interview_marks}}/40</h6>
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
    @endforeach	
  
  </div>
</div>
@endsection