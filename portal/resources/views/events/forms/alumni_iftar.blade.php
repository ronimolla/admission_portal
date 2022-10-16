<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alumni Iftar</title>
	<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


	<style>
		body {
			background-color: lightblue;
		}

		div.sentence {
		  font-size: 13px;
		}		
		div.subHeading {
		  font-size: 16px;
		}	
		div.Heading {
		  font-size: 18px;
		}

		.dropdown-menu {
 		  max-height: 150px;
  		  overflow-y: scroll;
		}

		.f2:hover	{ border: 2px solid black; background-color: red; opacity:1.0;}

	</style>

</head>

<body>
	<div class="page-content" style="background: gray">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="../../images/bylc-logo.png" alt="" width="180" height="35"> <br><br>
					<a style="font-size: 20px; font-weight:bold; font">ALUMNI IFTAR 2023 REGISTRATION FORM</a>
				</div>
  
		      
				<form class="form-register" method="post" action="{{url('financialaid-form')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">

			            <!-------------------------------- REGISTRATION INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
                            <center>
								<a style="font-size: larger; font-weight: bold">Registration Information</a><br>
							</center>
							<br><br>

                            <div class="container">
										<a style="font-weight:bold ; font-size:16px">Mode of Event: </a><a style=" font-size:16px">Physical and Virtual</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Date: </a> <a style="font-size: 16px">Thursday, April 21, 2022</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Registration Fee: </a> <a style="font-size: 16px"> BDT 250 per person</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Registration Deadline: </a> <a style="font-size: 16px">Sunday, April 10, 2022. Please note that, due to the prevailing Covid-19 situation our seating capacity is limited, we will close registration once the first 200 (for Dhaka) and first 120 (for Chattogram) have registered, so we encourage early registration</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Registration Rules:</a> <br>
                                            <ul>
                                                <li style="font-size: 16px;">Step 1: Fill out the registration form</li>
                                                <li style="font-size: 16px;">Step 2: Make the payment</li>
                                                <li style="font-size: 16px;">Step 3: Confirm your payment using the 16-digit invoice number</li>
                                                <li style="font-size: 16px;">Step 4: Submit the registration form</li>
                                            </ul>
                                        <br>
                                        <a style="font-weight: bold ; font-size: 16px">Rules and Regulations:</a><br>
                                            <ul>
                                                <li style="font-size: 16px;">Only BGN members can attend the program </li>
                                                <li style="font-size: 16px;">The Iftar will be held in both Dhaka and Chattogram </li>
                                                <li style="font-size: 16px;">The Iftar can be attended virtually via Zoom, for that no payment is required</li>
                                                <li style="font-size: 16px;">No on-spot registration will be available </li>
                                                <li style="font-size: 16px;">Reporting time is 5:30 PM sharp</li>
                                                <li style="font-size: 16px;">The amount paid is non-refundable</li>
                                                <li style="font-size: 16px;">Due to limited seat availability we cannot accomodate guests</li>
                                            </ul>
                                        <br><br>     
						    </div>


			                <center>
								<a style="font-size: larger; font-weight: bold">Participant Information</a><br>
							</center>
							<br><br>

                            <!-- Full name -->
							<a style="font-size: small ; font-weight: bold">Full Name</a><br>
							<a style="font-size: 11px ; color: gray; ">As per passport or national ID or academic certificate</a><br>
							<input type="text" class="form-control" name="full_name" id="full_name" >
							<br>

							<!-- Mobile, Emergency Contact, Email -->
							<div class="row g-1">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mobile</a><br>
                                    <a style="font-size: 11px ; color: gray; ">Example: 01712345678</a><br>
									<input type="text" class="form-control" name="student_id" id="student_id">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Emergency Contact Number</a><br>
                                    <a style="font-size: 11px ; color: gray; ">Example: 01712345678</a><br>
									<input type="text" class="form-control" name="contact" id="contact">
								</div>
							</div>
                            <br>
							<div class="row g-1">
                                <div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Email (ইমেইল)</a><br>
                                    <a style="font-size: 11px ; color: gray; ">Example: name@gmail.com</a><br>
									<input type="text" class="form-control" name="email" id="email">
								</div>
							</div>
							<br><br>

							<!-- BYLC Program Attended -->
							<a style="font-size: small ; font-weight: bold">BYLC Program(s) you have Attended</a><br>
							<div class="row g-1">
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="BBLT" value="BBLT">
										<label style="font-size: 14px;">BBLT</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox"name="BBLTJ" value="BBLTJ">
										<label style="font-size: 14px;">BBLTJ</label>
									</div>
								</div>
							</div>
                            <div class="row g-1">
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="YLS" value="YLS">
										<label style="font-size: 14px;">YLS</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="YLB" value="YLB">
										<label style="font-size: 14px;">YLB</label>
									</div>
								</div>
							</div>
                            <div class="row g-1">
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="APL" value="APL">
										<label style="font-size: 14px;">APL</label>
									</div>
								</div>
							</div>
							<br>
                            
                            <!-- Program Batch Name -->
							<a style="font-size: small">Please mention (example: BBLT 12, BBLTJ 3, APL 5, YLS 2, YLB 2 etc.)</a><br>
							<input type="text" class="form-control" name="program_batch">
							<br>

                            <!-- Occupation -->
                            <a style="font-size: small ; font-weight: bold">Occupation</a><br>
                            <div class="form-row">
								<div id="radio">
									<div class="row g-3">
										<div class="col-md-4">
											<input type="radio" name="occupation" onclick="javascript:occupationCheck();" id="student"  value="student"> <a style="font-size: small">Student</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="occupation" onclick="javascript:occupationCheck();" id="professional" value="professional"> <a style="font-size: small">Professional</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="occupation" onclick="javascript:occupationCheck();" id="others" value="others"> <a style="font-size: small">Others</a> 
										</div>
									</div> 
								</div>
							</div>
                            <br>

                            <div id="ifStudent" style="display:none">
                                <a style="font-size: small; font-weight: bold">Institute Name</a><br>
                                <input type="text" class="form-control" name="institute_name">
							    <br>
                            </div>
                            <div id="ifProfessional" style="display:none">
                                <a style="font-size: small; font-weight: bold">Name of the Organization</a><br>
                                <input type="text" class="form-control" name="org_name">
							    <br>
                            </div>
                            <div id="ifOthers" style="display:none">
                                <a style="font-size: small; font-weight: bold">Please Mention</a><br>
                                <input type="text" class="form-control" name="other_name">
							    <br>
                            </div>


                            <!-- Location -->
                            <a style="font-size: small ; font-weight: bold">Where do you want to attend the Alumni Iftar 2022?</a><br>
            
                            <div class="form-row">
								<div id="radio">
									<div class="row g-3">
										<div class="col-md-4">
											<input type="radio" name="location" onclick="javascript:locationCheck();" id="dhkCheck" value="dhaka"> <a style="font-size: small">Dhaka, BYLC HQ (28, Mohakhali C/A, Dhaka)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="location" onclick="javascript:locationCheck();" id="ctgCheck" value="chittagong"> <a style="font-size: small">Chattogram</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="location" onclick="javascript:locationCheck();" id="virtual" value="virtual"> <a style="font-size: small">Virtual</a> 
										</div>
									</div> 
								</div>
							</div>
                            <br>


                            <!-- IF DHAKA LOCATION -->
							<div id="ifDHK" style="display:none">
								<a style="font-size: large ; font-weight: bold">Payment Procedure</a><br>
                                <ul>
                                    <li style="font-size: 14px;">Click on the link mentioned below</li>
                                    <li style="font-size: 14px;">Make your payment through the secured online gateway</li>
                                    <li style="font-size: 14px;">Mention the BYLC program you attended in the reference field</li>
                                    <li style="font-size: 14px;">Check your email inbox for a payment confirmation email from PortWallet</li>
                                    <li style="font-size: 14px;">Collect the 16 digit invoice number and insert it in the required field</li>
                                </ul>

                                <a style="font-size: 14px">To make your payment </a><a style="font-size: 14px" href="http://bylc.portwallet.com/">Click here</a><br><br>
								
								<a style="font-size: small ; font-weight: bold">Total amount payable (DHK)</a><br>
								<input type="text" class="form-control" name="250" id="amount_payable" placeholder="BDT 250" readonly>
                                <br>			
								<a style="font-size: small ; font-weight: bold">Please insert the 16-character invoice number</a><br>
								<input type="text" class="form-control" name="invoice_number" id="invoice_number">
							<br>
							</div>
                            <!-- IF CTG LOCATION -->
							<div id="ifCTG" style="display:none">
								<a style="font-size: large ; font-weight: bold">Payment Procedure</a><br>
                                <ul>
                                    <li style="font-size: 14px;">Click on the link mentioned below</li>
                                    <li style="font-size: 14px;">Make your payment through the secured online gateway</li>
                                    <li style="font-size: 14px;">Mention the BYLC program you attended in the reference field</li>
                                    <li style="font-size: 14px;">Check your email inbox for a payment confirmation email from PortWallet</li>
                                    <li style="font-size: 14px;">Collect the 16 digit invoice number and insert it in the required field</li>
                                </ul>
								
                                <a style="font-size: 14px">To make your payment </a><a style="font-size: 14px" href="http://bylc.portwallet.com/">Click here</a><br><br>
								
								<a style="font-size: small ; font-weight: bold">Total amount payable (CTG)</a><br>
								<input type="text" class="form-control" name="250" id="amount_payable" placeholder="BDT 250" readonly>
                                <br>			
								<a style="font-size: small ; font-weight: bold">Please insert the 16-character invoice number</a><br>
								<input type="text" class="form-control" name="invoice_number" id="invoice_number">
							<br>
							</div>
	
							<br><br>
							<center><button type="button" class="btn btn-outline-success btn-lg">SUBMIT</button></center>
                            
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>

	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery.steps.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<!-- Hide and Display form fields based on necessity -->
    <script type="text/javascript">

        
        function occupationCheck(){
            if (document.getElementById('student').checked) {
                document.getElementById('ifStudent').style.display = 'block';
            }
            else{
                document.getElementById('ifStudent').style.display = 'none';
            }

            if (document.getElementById('professional').checked) {
                document.getElementById('ifProfessional').style.display = 'block';
            }
            else{
                document.getElementById('ifProfessional').style.display = 'none';
            }

            if (document.getElementById('others').checked) {
                document.getElementById('ifOthers').style.display = 'block';
            }
            else{
                document.getElementById('ifOthers').style.display = 'none';
            }
        }

        function locationCheck(){
            if (document.getElementById('dhkCheck').checked) {
                document.getElementById('ifDHK').style.display = 'block';
            }
            else{
                document.getElementById('ifDHK').style.display = 'none';
            }

            if (document.getElementById('ctgCheck').checked) {
                document.getElementById('ifCTG').style.display = 'block';
            }
            else{
                document.getElementById('ifCTG').style.display = 'none';
            }

        }




    </script>


</body>
</html>