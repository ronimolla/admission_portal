@extends('layouts.AdminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  <div class="content">

  
  <div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="media widget-media p-4 bg-white border">
        <div class="icon rounded-circle mr-4 bg-primary">
          <i class="mdi mdi-account-outline text-white "></i>
        </div>

        <div class="media-body align-self-center">
          <h4 class="text-primary mb-2">{{$total_applicants}}</h4>
          <p>Total Applicants</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="media widget-media p-4 bg-white border">
        <div class="icon rounded-circle bg-warning mr-4">
          <i class="mdi mdi-account-outline text-white "></i>
        </div>

        <div class="media-body align-self-center">
          <h4 class="text-primary mb-2">{{$registered_students}}</h4>
          <p>Registered Students</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="media widget-media p-4 bg-white border">
        <div class="icon rounded-circle mr-4 bg-danger">
          <i class="mdi mdi-file-document-box-multiple text-white "></i>
        </div>

        <div class="media-body align-self-center">
          <h4 class="text-primary mb-2">{{$total_programs}}</h4>
          <p>Total Programs</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="media widget-media p-4 bg-white border">
        <div class="icon bg-success rounded-circle mr-4">
          <i class="mdi mdi-paper-cut-vertical text-white "></i>
        </div>

        <div class="media-body align-self-center">
          <h4 class="text-primary mb-2">{{$total_events}}</h4>
          <p>Total Events</p>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">6,232</h2>
            <p>Leadership Graduates</p>

            <div class="chartjs-wrapper">
              <canvas id="barChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini  mb-4">
          <div class="card-body">

            <h2 class="mb-1">4,607</h2>
            <p>OPD graduates</p>

            <div class="chartjs-wrapper">
              <canvas id="dual-line"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">136,178</h2>
            <p>BYLCx Course Enrollments </p>
            <div class="chartjs-wrapper">
              <canvas id="area-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">19</h2>
            <p>Total Startups</p>

            <div class="chartjs-wrapper">
              <canvas id="line"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-6">  
        <div class="card card-default">
          <div class="card-header">
            <h2>Graduates Amount Of The Year</h2>

          </div>
          <div class="card-body">
            <canvas id="linechart" class="chartjs"></canvas>
          </div>
          <div class="card-footer d-flex flex-wrap bg-white p-0">
            <div class="col-6 px-0">
              <div class="text-center p-4">

                <h4>6,308</h4>
                <p class="mt-2">Total graduates of this year</p>

              </div>
            </div>
            <div class="col-6 px-0">
              <div class="text-center p-4 border-left">
                <h4>8</h4>
                <p class="mt-2">Total courses of this year</p>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">  
      <div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Pill Tabs </h2>
			</div>

			<div class="card-body">
				<p class="mb-5">Take that same HTML, but use <code>.nav-pills</code> instead: Read Bootstrap Documention <a href="https://getbootstrap.com/docs/4.6/components/navs/#pills"
						target="_blank">more details.</a></p>

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
							aria-selected="true">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
							aria-selected="false">Profile</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
							aria-selected="false">Contact</a>
					</li>

					<li class="nav-item">
						<a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
					</li>
				</ul>

				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</div>

					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</div>

					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</div>
				</div>
			</div>
		</div>
      </div>

      <!-- Doughnut Chart -->
      <!-- <div class="col-xl-4 col-md-12">
        <div class="card card-default">
          <div class="card-header justify-content-center">
            <h2>Division</h2>
          </div>
          <div class="card-body" >
            <canvas id="doChart" ></canvas>
          </div>
          <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
          <div class="card-footer d-flex flex-wrap bg-white p-0">
            <div class="col-6">
              <div class="py-4 px-4">
                <ul class="d-flex flex-column justify-content-between">
                  <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                  <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                </ul>
              </div>
            </div>
            <div class="col-6 border-left">
              <div class="py-4 px-4 ">
                <ul class="d-flex flex-column justify-content-between">
                  <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                  <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    
    </div>
      
      
    <div class="row">
        
        <!-- Google Pie Chart -->
        <div class="col-md-4">
          <div class="card card-default">
                <div id="piechart" style="width: 100%; height: 100%; object-fit: cover;"></div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="card card-default">
            <div id="piechart-disability" style="width: 100%; height: 100%; object-fit: cover;"></div>   
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-default">
                <div id="piechart-ethnicity" style="width: 100%; height: 100%; object-fit: cover;"></div>
            </div>
        </div>
        
		</div>
    
  </div>  
</div>
@endsection