<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BBLTJ Form</title>
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
	<div class="page-content" style="background:green">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="{{asset('images/bylc-logo.png')}}" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold ">Building Bridges through Leadership Training Junior (BBLTJ) Application Form</div>
					<div class="subHeading" >বিল্ডিং ব্রিজেস থ্রু লিডারশিপ ট্রেনিং জুনিয়র (বিবিএলটিজে) আবেদনপত্র </div>
				</div>
		      
				<form class="form-register"  method="post" action="{{url('student/bbltj/store')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">
					<input type="hidden" class="form-control" id="program_name"  name="program_name" value="BBLTJ" >
					<input type="hidden" class="form-control" id="program_name"  name="program_batch_id" value="{{$batchinfo->batch_id}}">
		        		<!-------------------------------- GUIDELINES ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="sentence" style="font-weight: bold ">Important Information about Building Bridges through Leadership Training Junior (BBLTJ) Program:</div>
										<br>
										<div class="sentence">Building Bridges through Leadership Training Junior (BBLTJ) is a month-long program designed for secondary school students in grades 6 to 10. The program, adapted to suit the learning needs of students aged between 12 and 16, focuses on sensitizing a younger audience to the values of leadership, teamwork, community service, and active citizenship.</div>
										<br>
										<div class="sentence" style="font-weight: bold ">By participating in the BBLTJ program, through online classes the participants will gain the following skills:</div>
										<br>
										<a style="font-size: small">1. Public speaking</a><br> <a style="font-size: small">2. Active citizenship</a><br> <a style="font-size: small">3. Teamwork</a><br> <a style="font-size: small">4. Patience and compassion</a><br> <a style="font-size: small">5. Problem-solving</a><br> <a style="font-size: small">6. Professional skills development</a><br> <a style="font-size: small">7. Social service</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">Eligibility Criteria for Applying to the BBLTJ Program:</div>
										<br>
										<a style="font-size: small">1. Students studying in grades 6 to 10, aged between 12 to 16</a><br> <a style="font-size: small">2. Can commit attendance from 3:30 pm to 6:00 pm, five days a week</a><br> <a style="font-size: small">3. Participants must be able to attend the online classes during the training</a><br> <a style="font-size: small">4. Willing to work on implementing online social projects for three weeks as part of the program</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">Application Process and Admission Rules:</div>
										<br>
										<div class="sentence">All interested applicants must complete the application form. After the initial screening of the application forms (round one), the shortlisted applicants will be invited for an online written test and interview (round two). Final selected applicants will have the opportunity to register in the program. However, at any time, BYLC reserves the right to change or amend the admission rules, program fees, curriculum, rules of conduct and any information or content referred to through the website or social media.</div>
										<br>
									</div>
									<div class="col-md-6">
										<div class="sentence" style="font-weight: bold ">বিল্ডিং ব্রিজেস থ্রু লিডারশিপ ট্রেনিং জুনিয়র (বিবিএলটিজে) প্রোগ্রাম সম্পর্কে কিছু  গুরুত্বপূর্ণ তথ্য:</div>
									    <br>
										<div class="sentence">বিল্ডিং ব্রিজেস থ্রু লিডারশিপ ট্রেনিং জুনিয়র (বিবিএলটিজে) একটি মাসব্যাপী প্রোগ্রাম যা ৬ষ্ঠ থেকে ১০ম শ্রেণির শিক্ষার্থীদের জন্য ডিজাইন করা হয়েছে। ১২ থেকে ১৬ বছর বয়সের শিক্ষার্থীদের শেখার প্রয়োজনীয়তার সাথে সামঞ্জস্যপূর্ণ এই প্রোগ্রামটি নেতৃত্ব, দলগত কাজ, কমিউনিটি পরিষেবা এবং সক্রিয় নাগরিকত্বের মূল্যবোধের প্রতি একজন অল্প বয়স্ক শিক্ষার্থীকে সংবেদনশীল করার উপর গুরুত্ব দেয়।</div>
										<br>
										<div class="sentence" style="font-weight: bold ">বিবিএলটিজে প্রশিক্ষণ প্রোগ্রামে অংশগ্রহণকারী শিক্ষার্থীরা অনলাইন ক্লাসের মাধ্যমে যেসব গুরুত্বপূর্ণ বিষয়ে প্রশিক্ষণ পাবে, তা হলো:</div>
										<br>
										<a style="font-size: small">১. পাবলিক স্পিকিং তথা উপস্থিত বক্তৃতা</a><br> <a style="font-size: small">২. সক্রিয় নাগরিকত্ব</a><br> <a style="font-size: small">৩. দলগত কাজ</a><br> <a style="font-size: small">৪. ধৈর্য ও সহনশীলতা</a><br> <a style="font-size: small">৫. সমস্যা সমাধান পদ্ধতি</a><br> <a style="font-size: small">৬. পেশাগত দক্ষতা উন্নয়ন</a><br> <a style="font-size: small">৭. সোশ্যাল সার্ভিস</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">বিবিএলটিজে প্রোগ্রামে আবেদনের যোগ্যতা:</div>
										<br>
										<a style="font-size: small">১. স্বীকৃতিপ্রাপ্ত শিক্ষা প্রতিষ্ঠান সমূহের ষষ্ঠ থেকে দশম শ্রেণীর শিক্ষার্থী, বয়স সীমা ১২ থেকে ১৬ বছর</a><br> <a style="font-size: small">২. সপ্তাহে ৫ দিন, দুপুর ৩:৩০ টা থেকে বিকাল ৬:০০ টা পর্যন্ত ক্লাসে উপস্থিত থাকতে হবে</a><br> <a style="font-size: small">৩. প্রশিক্ষণ কালীন সময়ে অংশগ্রহণকারীকে অনলাইন ক্লাস করার সক্ষমতা থাকতে হবে</a><br> <a style="font-size: small">৪. প্রোগ্রামের অংশ হিসেবে ১ সপ্তাহের জন্য অনলাইনে সমাজসেবামূলক প্রকল্প বাস্তবায়নে কাজ করতে ইচ্ছুক</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">আবেদন প্রক্রিয়া এবং ভর্তির নিয়মাবলী :</div>
										<br>
										<div class="sentence">আগ্রহী সকলকে এই আবেদনপত্রটি পূরণ করার মাধ্যমে আবেদন সম্পন্ন করতে হবে। আবেদনপত্র প্রাথমিকভাবে বাছাইয়ের (প্রথম রাউন্ড) পর বাছাইকৃত আবেদনকারীদেরকে অনলাইনে লিখিত পরীক্ষা এবং সাক্ষাৎকারের (দ্বিতীয় রাউন্ড) জন্য আমন্ত্রণ জানানো হবে। চূড়ান্ত নির্বাচিত আবেদনকারীরা প্রোগ্রামে নিবন্ধন করার সুযোগ পাবেন। তবে বিওয়াইএলসি যে কোন সময় ভর্তির নিয়মাবলী, প্রোগ্রাম ফি, পাঠক্রম, আচরণ বিধি এবং ওয়েবসাইট বা সামাজিক যোগাযোগ মাধ্যমে উল্লেখিত যে কোনো তথ্য বা বিষয় পরিবর্তন বা পরিবর্ধনের অধিকার রাখে।</div>
										<br>
									</div>
								  </div>
								  <br><br>
								  <center><div class="subHeading" style="font-weight: bold ; color: darkgreen">Program Details (প্রোগ্রামের বিবরণ)</div></center>
								  <br><br>
								  <a style="font-weight: bold ; font-size: small">Program Duration (প্রোগ্রামের ব্যপ্তিকাল):</a> <a style="font-size: small">March 6 - May 12, 2022 (৬ মার্চ - ১২ মে, ২০২২)</a> 
								  <br><br>
								  <a style="font-weight: bold ; font-size: small">Class Time (ক্লাসের সময়সূচি):</a> <a style="font-size: small">Sunday through Thursday from 3:30 pm to 6:00 pm (রবি থেকে বৃহস্পতিবার, বিকাল ৩ঃ৩০ থেকে সন্ধ্যা ৬ঃ০০ টা)</a>
								  <br><br>
								  <a style="font-weight: bold ; font-size: small">Mode of the Program (প্রোগ্রামের ধরণ):</a> <a style="font-size: small">Online (অনলাইন)</a> <br><br>
								  <a style="font-weight: bold ; font-size: small">Registration Fee (রেজিস্ট্রেশন ফি): </a> <a style="font-size: small">BDT 3,000 (৩,০০০ টাকা)</a> <br><br>
								  <a style="font-size: small">*Registration fee has been reduced from BDT 6,000 to BDT 4,000 due to the current pandemic situation. However, need-based financial aid will be provided to a limited number of students (বর্তমান মহামারী পরিস্থিতি বিবেচনায় রেজিস্ট্রেশন ফি ৬,০০০ টাকার পরিবর্তে ৪,০০০ টাকা নির্ধারণ করা হয়েছে। উল্লেখ্য, আর্থিক অবস্থা ও চাহিদা বিবেচনা করে সীমিত সংখ্যক শিক্ষার্থীকে আর্থিক সহায়তা প্রদান করা হবে)</a>
								  <br><br>
								  <a style="font-weight: bold ; font-size: small">Application Deadline (আবেদনের শেষ তারিখ):</a> <a style="font-size: small">January 29, 2022 (২৯ শে জানুয়ারী, ২০২২)</a>
								  <br><br>

						    </div>
			            </section>

			            <!-------------------------------- PERSONAL INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
			                <center>
								<a style="font-size: medium ; color: green; font-weight: bold">Personal Information</a><br>
								<a style="font-size: medium ; color: green; font-weight: bold">(ব্যক্তিগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your personal information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্যক্তিগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>
							<a style="font-size: small ; font-weight: bold">Full Name (পূর্ণ নাম)</a><br>
							<a style="font-size: smaller ; color: gray; ">As per passport or national ID or academic certificate (পাসপোর্ট বা জাতীয় পরিচয়পত্র বা একাডেমিক সার্টিফিকেট অনুযায়ী) (ex. Zuhair Bin Zabbar)</a><br>
							<input type="text" class="form-control" id="name" name="full-name"  value ="{{old('full-name', $student->full_name)}}" readonly>
							<span style ="color: red">@error('full-name'){{$message}}@enderror </span>

							<br>
							<!-- Gender -->
							<a style="font-size: small ; font-weight: bold">Gender (লিঙ্গ)</a><br>
							<div class="form-row">
								<div id="radio">
                                    <div class="row">
										<div class="col-md-4">
                                            <input type="radio" name="gender" value="male" {{ old("gender") == 'male' ||  $student->gender =='male' ? 'checked' :  'disabled' }} > <a style="font-size: small">Male (পুরুষ)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="female" {{ old("gender") == 'female' || $student->gender =='female' ? 'checked' : 'disabled' }} disabled> <a style="font-size: small">Female (নারী)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="other" {{ old("gender") == 'other' ||  $student->gender =='other' ? 'checked' : 'disabled' }} disabled> <a style="font-size: small">Other (অন্যান্য)</a>
                                        </div>
                                    </div>
								</div>
							</div>
							<br>

							<br><br>
							<!-- Date and Nationality -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Date of Birth (জন্ম তারিখ)</a><br>
									<!-- DatePicker -->
									<div class="input-group date" id="datepicker">
										<input type="date" class="form-control" id="dateinfo" name="date-of-birth" value ="{{old('date-of-birth', $student->dob)}}" readonly/ >
										
									</div>
						        </div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Nationality (জাতীয়তা)</a><br>
									<input type="text" class="form-control" id="nationality"  name="nationality" value ="{{old('nationality', $student->nationality)}}" readonly>
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
									<a style="font-size: small ; font-weight: bold">Email Address (ইমেইল)</a><br>
									<input type="email" class="form-control" id="email"  name="email-address" value ="{{old('email-address', $student->email_address)}}" readonly>
									<span style ="color: red">@error('email-address'){{$message}}@enderror </span>
								</div>
								<div class="col-md-6">
									<!-- NID -->
									<a style="font-size: small ; font-weight: bold">NID/Bith Certificate/Paport No</a><br>
									<input type="text" class="form-control" name="nid" id="nid" name="nid" value ="{{old('nid',$student->student_id)}}" readonly >
									<span style ="color: red">@error('nid'){{$message}}@enderror </span>
								</div>
							</div>
							<br><br>
							

							<!-- Ethnicity and Disability -->
							<a style="font-size: small ; font-weight: bold">Do you belong to any ethnic community, i.e.Chakma, Marma, etc? (আপনি কি কোন ক্ষুদ্র নৃগোষ্ঠীর অন্তর্ভুক্ত, যেমন চাকমা, মারমা ইত্যাদি?)</a><br>
							<div class="form-row">
							<div id="radio">
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="ethnicCheck" value="yes"  {{ old("ethnicity") == 'yes' || $student->ethnicity == 'yes'? 'checked' : 'disabled' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="not_ethnicCheck" value="no" {{ old("ethnicity") == 'no' || $student->ethnicity =='no' ? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="ethnic" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
                                    <input type="text" class="form-control" id="ethnicity_name" name="ethnicity_name"  value ="{{old('ethnicity_name',$student->ethnicity)}}">
                                </div>
							</div><br>
							<a style="font-size: small ; font-weight: bold">Do you have any disability, i.e., visual or hearing disabilities, physical disability, etc.? (আপনার কি কোন প্রতিবন্ধিতা রয়েছে, যেমনঃ দৃষ্টি, শ্রবণ, শারীরিক প্রতিবন্ধিতা বা অন্যান্য?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="disableCheck" value="yes" {{ old("disability") == 'yes' || $student->disability == 'yes' ? 'checked' : 'disabled' }}> <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="not_disableCheck" value="no" {{ old("disability") == 'no' || $student->disability == 'no' ? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="disable" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
                                    <input type="text" class="form-control" id="disability_name" name="disability_name"  value ="{{old('disability_name',$student->disability)}}">
                                </div>
							</div>


							<br><br>
							<!-- Present Address -->
							<div class="subHeading" style="font-weight: bold ">Present Address (বর্তমান ঠিকানা)</div><br>

							<div class="row g-3">
								<!-- Apartment -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
									<input type="text" class="form-control" id="per_apartment"  name="per_apartment" value ="{{old('per_apartment',$student->present_apartment_no)}}">
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
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="yesCheck" value="yes" {{ old("same_address") == 'yes' || $student->present_similar_to_permanent == 'yes' ? 'checked' : 'disabled' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="noCheck" value="no" {{ old("same_address") == 'no' || $student->present_similar_to_permanent == 'no' ? 'checked' : 'disabled' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
								<a style="font-size: medium ; color: green ; font-weight: bold">Educational Information</a><br>
								<a style="font-size: medium ; color: green ;font-weight: bold">(শিক্ষাগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your educational information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্শিক্ষাগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>

							<a style="font-size: small ; font-weight: bold">Medium (মাধ্যম)</a><br>
							<a style="font-size: smaller ; color: gray; ">Please select your education medium based on your SSC/Dakhil/O level exam (অনুগ্রহ করে আপনার এসএসসি/দাখিল/ও লেভেল পরীক্ষার উপর শিক্ষা মাধ্যম নির্বাচন করুন)</a><br>
							
							<div class="form-row">
								<!-- Medium -->
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

							<!-- Institution Name -->
							<a style="font-size: small ; font-weight: bold">Name of Institution (প্রতিষ্ঠানের নাম)</a><br>
							<input type="text" class="form-control" id="institution" name="institution" value ="{{old('institution')}}">
							<br>
							<!-- CLass -->
							<a style="font-size: small ; font-weight: bold">Class (শ্রেণি)</a><br>
							<div class="input-group mb-3">
								<select class="form-select" id="school_class" name="school_class">
								  <option selected>Please Select</option>
								  <option value="Class 6" {{ old("edu_level") == 'Class 6' ? 'selected' : '' }}>Class 6</option>
								  <option value="Class 7" {{ old("edu_level") == 'Class 7' ? 'selected' : '' }}>Class 7</option>
								  <option value="Class 8" {{ old("edu_level") == 'Class 8' ? 'selected' : '' }}>Class 8</option>
								  <option value="Class 9" {{ old("edu_level") == 'Class 8' ? 'selected' : '' }}>Class 9</option>
								  <option value="Class 10" {{ old("edu_level") == 'Class 10' ? 'selected' : '' }}>Class 10</option>
								</select>
							</div>
							<br>

							<!-- Extracurricular Activity -->
							<a style="font-size: small ; font-weight: bold">Extracurricular Activity (সহশিক্ষামূলক কার্যক্রম)</a><br>
							<a style="font-size: x-small ; color: gray; ">List one notable extracurricular activity that you have been/are currently involved in. Please mention the year/duration, your position, and responsibilities. If you don't have any experience in extracurricular activities, you can skip this section.</a><br>
							<a style="font-size: x-small ; color: gray; ">(যদি প্রযোজ্য হয় তবে, যেকোনো একটি সহশিক্ষামূলক কার্যক্রমে অংশগ্রহনের বর্ণনা দিন। অনুগ্রহ করে সময়/বছর, পদবি ও দায়িত্বসমুহ উল্লেখ করুন। যদি আপনার অতিরিক্ত কার্যক্রমের কোনও অভিজ্ঞতা না থাকে, তবে আপনি এই সেকশনটি এড়িয়ে যেতে পারেন।)</a><br>
							<input type="text" class="form-control" id="extracurricular"  name="extracurricular" value ="{{old('extracurricular')}}">
							<br>
							
							<!-- Extracurricular Activity -->
							<a style="font-size: small ; font-weight: bold">How did you learn about the BBLT program? (আপনি কিভাবে বিবিএলটি প্রোগ্রাম সম্পর্কে জেনেছেন?)</a><br>
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

							<!-- Analytical -->
							<center>
								<a style="font-size: medium ; color: green ; font-weight: bold">Analytical Assessment</a><br>
								<a style="font-size: medium ; color: green ; font-weight: bold">(বিশ্লেষণাত্মক মূল্যায়ন)</a><br>				
							</center>
							<br>

							<a style="font-size: smaller">Please read the following reflective question carefully, and answer within the word limit. Your response will be judged on its articulation, logical reasoning, and authentication.</a>
							<a style="font-size: smaller ; color:red">(*Any sort of plagiarism will cause immediate disqualification of the application)</a><br>
							<a style="font-size: smaller">অনুগ্রহ করে ধীরে সুস্থে এবং সতর্কতার সাথে নিচের প্রশ্নের উত্তর দিন। আপনি বাংলায় অথবা ইংরেজিতে লিখতে পারবেন। স্পষ্টতা, সুসংগঠন এবং মৌলিকতার ভিত্তিতে আপনার আবেদনপত্রটি যাচাই করা হবে।</a>
							<a style="font-size: smaller ; color:red">(*কোন ধরনের অসৎ উপায় অবলম্বন করলে আবেদনকারীর আবেদন বাতিল বলে গন্য হবে)</a><br><br>
							<a style="font-size: small ; font-weight: bold">Question: "If you want to be someone when you grow up, who would you like to be and why?"
								(“অর্থনৈতিক উন্নতির চেয়ে পরিবেশকে রক্ষা করা বেশী গুরুত্বপূর্ণ” আপনি কি উপরোক্ত উক্তির সাথে একমত? আপনার উত্তরের যথার্থতা বিশ্লেষণ করুন)</a><br>
							<a style="font-size: x-small ; color: gray; ">(Minimum 100 words)</a>
							<br>

							<div class="form-floating">
								<textarea class="form-control" rows="7" style="height:100%;" placeholder="Leave a comment here" id="answer" name="justify_ans"></textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div>

							<br>
							<a style="font-size: x-small ; color: gray; ">Please check the box*</a><br>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="agree_terms">
								<a style="font-size: smaller">My parents and I have read the terms and we agree to the terms of data usage (আমি এবং আমার পিতা/মাতা তথ্যের ব্যবহার বিষয়ক শর্তাবলী পড়েছি এবং সম্মতি প্রদান করছি)</a>
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

    </script>


</body>
</html>