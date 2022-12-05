@extends('layouts.StudentLayout.student_design')
@section('content')
<div class="content-wrapper">
  <div class="content">

    <div >
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="media widget-media p-4 bg-white border">
            <div class="media-body align-self-center">
              <a style="color:black; font-weight:bold; font-size:22px;">Welcome {{$studentDetails->name}}</a><br><br>
              <a style="color:gray; font-weight:bold; font-size:14px;">ID: 123456</a><br>
              <a style="color:gray; font-weight:bold; font-size:14px;">Email: roni@gmail.com</a><br>
            </div>
          </div>
        </div>

    </div>

    <br><br>
    
    @foreach($preselcetion as $selcetion)
    <div class="card card-default">
      <div class="content">
      <h2>Result of <strong>{{$selcetion->program_name}}<strong> Program<h2>
<hr>
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
        @if( $selcetion->program_name =="BBLTJ" || $selcetion->program_name == "BBLT")
        <div class="col-xl-3">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Writing-test</h2>
            </div>

              <div class="card-body p-4 py-xl-6 px-xl-2">
                <div class="circle circle-lg"
                  data-size="170"
                  data-value="{{$selcetion->total_score/25}}"
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
        @endif
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
                  @if( $selcetion->registration_status =="selected")
                    data-value="1."
                  @endif
                  data-value="0.0"
                  data-thickness="20"
                  data-fill=
                  "{
                    &quot;color&quot;: &quot;#35D00E&quot;
                  }"
                >
                @if( $selcetion->registration_status =="selected")
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold"> 100%</h6>
                  <strong></strong>
                </div>
                @else
                <div class="circle-content">
                  <h6 class="text-uppercase text-dark font-weight-bold"> 00%</h6>
                  <strong></strong>
                </div>
                @endif
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