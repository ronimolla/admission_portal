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

          <!-- <div class="card-body"> -->

              <div class="w">
                <div class="tabs_wrap">
                  <ul>
                    <li data-tabs="male" class="active">Recent Forms</li>
                    <li data-tabs="female">Recent Submissions</li>
                  </ul>
                </div>
                
                <div class="container">
                  <ul>
                    <li class="item_wrap male online">
                      <div class="item">
                        <div class="item_left">
                          <div class="data">
                            <p class="name">BBLT-15</p>
                            <p class="distance">23 Submissions</p>
                          </div>
                        </div>
                        <div class="item_right">
                          <div class="status">Online</div>
                        </div>
                      </div>
                    </li>
                    <li class="item_wrap female online">
                      <div class="item">
                        <div class="item_left">
                          <div class="data">
                            <p class="name">BBLT-16</p>
                            <p class="distance">21 Submissions</p>
                          </div>
                        </div>
                        <div class="item_right">
                          <div class="status">Online</div>
                        </div>
                      </div>
                    </li>
                    <li class="item_wrap female offline">
                      <div class="item">
                        <div class="item_left">
                          <div class="data">
                            <p class="name">APL-2</p>
                            <p class="distance">13 Submissions</p>
                          </div>
                        </div>
                        <div class="item_right">
                          <div class="status">Offline</div>
                        </div>
                      </div>
                    </li>
                    <li class="item_wrap female online">
                      <div class="item">
                        <div class="item_left">
                          <div class="data">
                            <p class="name">APL-4</p>
                            <p class="distance">18 Submissions</p>
                          </div>
                        </div>
                        <div class="item_right">
                          <div class="status">Online</div>
                        </div>
                      </div>
                    </li>
                    <li class="item_wrap female online">
                      <div class="item">
                        <div class="item_left">
                          <div class="data">
                            <p class="name">BBLTJ-12</p>
                            <p class="distance">21 Submissions</p>
                          </div>
                        </div>
                        <div class="item_right">
                          <div class="status">Online</div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
        </div>
      </div>
    
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
    
    <div class="row">
        <div class="col-md-4">
          <div class="card card-default">
              <div id="piechart-gender" style="width: 100%; height: 100%; object-fit: cover;"></div>
          </div>
        </div>
        <!-- <div class="col-md-4">
          <div class="card card-default">
              <div id="piechart-studyear" style="width: 100%; height: 100%; object-fit: cover;"></div>
          </div>
        </div> -->
		</div>


    
  </div>  
</div>
@endsection