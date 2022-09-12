<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BBLT Form</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
	<div class="page-content" style="background:darkgreen">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="images/bylc-logo.png" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold ">Building Bridges through Leadership Training (BBLT) Application Form</div>
					<div class="subHeading" >বিল্ডিং ব্রিজেস থ্রূ লিডারশিপ ট্রেনিং (বিবিএলটি) আবেদনপত্র</div>
				</div>
		      
			
                <form class="form-register" method="post" action="{{url('/bblt/store')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">

		        		<!-------------------------------- GUIDELINES ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="sentence" style="font-weight: bold ">Important Information about Building Bridges through Leadership Training (BBLT) Program:</div>
										<br>
										<div class="sentence">BBLT is one of BYLC's leadership training programs designed to combine Harvard University courses and educational models. Students develop their leadership skills through analytical thinking and become useful in the role of positive change in society. In the first phase of the program, students conduct experiments, take risks, and question deeply held assumptions in the online classes. In the second phase, students have the opportunity to translate their learning into action by implementing community service projects in underprivileged communities. </div>
										<br>
										<div class="sentence" style="font-weight: bold ">By participating in the BBLT program, through online classes the participants will gain the following skills:</div>
										<br>
										<a style="font-size: small">1. Public speaking</a><br> <a style="font-size: small">2. Active citizenship</a><br> <a style="font-size: small">3. Teamwork</a><br> <a style="font-size: small">4. Patience and compassion</a><br> <a style="font-size: small">5. Problem-solving</a><br> <a style="font-size: small">6. Professional skills development</a><br> <a style="font-size: small">7. Social service</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">Eligibility Criteria for Applying to the BBLT Program:</div>
										<br>
										<a style="font-size: small">1. Students studying in HSC/Alim/A Levels or first/second-year undergraduate students</a><br> <a style="font-size: small">2. Can commit attendance from 3:30 pm to 6:00 pm, five days a week</a><br> <a style="font-size: small">3. Participants must be able to attend the online classes during the training</a><br> <a style="font-size: small">4. Willing to work on implementing online social projects for three weeks as part of the program</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">Application Process and Admission Rules:</div>
										<br>
										<div class="sentence">All interested applicants must complete the application form. After the initial screening of the application forms (round one), the shortlisted applicants will be invited for an online written test and interview (round two). Final selected applicants will have the opportunity to register in the program. However, at any time, BYLC reserves the right to change or amend the admission rules, program fees, curriculum, rules of conduct and any information or content referred to through the website or social media.</div>
										<br>
									</div>
									<div class="col">
										<div class="sentence" style="font-weight: bold ">বিল্ডিং ব্রিজেস থ্রূ লিডারশিপ ট্রেনিং (বিবিএলটি) প্রোগ্রাম সম্পর্কে কিছু  গুরুত্বপূর্ণ তথ্য:</div>
									    <br>
										<div class="sentence">বিবিএলটি হচ্ছে বিওয়াইএলসির একটি অন্যতম নেতৃত্ব বিষয়ক প্রশিক্ষণ প্রোগ্রাম যা হার্ভার্ড বিশ্ববিদ্যালয়ের কোর্সসমূহ এবং শিক্ষামূলক বিভিন্ন মডেলের সমন্বয়ে সাজানো হয়েছে। শিক্ষার্থীরা বিশ্লেষণধর্মী চিন্তার মাধ্যমে নিজেদের নেতৃত্বজ্ঞানকে বিকশিত করে সমাজে ইতিবাচক পরিবর্তনে ভূমিকা পালনের উপযোগী হয়ে গড়ে ওঠে। এই কর্মসূচীর শুরুতে অংশগ্রহণকারীরা অনলাইন ক্লাসে নিজেদের বিভিন্ন ধারণাকে প্রশ্নের সম্মুখীন করেন, বিভিন্ন বিষয়ে পরীক্ষা-নিরীক্ষা করেন এবং ঝুঁকি নেন। পরবর্তী পর্যায়ে সমাজসেবামূলক প্রকল্প বাস্তবায়নের মাধ্যমে তারা তাদের নেতৃত্ব বিষয়ক অর্জিত জ্ঞান প্রয়োগের সুযোগ পেয়ে থাকেন।</div>
										<br>
										<div class="sentence" style="font-weight: bold ">বিবিএলটি প্রশিক্ষণ প্রোগ্রামে অংশগ্রহণকারী শিক্ষার্থীরা অনলাইন ক্লাসের মাধ্যমে যেসব গুরুত্বপূর্ণ বিষয়ে প্রশিক্ষণ পাবে, তা হলো:</div>
										<br>
										<a style="font-size: small">১. পাবলিক স্পিকিং তথা উপস্থিত বক্তৃতা</a><br> <a style="font-size: small">২. সক্রিয় নাগরিকত্ব</a><br> <a style="font-size: small">৩. দলগত কাজ</a><br> <a style="font-size: small">৪. ধৈর্য ও সহনশীলতা</a><br> <a style="font-size: small">৫. সমস্যা সমাধান পদ্ধতি</a><br> <a style="font-size: small">৬. পেশাগত দক্ষতা উন্নয়ন</a><br> <a style="font-size: small">৭. সোশ্যাল সার্ভিস</a>
										<br><br>
										<div class="sentence" style="font-weight: bold ">বিবিএলটি প্রোগ্রামে আবেদনের যোগ্যতা:</div>
										<br>
										<a style="font-size: small">১. স্বীকৃতি প্রাপ্ত শিক্ষা প্রতিষ্ঠান সমূহের এইচ এস সি/ আলিম/এ লেভেলস, অনার্স এবং ফাজিল (প্রথম ও দ্বিতীয় বর্ষের) শিক্ষার্থীরা</a><br> <a style="font-size: small">২. সপ্তাহে ৫ দিন, দুপুর ৩:৩০ টা থেকে বিকাল ৬:০০ টা পর্যন্ত ক্লাসে উপস্থিত থাকতে হবে</a><br> <a style="font-size: small">৩. প্রশিক্ষণ কালীন সময়ে অংশগ্রহণকারীকে অনলাইন ক্লাস করার সক্ষমতা থাকতে হবে</a><br> <a style="font-size: small">৪. প্রোগ্রামের অংশ হিসেবে ৩ সপ্তাহের জন্য অনলাইনে সমাজসেবামূলক প্রকল্প বাস্তবায়নে কাজ করতে ইচ্ছুক</a>
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
								  <a style="font-weight: bold ; font-size: small">Mode of the Program (প্রোগ্রামের ধরণ):</a> <a style="font-size: small">Online (অনলাইন)</a> <br>
								  <a style="font-size: small">*registration fee has been reduced from BDT 6,000 to BDT 4,000 due to the current pandemic situation. However, need-based financial aid will be provided to a limited number of students (বর্তমান মহামারী পরিস্থিতি বিবেচনায় রেজিস্ট্রেশন ফি ৬,০০০ টাকার পরিবর্তে ৪,০০০ টাকা নির্ধারণ করা হয়েছে। উল্লেখ্য, আর্থিক অবস্থা ও চাহিদা বিবেচনা করে সীমিত সংখ্যক শিক্ষার্থীকে আর্থিক সহায়তা প্রদান করা হবে)</a>
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
								<a style="font-size: medium ; font-weight: bold">Personal Information</a><br>
								<a style="font-size: medium ; font-weight: bold">(ব্যক্তিগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your personal information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্যক্তিগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>
							<a style="font-size: small ; font-weight: bold">Full Name (পূর্ণ নাম)</a><br>
							<a style="font-size: smaller ; color: gray; ">As per passport or national ID or academic certificate (পাসপোর্ট বা জাতীয় পরিচয়পত্র বা একাডেমিক সার্টিফিকেট অনুযায়ী) (ex. Zuhair Bin Zabbar)</a><br>
							<input type="text" class="form-control" id="name" name="full-name" required>

							<br>
							<!-- Gender -->
							<a style="font-size: small ; font-weight: bold">Gender (লিঙ্গ)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="gender" value="male" > <a style="font-size: small">Male (পুরুষ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="gender" value="female"> <a style="font-size: small">Female (নারী)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="gender" value="other"> <a style="font-size: small">Other (অন্যান্য)</a> 
								</div>
							</div>

							<br><br>
							<!-- Date and Nationality -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Date of Birth (জন্ম তারিখ)</a><br>
									<!-- DatePicker -->
									<div class="input-group date" id="datepicker">
										<input type="text" class="form-control" id="date" name="date-of-birth"/>
										<span class="input-group-append">
										  <span class="input-group-text bg-light d-block">
											<i class="fa fa-calendar"></i>
										  </span>
										</span>
									</div>
								
								
						        </div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Nationality (জাতীয়তা)</a><br>
									<input type="text" class="form-control" id="nationality" name="nationality">
								</div>
							</div>

							<br>
							<!-- Father and Mother Name -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Father Name (বাবার নাম)</a><br>
									<input type="text" class="form-control" id="father_name" name="father_name">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mother Name (মায়ের নাম)</a><br>
									<input type="text" class="form-control" id="mother_name" name="mother-name">
								</div>
							</div>

							<br>
							<!-- Mobile and Emergency Contact -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mobile Number (মোবাইল নম্বর)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="mobile" name="mobile-number">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Emergency Contact Number (জরুরী প্রয়োজনে)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="emergency_contact" name="emergency-contact">
								</div>
							</div>

							<br>
							<!-- Email -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Email Address (ইমেইল)</a><br>
									<input type="email" class="form-control" id="email" name="email-address">
								</div>
							</div>
							<br><br>
							

							<!-- Ethnicity and Disability -->
							<a style="font-size: small ; font-weight: bold">Do you belong to any ethnic community, i.e.Chakma, Marma, etc? (আপনি কি কোন ক্ষুদ্র নৃগোষ্ঠীর অন্তর্ভুক্ত, যেমন চাকমা, মারমা ইত্যাদি?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="ethnicity" value="yes" > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="ethnicity" value="no"> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div><br>
							<a style="font-size: small ; font-weight: bold">Do you have any disability, i.e., visual or hearing disabilities, physical disability, etc.? (আপনার কি কোন প্রতিবন্ধিতা রয়েছে, যেমনঃ দৃষ্টি, শ্রবণ, শারীরিক প্রতিবন্ধিতা বা অন্যান্য?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="disability" value="yes" > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="disability" value="no"> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>


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
							<!-- Permanent Address -->
							<a style="font-size: small ; font-weight: bold">Is your permanent address similar to the present address? (আপনার স্থায়ী ঠিকানা ও বর্তমান ঠিকানা কি একই?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="same_address" onclick="disableField()" value="yes" > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="same_address" onclick="enableField()" value="no"> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>

							<br>
							<div class="subHeading" style="font-weight: bold ">Permanent Address (স্থায়ী ঠিকানা)</div><br>

							<div class="row g-3">
								<!-- Apartment -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
									<input type="text" class="form-control" id="apartment" name="apartment">
								</div>	
								<!-- House -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
									<input type="text" class="form-control" id="house" name="house">
								</div>
								<!-- Road -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
									<input type="text" class="form-control" id="road" name="road">
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Thana -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
									<input type="text" class="form-control" id="thana" name="thana">
								</div>	
								<!-- District -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">District (জেলা)</a><br>
									<div class="input-group mb-3">
										<select class="form-select" id="district" name="district">
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
										<select class="form-select" id="division" name="division">
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
									<input type="text" class="form-control" id="pc" name="pc">
								</div>	
							</div>

							<br><br>


							<!-- Educational -->
							<center>
								<a style="font-size: medium ; font-weight: bold">Educational Information</a><br>
								<a style="font-size: medium ; font-weight: bold">(শিক্ষাগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your educational information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্শিক্ষাগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>

							<a style="font-size: small ; font-weight: bold">Medium (মাধ্যম)</a><br>
							<a style="font-size: smaller ; color: gray; ">Please select your education medium based on your SSC/Dakhil/O level exam (অনুগ্রহ করে আপনার এসএসসি/দাখিল/ও লেভেল পরীক্ষার উপর শিক্ষা মাধ্যম নির্বাচন করুন)</a><br>
							
							<!-- <a style="font-size: x-small ; color: gray; ">1. Bengali version/English version if you appeared for SSC exam (বাংলা ভার্সন/ইংরেজি ভার্সন, যদি মাধ্যমিক পরীক্ষা দিয়ে থাকেন)</a><br>
							<a style="font-size: x-small ; color: gray; ">2. Madrassa if you appeared for Dakhil exam (মাদরাসা, যদি দাখিল পরীক্ষা দিয়ে থাকেন)</a><br>
							<a style="font-size: x-small ; color: gray; ">3. English medium if you appeared for O'level exam (ইংরেজি মাধ্যম, যদি ও লেভেল পরীক্ষা দিয়ে থাকেন)</a><br> -->

							<div class="form-row">
								<!-- Medium -->
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="medium" value="Bengali Version" > <a style="font-size: small">Bengali Version (বাংলা ভার্সন)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Version"> <a style="font-size: small">English Version (ইংরেজী ভার্সন)</a>
										</div>	
									</div>
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="medium" value="English Medium " > <a style="font-size: small">English Medium (ইংরেজী মাধ্যম)</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="medium" value="Madrassa"> <a style="font-size: small">Madrassa (মাদ্রাসা)</a>
										</div>	
									</div>			
								</div>
							</div>
							<br>

							<!-- Current Educational Level-->
							<a style="font-size: small ; font-weight: bold">Current Education Level (বর্তমান শিক্ষাস্তর)</a><br>
							<div class="input-group mb-3">
								<select class="form-select" id="edu_level" name="edu_level">
								  <option selected>Please Select</option>
								  <option value="Bachelor">Bachelor's</option>
								  <option value="Fazil">Fazil</option>
								  <option value="HSC">HSC</option>
								  <option value="A'Level">A'Level</option>
								  <option value="Alim">Alim</option>
								  <option value="Diploma">Diploma</option>
								</select>
							</div>
							<br>

							<!-- Institution Name -->
							<a style="font-size: small ; font-weight: bold">Name of Institution (প্রতিষ্ঠানের নাম)</a><br>
							<input type="text" class="form-control" id="institution" name="institution">
							<br>
							<!-- Current Year of Study -->
							<a style="font-size: small ; font-weight: bold">Current Year of Study (বর্তমান শিক্ষা বছর)</a><br>
							<div class="input-group mb-3">
								<select class="form-select" id="study_year" name="study_year">
								  <option selected>Please Select</option>
								  <option value="A'Level/Alim/HSC 1st Year">A'Level/Alim/HSC 1st Year</option>
								  <option value="A'Level/Alim/HSC 2nd Year">A'Level/Alim/HSC 2nd Year</option>
								  <option value="A'Level/Alim/HSC Completed">A'Level/Alim/HSC Completed</option>
								  <option value="Fazil/Undergraduate 1st Year">Fazil/Undergraduate 1st Year</option>
								  <option value="Fazil/Undergraduate 2nd Year">Fazil/Undergraduate 2nd Year</option>
								</select>
							</div>
							<br>
							<!-- Current CGPA -->
							<a style="font-size: small ; font-weight: bold">Current CGPA (বর্তমান সিজিপিএ)</a><br>
							<input type="text" class="form-control" id="cgpa" name="cgpa">
							<br>
							<!-- Extracurricular Activity -->
							<a style="font-size: small ; font-weight: bold">Extracurricular Activity (সহশিক্ষামূলক কার্যক্রম)</a><br>
							<a style="font-size: x-small ; color: gray; ">List one notable extracurricular activity that you have been/are currently involved in. Please mention the year/duration, your position, and responsibilities. If you don't have any experience in extracurricular activities, you can skip this section.</a><br>
							<a style="font-size: x-small ; color: gray; ">(যদি প্রযোজ্য হয় তবে, যেকোনো একটি সহশিক্ষামূলক কার্যক্রমে অংশগ্রহনের বর্ণনা দিন। অনুগ্রহ করে সময়/বছর, পদবি ও দায়িত্বসমুহ উল্লেখ করুন। যদি আপনার অতিরিক্ত কার্যক্রমের কোনও অভিজ্ঞতা না থাকে, তবে আপনি এই সেকশনটি এড়িয়ে যেতে পারেন।)</a><br>
							<input type="text" class="form-control" id="extracurricular" name="extracurricular">
							<br>
							
							<!-- Extracurricular Activity -->
							<a style="font-size: small ; font-weight: bold">How did you learn about the BBLT program? (আপনি কিভাবে বিবিএলটি প্রোগ্রাম সম্পর্কে জেনেছেন?)</a><br>
							<div class="form-row">
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="knowing_media" value="Newspaper" > <a style="font-size: small">Newspaper (পত্রিকা)</a> 
										</div>
										<div class="col-md-6">
											<input type="radio" name="knowing_media" value="Campus Ambassador"> <a style="font-size: small">Campus Ambassador (ক্যাম্পাস প্রতিনিধি)</a>
										</div>	
									</div>
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="knowing_media" value="Website" > <a style="font-size: small">Website (ওয়েবসাইট)</a>
										</div>
										<div class="col-md-6">
											<input type="radio" name="knowing_media" value="Workshop or presentation"> <a style="font-size: small">Workshop or presentation (কর্মশালা বা উপস্থাপনা)</a>
										</div>	
									</div>	
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="knowing_media" value="Facebook" > <a style="font-size: small">Facebook page (ফেইসবুক)</a> 
										</div>
										<div class="col-md-6">
											<input type="radio" name="knowing_media" value="Friends and family"> <a style="font-size: small">Friends and family (বন্ধু এবং পরিবার)</a>
										</div>	
									</div>
									
									<div class="row g-1">
										<div class="col-md-5">
											<input type="radio" name="knowing_media" value="Youtube" > <a style="font-size: small">Youtube channel (ইউটিউব চ্যানেল)</a>
										</div>
										<div class="col-md-6">
											<input type="radio" name="knowing_media" value="Others"> <a style="font-size: small">Others (অন্যান্য)</a>
										</div>	
									</div>			
								</div>
							</div>
							<br><br>

							<!-- Analytical -->
							<center>
								<a style="font-size: medium ; font-weight: bold">Analytical Assessment</a><br>
								<a style="font-size: medium ; font-weight: bold">(বিশ্লেষণাত্মক মূল্যায়ন)</a><br>				
							</center>
							<br>

							<a style="font-size: smaller">Please read the following reflective question carefully, and answer within the word limit. Your response will be judged on its articulation, logical reasoning, and authentication.</a>
							<a style="font-size: smaller ; color:red">(*Any sort of plagiarism will cause immediate disqualification of the application)</a><br>
							<a style="font-size: smaller">অনুগ্রহ করে ধীরে সুস্থে এবং সতর্কতার সাথে নিচের প্রশ্নের উত্তর দিন। আপনি বাংলায় অথবা ইংরেজিতে লিখতে পারবেন। স্পষ্টতা, সুসংগঠন এবং মৌলিকতার ভিত্তিতে আপনার আবেদনপত্রটি যাচাই করা হবে।</a>
							<a style="font-size: smaller ; color:red">(*কোন ধরনের অসৎ উপায় অবলম্বন করলে আবেদনকারীর আবেদন বাতিল বলে গন্য হবে)</a><br><br>
							<a style="font-size: small ; font-weight: bold">Question: “Saving the environment is more important than economic growth.” Do you agree with this statement? Justify your answer. (“অর্থনৈতিক উন্নতির চেয়ে পরিবেশকে রক্ষা করা বেশী গুরুত্বপূর্ণ” আপনি কি উপরোক্ত উক্তির সাথে একমত? আপনার উত্তরের যথার্থতা বিশ্লেষণ করুন)</a><br>
							<a style="font-size: x-small ; color: gray; ">(Minimum 100 words)</a>
							<br>

							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a comment here" id="answer" name="answer"></textarea>
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
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<script>
		const districtsList = document.querySelector('.districts');
		const endPoint = "https://bdapis.herokuapp.com/api/v1.1/districts/";

		async function bdApi(url) {
		const res = await fetch(url)
		return res.json();
		}

		bdApi(endPoint)
		.then(districts => {
			const allDistricts = districts.data;

			allDistricts.forEach(district => {
			const li = document.createElement("li");
			li.textContent = district.district + ' - ' + district.districtbn;
			districtsList.append(li);
			})
		})
		.catch(error => {
			console.error('Error::', error);
		});
	</script>

	<!-- Disable form fields when clicked yes in radio button -->
	<script>
		function disableField() {
			document.getElementById("apartment").setAttribute("value","asd");
			document.getElementById("apartment").disabled = true;
			document.getElementById("house").setAttribute("value","asd");
			document.getElementById("house").disabled = true;
			document.getElementById("road").setAttribute("value","asd");
			document.getElementById("road").disabled = true;
			document.getElementById("thana").setAttribute("value","asd");
			document.getElementById("thana").disabled = true;
			document.getElementById("thana").setAttribute("value","asd");
			document.getElementById("district").disabled = true;
			document.getElementById("thana").setAttribute("value","asd");
			document.getElementById("division").disabled = true;
			document.getElementById("pc").setAttribute("value","asd");
			document.getElementById("pc").disabled = true;				
		}
		function enableField() {
			document.getElementById("apartment").setAttribute("value","");
			document.getElementById("apartment").disabled = false;
			document.getElementById("house").setAttribute("value","");
			document.getElementById("house").disabled = false;
			document.getElementById("road").setAttribute("value","");
			document.getElementById("road").disabled = false;
			document.getElementById("thana").setAttribute("value","");
			document.getElementById("thana").disabled = false;
			document.getElementById("district").disabled = false;
			document.getElementById("division").disabled = false;
			document.getElementById("pc").setAttribute("value","");
			document.getElementById("pc").disabled = false;	
		}
	</script>

<!-- datepicker -->
<script>
$('.datepicker').datepicker();
</script>


</body>
</html>