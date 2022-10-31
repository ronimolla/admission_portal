<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Career Expo</title>
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
					<a style="font-size: 20px; font-weight:bold; font">Career Expo 2023 APPLICATION FORM</a>
				</div>
  
		      
				<form class="form-register" method="post" action="{{url('financialaid-form')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">

			            <!-------------------------------- PROGRAM INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
                            <center>
								<a style="font-size: larger; font-weight: bold; color:darkblue">Program Information</a><br>
							</center>
							<br><br>

                            <div class="container">
                                        <p>The global pandemic has changed the corporate landscape drastically, encouraging aspiring youth to move on from old conventional measures and practices to thrive in rapidly changing job markets. BYLC Career Expo 2022, an intervention of OPD, is a two-week-long professional development program for university students, fresh graduates, and young professionals aiming for a solid start to their career in the current job market.</p>
                                        <a style="font-weight: bold ; font-size: 16px">BYLC Career Expo 2022 at a glance:</a><br>
                                            <ul>
                                                <li style="font-size: 16px;">Two days of career camp with a refresher workshop on customizing resumes, effective job application, pre-employment skill assessment test and acing interviews</li>
                                                <li style="font-size: 16px;">Capacity-building workshops and plenaries</li>
                                                <li style="font-size: 16px;">Full resume vetting by industry experts</li>
                                                <li style="font-size: 16px;">Mock interviews with assessment reports</li>
                                                <li style="font-size: 16px;">Two days of job showcasing by 30+ employers</li>
                                                <li style="font-size: 16px;">Two days of interviews by employers who will do on-the-spot recruitment</li>
                                            </ul>
                                        <br>
                                        <a style="font-weight:bold ; font-size:16px">Program Duration: </a><a style=" font-size:16px">February 18, 2022 – March 5, 2022</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Application deadline: </a> <a style="font-size: 16px">Thursday, April 21, 2022</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Registration Fee: </a> <a style="font-size: 16px">BYLC Career Expo 2022 is given exclusive access for OPD graduates</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Registration Deadline: </a> <a style="font-size: 16px">Sunday, April 10, 2022. Please note that, due to the prevailing Covid-19 situation our seating capacity is limited, we will close registration once the first 200 (for Dhaka) and first 120 (for Chattogram) have registered, so we encourage early registration</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: 16px">Eligibility Criteria: </a> <a style="font-size: 16px">In order to get into BYLC Career Expo 2022, it is mandatory that the participants have completed CareerX or Bootcamp. If not, you need to complete any of the given online courses to get the entry ticket for BYLC Career Expo 2022</a> 
                                        <br><br>
                                        <table class="table table-bordered border-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                    <td style="font-size: 13px;">Business Communication Hacks</td>
                                                    <td style="font-size: 13px;" >https://x.bylc.org/slides/business-communication-hacks-97</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Freelancing Essentials</td>
                                                    <td style="font-size: 13px;" >https://x.bylc.org/slides/freelancing-essentials-the-step-by-step-guide-104</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Case solving - Part 1</td>
                                                    <td style="font-size: 13px;">https://x.bylc.org/slides/succeed-in-business-case-competitions-part-1-109</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Case solving - Part 2</td>
                                                    <td style="font-size: 13px;">https://x.bylc.org/slides/succeed-in-business-case-competitions-part-2-110</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Kick-start your Career</td>
                                                    <td style="font-size: 13px;">https://x.bylc.org/slides/kick-start-your-career-112</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Mindfulness for Leadership</td>
                                                    <td style="font-size: 13px;">https://x.bylc.org/slides/mindfulness-for-professionals-114</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Introduction to 21st Century Skills</td>
                                                    <td style="font-size: 13px;">https://x.bylc.org/slides/introduction-to-21st-century-skills-115</td>
                                                </tr>
                                              </tbody>
                                        </table>
                                        <br>
                                    
    
						    </div>


			                <center>
								<a style="font-size: larger; font-weight: bold">Personal Information</a><br>
							</center>
							<br><br>

							<a style="font-size: small ; font-weight: bold">Full Name </a><br>
                            <input type="text" class="form-control" id="name" name="full-name" required>

                            <a style="font-size: small ; font-weight: bold">Student ID</a><br>
                            <input type="text" class="form-control" id="student_id" name="student_id" required>

							<br>
							<!-- Mobile and Emergency Contact -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mobile Number</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="mobile" name="mobile-number">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Emergency Contact Number</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="emergency_contact" name="emergency-contact">
								</div>
							</div>
							<br>
							
							<div class="row g-3">
								<div class="col-md-6">
									<!-- Email -->
									<a style="font-size: small ; font-weight: bold">Email Address (ইমেইল)</a><br>
									<input type="email" class="form-control" id="email" name="email-address">
								</div>
								<div class="col-md-6">
									<!-- NID -->
									<a style="font-size: small ; font-weight: bold">NID</a><br>
									<input type="text" class="form-control" name="nid" id="nid" name="nid">
								</div>
							</div>
							<br><br>


							<br><br>
							<!-- Present Address -->
							<div class="subHeading" style="font-weight: bold ">Present Address (বর্তমান ঠিকানা)</div><br>

							<div class="row g-3">
								<!-- Apartment -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
									<input type="text" class="form-control" id="per_apartment" name="per_apartment">
								</div>	
								<!-- House -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
									<input type="text" class="form-control" id="per_house" name="per_house">
								</div>
								<!-- Road -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
									<input type="text" class="form-control" id="per_road" name="per_road">
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Thana -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
									<input type="text" class="form-control" id="per_thana" name="per_thana">
								</div>	
								<!-- District -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">District (জেলা)</a><br>
									<div class="input-group mb-3" class="dropdown-menu">
										<select class="form-select" id="per_district" name="per_district">
										  <option selected>Select District</option>
										  <option value="Bagerhat">Bagerhat (বাগেরহাট)</option>
										  <option value="Bandarban">Bandarban (বান্দরবান)</option>
										  <option value="Barguna">Barguna (বরগুনা)</option>
										  <option value="Barishal">Barishal (বরিশাল)</option>
										  <option value="Bhola">Bhola (ভোলা)</option>
										  <option value="Barishal">Bogura (বগুড়া)</option>
										  <option value="Bhola">Brahmanbaria (ব্রাহ্মণবাড়িয়া)</option>
										</select>
									</div>
								</div>
								<!-- Division -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Division (বিভাগ)</a>
									<div class="input-group mb-3">
										<select class="form-select" id="per_division" name="per_division">
										  <option selected>Select Division</option>
										  <option value="Chattagram">Chattagram (চট্টগ্রাম)</option>
										  <option value="Rajshahi">Rajshahi (রাজশাহী)</option>
										  <option value="Khulna">Khulna (খুলনা)</option>
										  <option value="Barisal">Barisal (বরিশাল)</option>
										  <option value="Sylhet">Sylhet (সিলেট)</option>
										  <option value="Dhaka">Dhaka (ঢাকা)</option>
										  <option value="Rangpur">Rangpur (রংপুর)</option>
										  <option value="Mymensingh">Mymensingh (ময়মনসিংহ)</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Post Code -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Post code (পোস্ট কোড)</a><br>
									<input type="text" class="form-control" id="per_pc" name="per_pc">
								</div>	
							</div>
							<br><br>
							

							<!-- Educational -->
							<center>
								<a style="font-size: medium ; color: darkblue ; font-weight: bold">Educational Information</a><br>
								<a style="font-size: x-small">Please provide your educational information carefully</a><br>
							</center>
							<br><br>

                            <!-- Medium -->
							<a style="font-size: small ; font-weight: bold">Medium (মাধ্যম)</a><br>
							<a style="font-size: smaller ; color: gray; ">Please select your education medium based on your SSC/Dakhil/O level exam (অনুগ্রহ করে আপনার এসএসসি/দাখিল/ও লেভেল পরীক্ষার উপর শিক্ষা মাধ্যম নির্বাচন করুন)</a><br>
							
							<div class="form-row">			
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="medium" value="Bengali Version" > <a style="font-size: small">Bengali Version</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Version"> <a style="font-size: small">English Version</a>
										</div>	
									</div>
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Medium" > <a style="font-size: small">English Medium</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="Madrassa"> <a style="font-size: small">Madrassa</a>
										</div>	
									</div>			
								</div>
							</div>
							<br>

                            <!-- Current Year of Study -->

                            
                            <a style="font-size: small ; font-weight: bold">Current Year of Study</a><br>	
                            <div class="form-row">			
                                <div id="radio">
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 1st year"> <a style="font-size: small">Undergraduate 1st year</a> 
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 1st year"> <a style="font-size: small">Undergraduate 2nd year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 3rd year"> <a style="font-size: small">Undergraduate 3rd year</a>
                                        </div>	
                                    </div>
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 4th year"> <a style="font-size: small">Undergraduate 4th year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Graduated"> <a style="font-size: small">Graduated</a>
                                        </div>	
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Master's 1st year"> <a style="font-size: small">Master's 1st year</a>
                                        </div>	
                                    </div>	
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Master's 2nd year"> <a style="font-size: small">Master's 2nd year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Diploma"> <a style="font-size: small">Diploma</a>
                                        </div>
                                    </div>			
                                </div>
                            </div>
                            <br>

							<!-- Institution Name -->
							<a style="font-size: small ; font-weight: bold">Name of Institution</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: University of Dhaka</a><br>
							<input type="text" class="form-control" name="institution" id="institution">
							<br>

                            <!-- Year of Graduation -->
							<a style="font-size: small ; font-weight: bold">Degree</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: B.Sc. in Computer Science and Engineering</a><br>
							<input type="text" class="form-control" name="degree" id="degree">
							<br>

                            <!-- CGPA -->
							<a style="font-size: small ; font-weight: bold">CGPA</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 3.48</a><br>
							<input type="text" class="form-control" id="cgpa" name="cgpa">
							<br>
                            
                            <!-- Year of Graduation -->
							<a style="font-size: small ; font-weight: bold">Expected/Year of Graduation</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 2022</a><br>
							<input type="text" class="form-control" name="graduation_year" id="graduation_year">
							<br>

							<!-- Marketing Questionaires -->
							<a style="font-size: small ; font-weight: bold">How did you learn about the CareerExpo?</a><br>
							<div class="form-row">
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Newspaper" > <a style="font-size: small">Newspaper</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Campus Ambassador"> <a style="font-size: small">Campus Ambassador</a>
										</div>	
                                        <div class="col-md-4">
											<input type="radio" name="marketing_question" value="Youtube"> <a style="font-size: small">Youtube</a>
										</div>	
									</div>					
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Website" > <a style="font-size: small">Website</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Workshop or presentation"> <a style="font-size: small">Workshop or presentation</a>
										</div>	
                                        <div class="col-md-4">
											<input type="radio" name="marketing_question" value="Instagram"> <a style="font-size: small">Instagram</a>
										</div>	
									</div>							
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Facebook" > <a style="font-size: small">Facebook page</a> 
										</div>
                                        <div class="col-md-4">
											<input type="radio" name="marketing_question" value="Campus Ambassador"> <a style="font-size: small">Campus Ambassador</a>
										</div>	
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Friends and family"> <a style="font-size: small">Friends and family</a>
										</div>	
									</div>			
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="University Club" > <a style="font-size: small">University Club</a>
										</div>
                                        <div class="col-md-4">
											<input type="radio" name="marketing_question" value="Linkedin"> <a style="font-size: small">Linkedin</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Email"> <a style="font-size: small">Email</a>
										</div>	
									</div>	
                                    <div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Promotional SMS" > <a style="font-size: small">Promotional SMS</a>
										</div>
                                        <div class="col-md-4">
											<input type="radio" name="marketing_question" value="Class Representative"> <a style="font-size: small">Class Representative</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="marketing_question" value="Others"> <a style="font-size: small">Others</a>
										</div>	
									</div>			
								</div>
							</div>
							<br><br>

                            
							<div class="row g-1">
								<div class="col-md-6">
                                    <a style="font-size: small ; font-weight: bold">Have you applied to any of BYLC's CareerX programs before?</a><br>
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="CareerX_program"  onclick="javascript:careerxProgram();" id="CareerX_program_yes"  value="Yes"> <a style="font-size: small">Yes</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="CareerX_program" onclick="javascript:careerxProgram();" id="CareerX_program_no" value="No"> <a style="font-size: small">No</a>
                                        </div>
                                    </div>
                                    <!-- If a CareerX program is done before -->
                                    <div id="ifCareerX" style="display:none">
                                        <a style="font-size: small ; font-weight: bold">Which CareerX program did you apply to before?</a><br>   
											<div class="input-group mb-3">
												<select class="form-select" id="CareerX" name="CareerX">
												<option selected>Please Select</option>
												<option value="CareerX 22">CareerX 22</option>
												<option value="CareerX 21">CareerX 21</option>
												<option value="CareerX 20">CareerX 20</option>
												<option value="CareerX 19">CareerX 19</option>
												<option value="CareerX 18">CareerX 18</option>
												<option value="CareerX 17">CareerX 17</option>
												<option value="CareerX 16">CareerX 16</option>
												</select>
											</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a style="font-size: small ; font-weight: bold">Have you participated in any of BYLC's Bootcamp program?</a><br>
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="BYLC_bootcamp"  onclick="javascript:bylcBootcamp();" id="BYLC_bootcamp_yes" value="Yes"> <a style="font-size: small">Yes</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="BYLC_bootcamp" onclick="javascript:bylcBootcamp();" id="BYLC_bootcamp_no" value="No"> <a style="font-size: small">No</a>
                                        </div>
                                    </div>
                                    <!-- If a BYLC program is done before -->
                                    <div id="ifBYLCprogram" style="display:none">
                                        <a style="font-size: small ; font-weight: bold">Which Bootcamp program did you apply to before?</a><br>   
											<div class="input-group mb-3">
												<select class="form-select" id="CareerX" name="bootcamp">
												<option selected>Please Select</option>
												<option value="Career Bootcamp 2020">Career Bootcamp 2020</option>
												<option value="ICT Career Bootcamp 2021">ICT Career Bootcamp 2021</option>
												<option value="Sales Career Bootcamp 2021">Sales Career Bootcamp 2021</option>
												</select>
											</div>
                                    </div>    
                                </div>
								
                            </div>
                            <br><br>
	
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