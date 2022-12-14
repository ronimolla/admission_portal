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
        <link href="{{asset('images/brand.png')}}" rel="shortcut icon" />
    
        
        <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        
        <style>
        .target {
            height: 150px;
            width: 150px;
            transition-property: height,width;
            transition-duration: 0.3s;
        }
        .required:after {
            content:" *";
            color: red;
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

        #chart_wrap {
            position: relative;
            padding-bottom: 100%;
            height: 0;
            overflow:hidden;
        }
        #piechart {
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            height:70%;
        }



        /* Dashboard- Forms */
        .w{
            width: 100%;
            height: 100%;
            background: #fff;
            margin: 15px auto 0;
        }

        .w .title{
            padding: 30px 20px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            border-bottom: 1px solid #ebedec;
        }

        .w .tabs_wrap{
            padding: 20px;
            border-bottom: 1px solid #ebedec;
        }

        .w .tabs_wrap ul{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center;
        }

        .w .tabs_wrap ul li{
            width: 600px;
            text-align: center;
            background: #e9ecf1;
            border-right: 1px solid #c1c4c9;
            padding: 13px 15px;
            cursor: pointer;
            -webkit-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .w .tabs_wrap ul li:first-child{
            border-top-left-radius: 0px;
            border-bottom-left-radius: 25px;
        }

        .w .tabs_wrap ul li:last-child{
            border-right: 0px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 0px;
        }

        .w .tabs_wrap ul li:hover,
        .w .tabs_wrap ul li.active{
            background: #7fc469;
            color: #fff;
        }

        .w .container .item_wrap{
            padding: 10px 20px;
            border-bottom: 1px solid #ebedec;
            cursor: pointer;
        }

        .w .container .item_wrap:hover{
            background: #e9ecf1;
        }

        .w .container .item{
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                    justify-content: space-between;
        }

        .item_wrap .item .item_left{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
        }

        .item_wrap .item_left img{
            width: 70px;
            height: 70px;
            display: block;
        }

        .item_wrap .item_left .data{
            margin-left: 20px;
        }

        .item_wrap .item_left .data .name{
            font-weight: 600;
        }

        .item_wrap .item_left .data .distance{
            color: #7f8b9b;
            font-size: 14px;
            margin-top: 3px;
        }

        .item_wrap .item_right .status{
            position: relative;
            color: #77818d;
        }

        .item_wrap .item_right .status:before{
            content: "";
            position: absolute;
            top: 5px;
            left: -12px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #b3bbc8;
        }

        .item_wrap.offline .item_right .status{
            color: #b3bbc8;	
        }

        .item_wrap.online .item_right .status:before{
            background: #7fc469;
        }

    </style>

    </head>
    

    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

        <!-- ====================================
        ????????? WRAPPER
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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <!-- JS For Dependent Dropdown (Program_Batch_Name depends on Program_Name)-->
        <script>
            function mult(value){
                var x,y,z;
                y = document.getElementById('registration_fees').value;
                z = document.getElementById('waiver_amount').value;
                x=(z * 100)/y;
                const ex3 =(Math.round(x * 100) / 100).toFixed(2);

                document.getElementById('waiver_percentage').value =ex3 + "%";
            }
           
           

            jQuery(document).ready(function(){
                    
                //-----------(Student  Management page)-------------------------

                    //Dropdown to select student type
                    jQuery('#student_type').change(function(){                       
                        let type=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getStudentType',
                            type:'post',
                            data:'type='+type+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    });   

                    //Dropdown to select program and get table data
                    jQuery('#program_name').change(function(){                       
                        let cid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getBatch',
                            type:'post',
                            data:'cid='+cid+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    });     
                    
                    //Dropdown to select program and get program batch dropdown
                    jQuery('#program_name').change(function(){                       
                        let cid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getBatch2',
                            type:'post',
                            data:'cid='+cid+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#batch_name').html(result)
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
                                jQuery('#basic-data-table').html(result)

                            }
                        });
                    });

                    //Dropdown to select program-batch for Download CSV
                    jQuery('#batch_name').change(function(){                
                        let bid2=jQuery(this).val();
                        jQuery.ajax({
                            url:'/download-csv',
                            type:'post',
                            data:'bid2='+bid2+'&_token={{csrf_token()}}'
                            // success: function (result) {
                            //     jQuery('product_row').html(result)
                            // }
                        });
                    });

                //-----------(Program Page)-------------------------

                    //Dropdown to select program name For showing table data 
                    jQuery('#category').change(function(){                       
                        let cat=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getProgramDatabyCategory',
                            type:'post',
                            data:'cat='+cat+'&_token={{csrf_token()}}',
                            success:function(result){                 
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    }); 

                    //Dropdown to select project and get table data
                    jQuery('#project').change(function(){                       
                        let proj=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getProgramDatabyProject',
                            type:'post',
                            data:'proj='+proj+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    });  

                //-----------(Program-Batch-page)-------------------------

                    //Dropdown to select program name For showing table data 
                    jQuery('#programs').change(function(){                       
                        let pnid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getProgramData',
                            type:'post',
                            data:'pnid='+pnid+'&_token={{csrf_token()}}',
                            success:function(result){                 
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    });     

                //-----------(Event Page)-----------------------------

                    //Dropdown to select program name For showing table data 
                    jQuery('#category_event').change(function(){                       
                        let cat=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getEventDatabyCategory',
                            type:'post',
                            data:'cat='+cat+'&_token={{csrf_token()}}',
                            success:function(result){                 
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    }); 
              
                    
                //-----------(Event-Batch-page)-------------------------
                    
                    //Dropdown to select Event name For showing table data 
                    jQuery('#events').change(function(){                       
                        let eid=jQuery(this).val();
                        jQuery.ajax({
                            url:'/getEventData',
                            type:'post',
                            data:'eid='+eid+'&_token={{csrf_token()}}',
                            success:function(result){
                                jQuery('#basic-data-table').html(result)
                            }
                        });
                    });   
            });
        </script>


        <!-------------------- Fetch Data for Pie Chart ------------------------->

        <script>
            //Fetch Educational Medium data from controller for Data Chart 
            function load_data() {
                $.ajax({
                    url: 'fetchMedium',
                    method: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "JSON",
                    success: function (data) {
                        drawChart(data);
                    }
                });
            }
        
            //Fetch Ethnicity data from controller for Data Chart 
            function load_Eth_data() {
                $.ajax({
                    url: 'fetchEthnicity',
                    method: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "JSON",
                    success: function (data) {
                        drawChart2(data);
                    }
                });
            }

            //Fetch Disability data from controller for Data Chart 
            function load_Dis_data() {
                $.ajax({
                    url: 'fetchEthnicity',
                    method: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "JSON",
                    success: function (data) {
                        drawChart3(data);
                    }
                });
            }

            //Fetch Gender data from controller for Data Chart 
            function load_Gen_data() {
                $.ajax({
                    url: 'fetchGender',
                    method: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "JSON",
                    success: function (data) {
                        drawChart4(data);
                    }
                });
            }
        </script>


        <!-------------------- Google Data Chart for Dashboard ------------------->

        <!-- Google Pie-Chart (Educational Medium) -->
        <script type="text/javascript">
           
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(function () {
                load_data();
            });

            function drawChart(drawChart) 
            {
                let jsonData = drawChart;
                let data = new google.visualization.arrayToDataTable([]);
                data.addColumn({type: 'string', label: 'Education Medium'});
                data.addColumn({type: 'number', label: 'Total Students'});
            
                $.each(jsonData, (i, jsonData) => {
                    let educational_medium = jsonData.educational_medium;
                    let total_student = jsonData.total_student;
                    data.addRows([
                        [educational_medium, total_student]
                    ]);
                });

                var options = {
                    title: 'Educational Medium',
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>


        <!-- Google Pie-Chart (Ethnicity) -->
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(function () {
                load_Eth_data();
            });

            function drawChart2(drawChart) {
                let jsonData = drawChart;
                let data = new google.visualization.arrayToDataTable([]);
                data.addColumn({type: 'string', label: 'Ethnicity'});
                data.addColumn({type: 'number', label: 'Total Students'});
            
                $.each(jsonData, (i, jsonData) => {
                    let ethnicity = jsonData.ethnicity;
                    let total_student = jsonData.total_student;
                    data.addRows([
                        [ethnicity, total_student]
                    ]);
                });

                var options = {
                    title: 'Ethnicity',
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart-ethnicity'));
                chart.draw(data, options);
            }
        </script>


        <!-- Google Pie-Chart (Disability) -->
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(function () {
                load_Dis_data();
            });

            function drawChart3(drawChart) {
                let jsonData = drawChart;
                let data = new google.visualization.arrayToDataTable([]);
                data.addColumn({type: 'string', label: 'Disability'});
                data.addColumn({type: 'number', label: 'Total Students'});
            
                $.each(jsonData, (i, jsonData) => {
                    let disability = jsonData.disability;
                    let total_student = jsonData.total_student;
                    data.addRows([
                        [disability, total_student]
                    ]);
                });

                var options = {
                    title: 'Disability',
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart-disability'));
                chart.draw(data, options);
            }
        </script>


        <!-- Google Pie-Chart (Gender) -->
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(function () {
                load_Gen_data();
            });

            function drawChart4(drawChart) {
                let jsonData = drawChart;
                let data = new google.visualization.arrayToDataTable([]);
                data.addColumn({type: 'string', label: 'Gender'});
                data.addColumn({type: 'number', label: 'Total Students'});
            
                $.each(jsonData, (i, jsonData) => {
                    let gender = jsonData.gender;
                    let total_student = jsonData.total_student;
                    data.addRows([
                        [gender, total_student]
                    ]);
                });

                var options = {
                    title: 'Gender',
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart-gender'));
                chart.draw(data, options);
            }
        </script>

        

        <!-- Tab View for form submission -->
        <script>
            var tabs = document.querySelectorAll(".tabs_wrap ul li");
            var males = document.querySelectorAll(".male");
            var females = document.querySelectorAll(".female");
            var all = document.querySelectorAll(".item_wrap");

            tabs.forEach((tab)=>{
                tab.addEventListener("click", ()=>{
                    tabs.forEach((tab)=>{
                        tab.classList.remove("active");
                    })
                    tab.classList.add("active");
                    var tabval = tab.getAttribute("data-tabs");

                    all.forEach((item)=>{
                        item.style.display = "none";
                    })

                    if(tabval == "male"){
                        males.forEach((male)=>{
                            male.style.display = "block";
                        })
                    }
                    else if(tabval == "female"){
                        females.forEach((female)=>{
                            female.style.display = "block";
                        })
                    }
                    else{
                        all.forEach((item)=>{
                            item.style.display = "block";
                        })
                    }

                })
            })
        </script>

    </body>
</html>