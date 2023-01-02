<html>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
    
        <title>BYLC Admission Portal</title>
        <!-- "{{asset('css/backend_css/bootstrap.min.css')}}" -->
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

        <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    
        <!-- PLUGINS CSS STYLE -->
        <link href="{{asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel='stylesheet'>
    
        <!-- No Extra plugin used -->
        <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel='stylesheet'>
        <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel='stylesheet'>
        
        <link href="{{asset('assets/plugins/toastr/toastr.min.css')}}" rel='stylesheet'>
        
        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />
    
        <!-- FAVICON -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />
           
        <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>

    <style>
        .target {
            height: 150px;
            width: 150px;
            transition-property: height,width;
            transition-duration: 0.3s;
        }
        .r-image{

            height: 55px;
            width: 65px;
        }

        .target:hover {
            height: 170px;
            width: 170px;
        }

        .box {
            transition: box-shadow .3s;
            width: 150px;
            height: 150px;
            margin: 50px;
            border-radius:10px;
            border: 1px solid #ccc;
            background: #fff;
            float: left;
        }

        .box:hover {
            box-shadow: 0 0 11px rgba(33,33,33,.2); 
        }
    </style>


    <body>
    @include('Layouts.OverviewLayout.admin_header')

        <br><br><br><br><br><br>

        <!-- <div class="d-flex justify-content-center"> -->
            <div class="container">
                <center>
                <h3 style="color:green;">Hi, {{Session::get('AdminName')}} ! Welcome To Admission Portal</h3><br><br><br> 
                
                <div class="row">
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('dashboard')}}">
                                    <div class="target"><img class="target" src="{{asset('images/overview_logos/dashboard.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px ; font-weight:bold"  >Dashboard</a>
                        </button>
                    </div> 
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('/programs/programsView')}}">
                                    <div class="target"><img src="{{asset('images/overview_logos/programs.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Programs</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('/events/eventsView')}}">
                                    <div class="target"><img src="{{asset('images/overview_logos/events.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Events</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('students/programs_info')}}">
                                    <div class="target"><img src="{{asset('images/overview_logos/students.jpg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Student Management</a>
                        </button>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <div class="target"><img src="{{asset('images/overview_logos/ongoing.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Ongoing Programs</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('assesment/preselection')}}">
                                    <div class="target"><img src="{{asset('images/overview_logos/assessment.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Assessment</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <a href="{{ url('forms')}}">
                                    <div class="target"><img src="{{asset('images/overview_logos/forms.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                </a>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Forms</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="">
                            <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                <div class="target"><img src="{{asset('images/overview_logos/settings.jpeg')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                            </div>
                            <a style="font-size:14px; font-weight:bold">Settings</a>
                        </button>
                    </div>
                </div>

            </div>
            </center>
        <!-- </div> -->

    </body>

</html>
