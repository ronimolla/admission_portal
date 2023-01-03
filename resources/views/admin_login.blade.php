<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
    <title>Sign In - Admission Portal</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
    <link href="/images/brand.png" rel="shortcut icon" />
    <script src="assets/plugins/nprogress/nprogress.js"></script>
  </head>

  <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
       
        .r-image{
            height: 55px;
            width: 250px;
            padding-top: 1px;
            padding-right: 10px;
            padding-bottom: 10px;
            margin: 5px 1px 25px 40px;
        }

        .bg-image {
            /* The image used */
            background-image: url("/images/login-bg.jpeg");
            
            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(2px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            text-align: center;
            opacity: 0.9;
        }

        .btn-primary{
            background-color: #00A04A !important;
        }

        .btn-primary:hover {
            background-color: #03592D !important;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
        }
        
    </style>

<body>
    <div class="bg-image"></div>
        <div class="login-box">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row justify-content-center" >
                <div class="col-lg-6 col-md-10">
                    
                    <div class="card" >
                        <div class="card-body p-8">
                            <div>
                            <img src="{{asset('images/bylc-logo.png')}}" class="r-image" alt="Responsive image">
                            </div>
                            <br>
                            
                            <div id="loginbox">
                                @if($message = Session::get('flash_message_error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                @if($message = Session::get('flash_message_success'))
                                <div class="alert alert-error alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif 
                            </div>
                            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Username">
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">Remember me
                                            <input type="checkbox" />
                                            <div class="control-indicator"></div>
                                            </label>
                                        </div>
                                        <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sleek.js"></script>
    <link href="assets/options/optionswitch.css" rel="stylesheet">
    <script src="assets/options/optionswitcher.js"></script>
</body>
</html>