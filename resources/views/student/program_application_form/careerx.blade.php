<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CareerX Form</title>
	<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


	<style>
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
	<div class="page-content" style="background: darkblue">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="{{asset('images/bylc-logo.png')}}" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold ">CareerX Application Form</div>
				</div>
		      
				<form class="form-register" method="post" action="{{url('/student/careerx/store')}}"  novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">

		        		<!-------------------------------- GUIDELINES ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
						<input type="hidden" class="form-control" id="program_name"  name="program_name" value="CareerX" >
						<input type="hidden" class="form-control" id="program_name"  name="program_batch_id" value="{{$batchinfo->batch_id}}" >
			            <section>
							<div class="container">
										<div class="sentence" style="font-weight: bold ">About CareerX: </div>
										<div class="sentence">CareerX is an extensive month-long professional development program designed to help graduates and young professionals get the best start possible with their professional lives. The program covers essential topics pertinent for the modern workplace, including communication, management, operations, intrapreneurship, and more. Video-based online modules are supplemented with instructor-led, in-person, and virtual sessions, as well as weekly capstone projects to ensure a truly meaningful learning experience.</div>
										<br>
                                        <div class="sentence" style="font-weight: bold ">CareerX classes include: </div>
                                          <ul>
                                            <li style="font-size: 13px;">session with industry experts </li>
                                            <li style="font-size: 13px;">small group facilitation</li>
                                            <li style="font-size: 13px;">peer-to-peer learning</li>
                                            <li style="font-size: 13px;">preparation for placement </li>
                                            <li style="font-size: 13px;">job placement with reputed national organizations</li>
                                          </ul>
										<div class="sentence" style="font-weight: bold ">Eligibility Criteria: </div>
                                        <ul>
                                            <li style="font-size: 13px;">3rd and 4th year undergraduate students</li>
                                            <li style="font-size: 13px;">Postgraduate students</li>
                                            <li style="font-size: 13px;">University graduates looking for job opportunities</li>
                                        </ul>
                                        <a style="font-weight: bold ; font-size: small">Program Duration: </a> <a style="font-size: small">October 10–November 04, 2022</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Class Schedule: </a> <a style="font-size: small">Instructor-led virtual and physical classes will be held on the following dates-</a><br>
                                        <table class="table table-bordered border-primary">
                                            <thead>
                                                <tr>
                                                    <th colspan="6" scope="col">CareerX 22</th>
                                                </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                    <th style="font-size: 13px;">No. of class</th>
                                                    <th style="font-size: 13px;">Day</th>
                                                    <th style="font-size: 13px;">Date</th>
                                                    <th style="font-size: 13px;">Platform</th>
                                                    <th style="font-size: 13px;">Class time</th>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Class 1</td>
                                                    <td style="font-size: 13px;">Monday</td>
                                                    <td style="font-size: 13px;">October 10, 2022</td>
                                                    <td style="font-size: 13px;">Online</td>
                                                    <td style="font-size: 13px;">6:00 PM - 08:30 PM</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 13px;">Class 2</td>
                                                    <td style="font-size: 13px;">Wednesday</td>
                                                    <td style="font-size: 13px;">October 12, 2022</td>
                                                    <td style="font-size: 13px;">Online</td>
                                                    <td style="font-size: 13px;">6:00 PM - 08:30 PM</td>
                                                </tr>
                                              </tbody>
                                        </table>

                                        <br>
                                        <a style="font-weight: bold ; font-size: small">Registration fees: </a> <a style="font-size: small">The registration fee is BDT 1,000</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Admission procedure: </a> <a style="font-size: small">All interested applicants must complete the application form. After the initial screening of the application forms (round 1), a phone interview (round 2) will be held. Please take your time and carefully fill out the following application in English.</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Application deadline: </a> <a style="font-size: small">Sunday, September 3, 2022</a> 
                                        <br><br>    
						    </div>
			            </section>

			            <!-------------------------------- PERSONAL INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
			                <center>
								<a style="font-size: medium ; color: darkblue; font-weight: bold">Personal Information</a><br>
								<a style="font-size: medium ; color: darkblue; font-weight: bold">(ব্যক্তিগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your personal information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্যক্তিগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>
							<a style="font-size: small ; font-weight: bold">Full Name (পূর্ণ নাম)</a><br>
							<a style="font-size: smaller ; color: gray; ">As per passport or national ID or academic certificate (পাসপোর্ট বা জাতীয় পরিচয়পত্র বা একাডেমিক সার্টিফিকেট অনুযায়ী) (ex. Zuhair Bin Zabbar)</a><br>
							<input type="text" class="form-control" id="name"  name="full-name" value ="{{old('full-name', $student->full_name)}}" readonly>
							<span style ="color: red">@error('full-name'){{$message}}@enderror </span>
							<br>
							<!-- Gender -->
							<a style="font-size: small ; font-weight: bold">Gender (লিঙ্গ)</a><br>
							<div class="form-row">
								<div id="radio">
									<div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="male" {{ old("gender") == 'male' ||  $student->gender =='male'? 'checked' : 'disabled' }}> <a style="font-size: small">Male (পুরুষ)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="female" {{ old("gender") == 'female' ||  $student->gender =='female'? 'checked' : 'disabled' }}> <a style="font-size: small">Female (নারী)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="other" {{ old("gender") == 'other' ||  $student->gender =='other' ? 'checked' : 'disabled' }}> <a style="font-size: small">Other (অন্যান্য)</a>
                                        </div>
                                    </div>
								</div>
							</div>
							<br>

							<!-- Date and Nationality -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Date of Birth (জন্ম তারিখ)</a><br>
									<!-- DatePicker -->
									<div class="input-group date" id="datepicker">
										<input type="date" class="form-control" id="datetime" name="date-of-birth" value ="{{old('date-of-birth', $student->dob)}}" readonly/>	
									</div>
						        </div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Nationality (জাতীয়তা)</a><br>
									<input type="text" class="form-control" id="nationality" name="nationality" value ="{{old('nationality', $student->nationality)}}" readonly>
								</div>
							</div>
							<br>
							<!-- Father and Mother Name -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Father Name (বাবার নাম)</a><br>
									<input type="text" class="form-control" id="father_name" name="father_name" value ="{{old('father_name', $student->father_name)}}" readonly>
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mother Name (মায়ের নাম)</a><br>
									<input type="text" class="form-control" id="mother_name" name="mother-name" value ="{{old('mother-name', $student->mother_name)}}" readonly>
								</div>
							</div>


							<br>
							<!-- Mobile and Emergency Contact -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mobile Number (মোবাইল নম্বর)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="mobile" name="mobile-number" value ="{{old('mobile-number', $student->personal_phone_no)}}">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Emergency Contact Number (জরুরী প্রয়োজনে)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="emergency_contact" name="emergency-contact" value ="{{old('emergency-contact', $student->emergency_contact_no)}}">
								</div>
							</div>

							<br>
							
							<!-- Email -->
							<div class="row g-3">
								<div class="col-md-6">
									<!-- Email -->
									<a style="font-size: small ; font-weight: bold">Email Address (ইমেইল)</a><br>
									<input type="email" class="form-control" id="email"  name="email-address" value ="{{old('email-address', $student->email_address)}}" readonly>
									<span style ="color: red">@error('email-address'){{$message}}@enderror </span>
								</div>
								<div class="col-md-6">
									<!-- NID -->
									<a style="font-size: small ; font-weight: bold">NID/Bith Certificate/Paport No</a><br>
									<input type="text" class="form-control" name="nid" id="nid" name="nid" value ="{{old('nid',$student->student_id)}}" readonly>
									<span style ="color: red">@error('nid'){{$message}}@enderror </span>
								</div>
							</div>
							<br><br>
							

							<!-- Ethnicity and Disability -->
							<a style="font-size: small ; font-weight: bold">Do you belong to any ethnic community, i.e.Chakma, Marma, etc? (আপনি কি কোন ক্ষুদ্র নৃগোষ্ঠীর অন্তর্ভুক্ত, যেমন চাকমা, মারমা ইত্যাদি?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="ethnicCheck" value="yes"  {{ old("ethnicity") == 'yes' || $student->ethnicity == 'yes'? 'checked' : 'disabled' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="not_ethnicCheck" value="no"  {{ old("ethnicity") == 'no' || $student->ethnicity =='no'? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="ethnic" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
                                    <input type="text" class="form-control" id="ethnicity_name" name="ethnicity_name" value ="{{old('ethnicity_name',$student->ethnicity)}}">
                                </div>
							</div><br>
							<a style="font-size: small ; font-weight: bold">Do you have any disability, i.e., visual or hearing disabilities, physical disability, etc.? (আপনার কি কোন প্রতিবন্ধিতা রয়েছে, যেমনঃ দৃষ্টি, শ্রবণ, শারীরিক প্রতিবন্ধিতা বা অন্যান্য?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="disableCheck" value="yes" {{ old("disability") == 'yes' || $student->disability == 'yes' ? 'checked' : 'disabled' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="not_disableCheck" value="no" {{ old("disability") == 'no' || $student->disability =='no' ? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="disable" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
                                    <input type="text" class="form-control" id="disability_name" name="disability_name" value ="{{old('disability_name',$student->disability)}}">
                                </div>
							</div>

							<br><br>
							<!-- Present Address -->
							<div class="subHeading" style="font-weight: bold ">Present Address (বর্তমান ঠিকানা)</div><br>

							<div class="row g-3">
								<!-- Apartment -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
									<input type="text" class="form-control" id="per_apartment" name="per_apartment" value ="{{old('per_apartment',$student->present_apartment_no)}}">
								</div>	
								<!-- House -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
									<input type="text" class="form-control" id="per_house" name="per_house" value ="{{old('per_house',$student->present_house_no)}}">
								</div>
								<!-- Road -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
									<input type="text" class="form-control" id="per_road" name="per_road" value ="{{old('per_road',$student->present_road_no_OR_village)}}">
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Thana -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
									<input type="text" class="form-control" id="per_thana" name="per_thana" value ="{{old('per_thana',$student->present_thana_OR_upazala)}}">
								</div>	
								<!-- District -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">District (জেলা)</a><br>
									<div class="input-group mb-3" class="dropdown-menu">
										<select class="form-select" id="per_district" name="per_district" >
										  <option selected>Select District</option>
										  @foreach($district as $dis)
												<option value="{{ $dis->name }}" {{ old("per_district") ==  $dis->name || $student->present_district ? 'selected' : '' }}>{{ $dis->name }}</option>
											@endforeach	
										  
										</select>
									</div>
								</div>
								<!-- Division -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Division (বিভাগ)</a>
									<div class="input-group mb-3">
										<select class="form-select" id="per_division" name="per_division">
										  <option selected>Select Division</option>
										  @foreach($division as $div)
												<option value="{{ $div->name }}"{{ old("per_division") ==  $div->name || $student->present_division  ? 'selected' : '' }}>{{ $div->name }}</option>
											@endforeach	
										</select>
									</div>
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Post Code -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Post code (পোস্ট কোড)</a><br>
									<input type="text" class="form-control" id="per_pc" name="per_pc" value ="{{old('per_pc',$student->present_post_code)}}">
								</div>	
							</div>


							<br><br>
							<!-- Permanent Address -->
							<a style="font-size: small ; font-weight: bold">Is your permanent address similar to the present address? (আপনার স্থায়ী ঠিকানা ও বর্তমান ঠিকানা কি একই?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="yesCheck" value="yes" {{ old("same_address") == 'yes' || $student->present_similar_to_permanent == 'yes' ? 'checked' : 'disabled' }}> <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="noCheck" value="no" {{ old("same_address") == 'no' || $student->present_similar_to_permanent == 'no'? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<span style ="color: red">@error('same_address'){{$message}}@enderror </span>
							</div>

                            <div id="ifYes" style="display:none">
								<br>
									<div class="subHeading" style="font-weight: bold ">Permanent Address (স্থায়ী ঠিকানা)</div><br>
								
									<div class="row g-3">
										<!-- Apartment -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
											<input type="text" class="form-control" id="apartment" name="apartment" value ="{{old('apartment',$student->permanent_apartment_no)}}">
										</div>	
										<!-- House -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
											<input type="text" class="form-control" id="house" name="house" value ="{{old('house',$student->permanent_house_no)}}">
										</div>
										<!-- Road -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
											<input type="text" class="form-control" id="road" name="road" value ="{{old('road',$student->permanent_road_no_OR_village)}}">
										</div>
									</div>
									
									<div class="row g-3">
										<!-- Thana -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
											<input type="text" class="form-control" id="thana" name="thana" value ="{{old('thana',$student->permanent_thana_OR_upazala)}}">
										</div>	
										<!-- District -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">District (জেলা)</a><br>
											<div class="input-group mb-3">
												<select class="form-select" id="district" name="district">
												<option selected>Select District</option>
												 @foreach($district as $dis)
													<option value="{{ $dis->name }}" {{ old("district") ==  $dis->name || $student->permanent_district ? 'selected' : '' }}>{{ $dis->name }}</option>
												@endforeach	
												</select>
											</div>
										</div>
										<!-- Division -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">Division (বিভাগ)</a>
											<div class="input-group mb-3">
												<select class="form-select" id="division" name="division">
												<option selected>Select Division</option>
												@foreach($division as $div)
													<option value="{{ $div->name }}" {{ old("division") ==  $div->name || $student->permanent_division ? 'selected' : '' }}>{{ $div->name }}</option>
												@endforeach	
												</select>
											</div>
										</div>
									</div>
									
									<div class="row g-3">
										<!-- Post Code -->
										<div class="col-md-4">
											<a style="font-size: small ; font-weight: bold">Post code (পোস্ট কোড)</a><br>
											<input type="text" class="form-control" id="pc" name="pc" value ="{{old('pc',$student->permanent_post_code)}}">
										</div>	
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
											<input type="radio" name="medium" value="Bengali Version" {{ old("medium") == 'Bengali Version' ? 'checked' : '' }}> <a style="font-size: small">Bengali Version (বাংলা ভার্সন)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Version" {{ old("medium") == 'English Version' ? 'checked' : '' }}> <a style="font-size: small">English Version (ইংরেজী ভার্সন)</a>
										</div>	
									</div>
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Medium" {{ old("medium") == 'English Medium' ? 'checked' : '' }}> <a style="font-size: small">English Medium (ইংরেজী মাধ্যম)</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="Madrassa" {{ old("medium") == 'Madrassa' ? 'checked' : '' }}> <a style="font-size: small">Madrassa (মাদ্রাসা)</a>
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
                                            <input type="radio" name="study_year" value="Undergraduate 1st year" {{ old("study_year") == 'Undergraduate 1st year' ? 'checked' : '' }}> <a style="font-size: small">Undergraduate 1st year</a> 
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 1st year" {{ old("study_year") == 'Undergraduate 1st year' ? 'checked' : '' }}> <a style="font-size: small">Undergraduate 2nd year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 3rd year" {{ old("study_year") == 'Undergraduate 3rd year' ? 'checked' : '' }}> <a style="font-size: small">Undergraduate 3rd year</a>
                                        </div>	
                                    </div>
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Undergraduate 4th year"{{ old("study_year") == 'Undergraduate 4th year' ? 'checked' : '' }} > <a style="font-size: small">Undergraduate 4th year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Graduated" {{ old("study_year") == 'Graduated' ? 'checked' : '' }}> <a style="font-size: small">Graduated</a>
                                        </div>	
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Master's 1st year" {{ old("study_year") == 'Masters 1st year' ? 'checked' : '' }}> <a style="font-size: small">Master's 1st year</a>
                                        </div>	
                                    </div>	
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Master's 2nd year" {{ old("study_year") == 'Masters 2nd year' ? 'checked' : '' }}> <a style="font-size: small">Master's 2nd year</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="study_year" value="Diploma" {{ old("study_year") == 'Diploma' ? 'checked' : '' }}> <a style="font-size: small">Diploma</a>
                                        </div>
                                    </div>			
                                </div>
                            </div>
                            <br>

							<!-- Institution Name -->
							<a style="font-size: small ; font-weight: bold">Name of Institution</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: University of Dhaka</a><br>
							<input type="text" class="form-control" name="institution" id="institution" value ="{{old('institution')}}">
							<br>

                            <!-- Year of Graduation -->
							<a style="font-size: small ; font-weight: bold">Degree</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: B.Sc. in Computer Science and Engineering</a><br>
							<input type="text" class="form-control" name="degree" id="degree" value ="{{old('degree')}}">
							<br>

                            <!-- CGPA -->
							<a style="font-size: small ; font-weight: bold">CGPA</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 3.48</a><br>
							<input type="text" class="form-control" id="cgpa" name="cgpa" value ="{{old('cgpa')}}">
							<br>
                            
                            <!-- Year of Graduation -->
							<a style="font-size: small ; font-weight: bold">Expected/Year of Graduation</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 2022</a><br>
							<input type="text" class="form-control" name="graduation_year" id="graduation_year" value ="{{old('graduation_year')}}">
							<br>

							<!-- Marketing Questionaires -->
							<a style="font-size: small ; font-weight: bold">How did you learn about the CareerX program?</a><br>
							<div class="form-row">
							<div id="radio">
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="marketing_question" value="Newspaper" {{ old("marketing_question") == 'Newspaper' ? 'checked' : '' }}> <a style="font-size: small">Newspaper (পত্রিকা)</a> 
										</div>
										<div class="col-md-6">
											<input type="radio" name="marketing_question" value="Campus Ambassador" {{ old("marketing_question") == 'Campus Ambassador' ? 'checked' : '' }}> <a style="font-size: small">Campus Ambassador (ক্যাম্পাস প্রতিনিধি)</a>
										</div>	
									</div>
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="marketing_question" value="Website" {{ old("marketing_question") == 'Website' ? 'checked' : '' }}> <a style="font-size: small">Website (ওয়েবসাইট)</a>
										</div>
										<div class="col-md-6">
											<input type="radio" name="marketing_question" value="Workshop or presentation" {{ old("marketing_question") == 'Workshop or presentation' ? 'checked' : '' }}> <a style="font-size: small">Workshop or presentation (কর্মশালা বা উপস্থাপনা)</a>
										</div>	
									</div>	
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="marketing_question" value="Facebook" {{ old("marketing_question") == 'Facebook' ? 'checked' : '' }}> <a style="font-size: small">Facebook page (ফেইসবুক)</a> 
										</div>
										<div class="col-md-6">
											<input type="radio" name="marketing_question" value="Friends and family" {{ old("marketing_question") == 'Friends and family' ? 'checked' : '' }}> <a style="font-size: small">Friends and family (বন্ধু এবং পরিবার)</a>
										</div>	
									</div>
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="marketing_question" value="Youtube" {{ old("marketing_question") == 'Youtube' ? 'checked' : '' }}> <a style="font-size: small">Youtube channel (ইউটিউব চ্যানেল)</a>
										</div>
										<div class="col-md-6">
											<input type="radio" name="marketing_question" value="Others" {{ old("marketing_question") == 'Others' ? 'checked' : '' }}> <a style="font-size: small">Others (অন্যান্য)</a>
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
                                            <input type="radio" name="CareerX_program"  onclick="javascript:careerxProgram();" id="CareerX_program_yes"  value="Yes" {{ old("CareerX_program") == 'Yes' ? 'checked' : '' }}> <a style="font-size: small">Yes</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="CareerX_program" onclick="javascript:careerxProgram();" id="CareerX_program_no" value="No" {{ old("CareerX_program") == 'No' ? 'checked' : '' }}> <a style="font-size: small">No</a>
                                        </div>
                                    </div>
                                    <!-- If a CareerX program is done before -->
                                    <div id="ifCareerX" style="display:none">
                                        <a style="font-size: small ; font-weight: bold">Which CareerX program did you apply to before?</a><br>   
											<div class="input-group mb-3">
												<select class="form-select" id="CareerX" name="CareerX">
												<option selected>Please Select</option>
												<option value="CareerX 22" {{ old("CareerX") == 'CareerX 22' ? 'selected' : '' }}>CareerX 22</option>
												<option value="CareerX 21" {{ old("CareerX") == 'CareerX 21' ? 'selected' : '' }}>CareerX 21</option>
												<option value="CareerX 20" {{ old("CareerX") == 'CareerX 20' ? 'selected' : '' }}>CareerX 20</option>
												<option value="CareerX 19" {{ old("CareerX") == 'CareerX 19' ? 'selected' : '' }}>CareerX 19</option>
												<option value="CareerX 18" {{ old("CareerX") == 'CareerX 18' ? 'selected' : '' }}>CareerX 18</option>
												<option value="CareerX 17" {{ old("CareerX") == 'CareerX 17' ? 'selected' : '' }}>CareerX 17</option>
												<option value="CareerX 16" {{ old("CareerX") == 'CareerX 16' ? 'selected' : '' }}>CareerX 16</option>
												</select>
											</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a style="font-size: small ; font-weight: bold">Have you participated in any of BYLC's Bootcamp program?</a><br>
                                    <div class="row g-1">
                                        <div class="col-md-4">
                                            <input type="radio" name="BYLC_bootcamp"  onclick="javascript:bylcBootcamp();" id="BYLC_bootcamp_yes" value="Yes" {{ old("BYLC_bootcamp") == 'Yes' ? 'checked' : '' }}> <a style="font-size: small">Yes</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="BYLC_bootcamp" onclick="javascript:bylcBootcamp();" id="BYLC_bootcamp_no" value="No" {{ old("BYLC_bootcamp") == 'No' ? 'checked' : '' }}> <a style="font-size: small">No</a>
                                        </div>
                                    </div>
                                    <!-- If a BYLC program is done before -->
                                    <div id="ifBYLCprogram" style="display:none">
                                        <a style="font-size: small ; font-weight: bold">Which Bootcamp program did you apply to before?</a><br>   
											<div class="input-group mb-3">
												<select class="form-select" id="CareerX" name="bootcamp">
												<option selected>Please Select</option>
												<option value="Career Bootcamp 2020" {{ old("bootcamp") == 'Career Bootcamp 2020' ? 'selected' : '' }}>Career Bootcamp 2020</option>
												<option value="ICT Career Bootcamp 2021" {{ old("bootcamp") == 'ICT Career Bootcamp 2021' ? 'selected' : '' }}>ICT Career Bootcamp 2021</option>
												<option value="Sales Career Bootcamp 2021" {{ old("bootcamp") == 'Sales Career Bootcamp 2021' ? 'selected' : '' }}>Sales Career Bootcamp 2021</option>
												</select>
											</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <br><br>

							<!-- Analytical -->
							<center>
								<a style="font-size: medium ; color: darkblue ; font-weight: bold">Analytical Questions</a><br>		
                            </center>
							<br>

							<a style="font-size: smaller; font-weight: bold;">Read the below passage carefully and answer the questions:</a><br>
							<p style="font-size: smaller">At a small company, parking spaces are reserved for the top executives: CEO, President, Vice President, Secretary, and Treasurer with the spaces lined up in that order. The parking lot guard can tell at a glance if the cars are parked correctly by looking at the color of the cars. The cars are yellow, green, purple, red, and blue, and the executives' names are Alice, Bert, Cheryl, David, and Enid.</p>

							<ul style="font-size: smaller">
								<li>The car in the first space is red.</li>
								<li>A blue car is parked between the red car and the green car.</li>
								<li>The car in the last space is purple.</li>
								<li>The secretary drives a yellow car.</li>
								<li>Alice's car is parked next to David's.</li>
								<li>Enid drives a green car.</li>
								<li>Bert's car is parked between Cheryl's and Enid's.</li>
								<li>David's car is parked in the last space.</li>
							</ul>

							<a style="font-size: smaller;">Q1. Who is the secretary?</a><br>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq1"  value="Enid" {{ old("mcq1") == 'Enid' ? 'checked' : '' }}> <a style="font-size: small">A. Enid</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq1"  value="Cheryl" {{ old("mcq1") == 'Cheryl' ? 'checked' : '' }}> <a style="font-size: small">B. Cheryl</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq1"  value="Alice" {{ old("mcq1") == 'Alice' ? 'checked' : '' }}> <a style="font-size: small">C. Alice</a>
								</div>
							</div>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq1"  value="David" {{ old("mcq1") == 'David' ? 'checked' : '' }}> <a style="font-size: small">D. David</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq1"  value="Bert" {{ old("mcq1") == 'Bert' ? 'checked' : '' }}> <a style="font-size: small">E. Bert</a>
								</div>
							</div>
							<br>

							<a style="font-size: smaller;">Q2.  Who is the CEO?</a><br>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq2"  value="Enid" {{ old("mcq2") == 'Enid' ? 'checked' : '' }}> <a style="font-size: small">A. Enid</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq2"  value="Cheryl" {{ old("mcq2") == 'Cheryl' ? 'checked' : '' }}> <a style="font-size: small">B. Cheryl</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq2"  value="Alice" {{ old("mcq2") == 'Alice' ? 'checked' : '' }}> <a style="font-size: small">C. Alice</a>
								</div>
							</div>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq2"  value="David" {{ old("mcq2") == 'David' ? 'checked' : '' }}> <a style="font-size: small">D. David</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq2"  value="CareerX_program_yes" {{ old("mcq2") == 'CareerX_program_yes' ? 'checked' : '' }}> <a style="font-size: small">E. Bert</a>
								</div>
							</div>
							<br>


							<a style="font-size: smaller;">Q3. What color is the vice president's car?</a><br><br>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq3"  value="green" {{ old("mcq3") == 'green' ? 'checked' : '' }}> <a style="font-size: small">A. green</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq3"  value="blue" {{ old("mcq3") == 'blue' ? 'checked' : '' }}> <a style="font-size: small">B. blue</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq3"  value="red" {{ old("mcq3") == 'red' ? 'checked' : '' }}> <a style="font-size: small">C. red</a>
								</div>
							</div>
							<div class="row g-1">
								<div class="col-md-4">
									<input type="radio" name="mcq3"  value="David" {{ old("mcq3") == 'David' ? 'checked' : '' }}> <a style="font-size: small">D. David</a>
								</div>
								<div class="col-md-4">
									<input type="radio" name="mcq3"  value="Bert" {{ old("mcq3") == 'Bert' ? 'checked' : '' }}> <a style="font-size: small">E. Bert</a>
								</div>
							</div>
							<br><br>

							<!-- Analytical -->
							<center>
								<a style="font-size: medium ; color: darkblue ; font-weight: bold">Short Essay</a><br>		
                            </center>
							<br>

						
                            <a style="font-size: small ; font-weight: bold">Write a short bio. Use this opportunity to introduce yourself.</a><br>
							<a style="font-size: x-small ; color: gray; ">
                                <ul>
                                    <li>Include your full name initial</li>
                                    <li>Include the name of your institution/organization</li>
                                    <li>Include your grade level</li>
                                    <li>Tell about your extracurricular activities  (If you were involved with many activities/projects and received many honors/awards, please mention top 3-4 since this is a short bio)</li>
                                </ul>
                            </a>
                            <a style="font-size: small ; color: gray; ">Maximum 200 words</a>
							<br>
							<div class="form-floating">
								<textarea class="form-control" rows="8" style="height:100%;" placeholder="Leave a comment here" id="answer" name="bio"> {{ old('bio') }}</textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div>

							<br><br>
							<center><button type="submit" class="btn btn-primary">Apply</button></center>

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

        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.display = 'none';
            } 
            else {
                document.getElementById('ifYes').style.display = 'block';
            }
        }

        function ethnicityCheck(){
            if (document.getElementById('ethnicCheck').checked) {
                document.getElementById('ethnic').style.display = 'block';
            }
            else{
                document.getElementById('ethnic').style.display = 'none';
            }
        }

        function disabilityCheck(){
            if (document.getElementById('disableCheck').checked) {
                document.getElementById('disable').style.display = 'block';
            }
            else{
                document.getElementById('disable').style.display = 'none';
            }
        }

        function careerxProgram(){
            if (document.getElementById('CareerX_program_yes').checked) {
                document.getElementById('ifCareerX').style.display = 'block';
            }
            else{
                document.getElementById('ifCareerX').style.display = 'none';
            }
        }

        function bylcBootcamp(){
            if (document.getElementById('BYLC_bootcamp_yes').checked) {
                document.getElementById('ifBYLCprogram').style.display = 'block';
            }
            else{
                document.getElementById('ifBYLCprogram').style.display = 'none';
            }
        }

    </script>


</body>
</html>