<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
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
    </head>

    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    

        <!-- ====================================
        ——— WRAPPER
        ===================================== -->
        <div class="wrapper">
        
            <!--sidebar-menu-->
            @include('Layouts.AdminLayout.admin_sidebar')
            <!--sidebar-menu-->
            <div class="page-wrapper">
                <!--Header-part-->
                @include('Layouts.AdminLayout.admin_header')
                <!--close-Header-part-->

                @yield('content')

                <!--Footer-part-->

                @include('Layouts.AdminLayout.admin_footer')
    
    
            </div> <!-- End Page Wrapper -->
        </div>

        <!-- Javascript -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>
    
        <script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/chart.js')}}"></script>

        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
        <script src="{{asset('assets/js/vector-map.js')}}"></script>

        <script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('assets/js/date-range.js')}}"></script>

        <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/js/sleek.js')}}"></script>
        <link href="{{asset('assets/options/optionswitch.css')}}" rel="stylesheet">
        <script src="{{asset('assets/options/optionswitcher.js')}}"></script>
        <!-- JS For Dependent Dropdown (Program_Batch_Name depends on Program_Name)-->
        <script>
            jQuery(document).ready(function(){
                    //Dropdown to select program
                    jQuery('#program_name').change(function(){                       
                        let cid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getBatch',
                            type:'post',
                            data:'cid='+cid+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#batch_name').html(result)
                                jQuery('#student_data_table').html(result)
                            }
                        });
                    });
                    
                    
                    //Dropdown to select program-batch
                    jQuery('#batch_name').change(function(){                       
                        let bid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getBatchData',
                            type:'post',
                            data:'bid='+bid+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#student_data_table').html(result)
                            }
                        });
                    });

                    // jQuery('#batch_name').change(function(){                       
                    //     let batchId=jQuery(this).val();
                    //     jQuery.ajax({
                    //         url:'/download-csv',
                    //         type:'post',
                    //         data:'batchId='+batchId+'&_token={{csrf_token()}}',
                    //         success:function(data){
                    //             $(".error_msg").text(data);
                    //         }
                    //     });
                    // });

                    
            });
        </script>

    </body>
</html>