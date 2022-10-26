<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YLS Form</title>
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
	<div class="page-content" style="background: darkorange">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="{{asset('images/bylc-logo.png')}}" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold ">Youth Leadership Summit (YLS) 2021 Application Form</div>
					<div class="subHeading" >ইয়ুথ লিডারশীপ সামিট (ওয়াইএলএস) ২০২১ আবেদনপত্র</div>
				</div>
		      
				<form class="form-register"  method="post" action="{{url('/yls/store')}}"  novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">
					<input type="hidden" class="form-control" id="program_name"  name="program_name" value="YLS" >
					<input type="hidden" class="form-control" id="program_name"  name="program_batch_id" value="{{$batchinfo->batch_id}}" >
		        		<!-------------------------------- GUIDELINES ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
						<input type="hidden" class="form-control" id="program_name"  name="program_name" value="YLS" >
			            <section>
							<div class="container">
										<div class="sentence" style="font-weight: bold ">Information about Youth Leadership Summit, YLS (ইয়ুথ লিডারশীপ সামিট, ওয়াইএলএস, বিষয়ক তথ্য)</div><br>
										<p style="font-size: 13px;">More than one-third of Bangladesh’s population are young people. However, not all youth can enjoy equal rights within society. Race, ethnicity, gender, and social class divide us and this difference restricts a significant portion of youth from accessing great opportunities and marginalizes others to no opportunities at all. As Bangladesh celebrates its 50th anniversary of independence this year, it is time to reflect on what has been achieved and what more needs to be done.</p>				
										<p style="font-size: 13px;">BYLC Youth Leadership Summit 2021 supported by Manusher Jonno Foundation and UK Aid will bring together 400 youth, competitively selected from all over Bangladesh along with reputed expert speakers to facilitate an intergenerational dialogue on issues and challenges that limit youth’s inclusive participation in public, private, and civil sectors. The four-day-long summit, to be held virtually on Zoom, will focus on listening to the voices of marginalized youth and crafting solutions together to achieve inclusivity in terms of opportunities to work, exercising equal rights, access to better health,  livelihood, education, and skills development within the society. Through this Summit, we aim to mobilize youth to take a step forward in building a country that has space for all its citizens, not just the privileged few.</p>                                      
										<p style="font-size: 13px;">The Summit will consist of plenaries and workshops featuring industry experts and policymakers. Participants will also have the opportunity to network, learn, and practice leadership skills, and share ideas with their peers that can help create an inclusive Bangladesh.</p>				
                                        <p style="font-size: 13px;">বাংলাদেশে জনসংখ্যার, প্রায় এক তৃতীয়াংশের অধিক সংখ্যক-ই তরুণ তরুণী। তথাপি, সব তরুণ তরুণীরা সমাজে সমান অধিকার ভোগ করতে পারছে না। জাতি, গোষ্ঠী, লিঙ্গ এবং সামাজিক শ্রেনী আমাদেরকে বিভক্ত করে ফেলেছে এবং এই ভিন্নতা তরুণ সমাজের একটি গুরুত্বপূর্ণ অংশকে সুবর্ণ সুযোগ গ্রহন থেকে বঞ্চিত করছে এবং অন্য কিছু তরুণ তরুণীদেরকে সুযোগহীনতার মাধ্যমে অগ্রাহ্য করে ফেলছে। বাংলাদেশের স্বাধীনতার এই সুবর্ণ জয়ন্তীতে, আমরা আজ পর্যন্ত কি কি অর্জন করেছি এবং ভবিষ্যতে আরো কি কি অর্জন করা যায় তা অনুধাবন করার এখনই সময়।</p>
                                        <p style="font-size: 13px;">মানুষের জন্য ফাউন্ডেশন ও ইউকেএইড সমর্থিত বিওয়াইএলসি ইয়ুথ লিডারশিপ সামিট ২০২১, প্রতিযোগিতাপূর্ণ ভাবে নির্বাচিত ৪০০ জন তরুণ তরুণীদের দক্ষ এবং খ্যাতিসম্পন্ন বক্তাদের সাথে একত্রিত করবে। সরকারী, বেসরকারী এবং নাগরিক খাতে যে বিষয়গুলো তরুণ তরুণীদের সুষম অংশগ্রহণ সীমিত করে সেই বিষয় গুলো নিয়ে বক্তারা উক্ত সামিটে আলোচনা করবেন। চারদিন ব্যাপী এই অনলাইন সামিটে প্রান্তিক তরুণ তরুণীদের পরিস্থিতির উপর বিশেষভাবে মনোনিবেশ করা হবে। সকলে একত্রে কিভাবে কর্মক্ষেত্র, স্বাস্থ্য-সুবিধা, জীবনযাত্রার মানোন্নয়ন, শিক্ষা এবং দক্ষতা বৃদ্ধিতে সকলের সমান সুযোগ তৈরি করা যায় তার সম্ভাব্য সমাধান উদ্ভাবনের উপর ও গুরুত্বারোপ করা হবে। এই আলোচনার মধ্য দিয়ে আমাদের লক্ষ্য হলো তরুণ তরুণীদের এমন একটি দেশ গঠনের পদক্ষেপ গ্রহনে একত্রিত করা যেখানে কেবল সুবিধাপ্রাপ্ত কিছু জনগোষ্ঠীর নয় বরং সকল নাগরিকের প্রাধান্য থাকবে।</p>				
                                        <p style="font-size: 13px;">এই সামিটে শিল্প বিশেষজ্ঞ এবং নীতি নির্ধারকদের পরিচালনায় পরিচালিত আলোচনা এবং কর্মশালা থাকবে। অংশগ্রহণকারীরা সামিটে নেটওয়ার্কিং, নেতৃত্বচর্চা ও নতুন কিছু শেখার সুযোগ পাবে। পাশাপাশি তাদের ধারণা ও মতামত গুলো অন্যন্য তরুণ তরুণীদের কাছে তুলে ধরতে পারবে যা একটি সমবেত বাংলাদেশ গড়ার লক্ষ্যে তাদেরকে সাহায্য করবে।</p>
                                        <br>

										<div class="sentence" style="font-weight: bold ">Eligibility (আবেদনের যোগ্যতা): </div><br>
                                        <div class="sentence">1. Students enrolled in the Undergraduate/Postgraduate program (বিশ্ববিদ্যালয়ে অনার্স/মাস্টার্সে অধ্যয়নরত শিক্ষার্থী)</div>
                                        <div class="sentence">2. Young professionals up to the age of 35 years (৩৫ কিংবা তার চেয়ে কম বছর বয়সী তরুণ পেশাজীবী)</div><br>
                                        <p style="font-size: 12px;">Note: Preference will be given to applicants who are able to demonstrate a commitment to public service or active citizenship (সমাজসেবামূলক কাজ করতে আগ্রহী আবেদনকারীদের অগ্রাধিকার দেওয়া হবে)</p>

                                        <a style="font-weight: bold ; font-size: small">Application deadline (আবেদনের শেষ সময়): </a> <a style="font-size: small">June 12, 2021 (১২ ই জুন, ২০২১)</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Duration of the program (প্রোগ্রামের ব্যাপ্তি): </a> <a style="font-size: small">August 4–7, 2021 (আগস্ট ৪–৭, ২০২১)</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Program mode (প্রোগ্রামের ধরণ): </a> <a style="font-size: small">Online (অনলাইন)</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Program Date: </a> <a style="font-size: small">October 30–November 5, 2021</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Registration fee (রেজিস্ট্রেশন ফি):</a> 
                                        <div class="sentence">1. Students (শিক্ষার্থী): BDT 2,000 (২,০০০ টাকা)</div>
                                        <div class="sentence">2. Young Professionals (তরুণ পেশাজীবী): BDT 3,000 (৩,০০০ টাকা)</div><br>
                                        <p style="font-size: 12px;">*Need-based financial aid will be provided to a limited number of delegates (আর্থিক অবস্থা ও চাহিদা বিবেচনা করে সীমিত সংখ্যক শিক্ষার্থীকে আর্থিক সহায়তা প্রদান করা হবে)</p>
                                        <br>
                                        <a style="font-weight: bold ; font-size: small">Selected Summit delegates will get (সামিট-এর নির্বাচিত প্রতিনিধিরা যে সকল সুবিধা পাবে):</a><br>
                                        <div class="sentence">1. Access to Office of Professional Development (OPD) services (অফিস অফ প্রফেশনাল ডেভ্লাপমেন্ট (ওপিডি) এর সেবাসমূহ গ্রহণ করার সুযোগ)</div>
                                        <div class="sentence">2. Networking with 400 delegates, industry leaders, and distinguished speakers (৪০০ প্রতিনিধি, বিভিন্ন নেতৃত্বস্থানীয় ব্যক্তিবর্গ এবং বিশিষ্ট বক্তাদের সাথে পরিচিতির সুযোগ)</div>
                                        <br> 
                                        <a style="font-weight: bold ; font-size: small">Admission guidelines (ভর্তি প্রক্রিয়ার নির্দেশিকা):</a><br>
                                        <p style="font-size: 13px;">Applicants are advised to read the following policies carefully before submitting his/her application (আবেদনপত্র জমা দেওয়ার আগে সকল আবেদনকারীকে নিচের নীতিমালা সতর্কতার সাথে পড়ার জন্য অনুরোধ করা হলো):</p>
                                        <div class="sentence">1. Applicants are advised to read the following policies carefully before submitting his/her application (আবেদনপত্র জমা দেওয়ার আগে সকল আবেদনকারীকে নিচের নীতিমালা সতর্কতার সাথে পড়ার জন্য অনুরোধ করা হলো):</div>
                                        <div class="sentence">2. Young Professionals (তরুণ পেশাজীবী): BDT 3,000 (৩,০০০ টাকা)The completed application becomes the confidential property of BYLC. All the information provided in the application form must be authentic and accurate. If at any given time the applicant/participant is unable to verify the information provided in the application form or interview, BYLC reserves the right to disqualify his/her candidacy (সম্পন্ন আবেদনপত্রটি বিওয়াইএলসির গোপনীয় সম্পত্তি বলে বিবেচিত হবে। আবেদন পত্রে প্রদানকৃত সকল তথ্য নির্ভুল এবং সত্য হতে হবে। ইন্টার্ভিউ বা আবেদনপত্রে প্রদানকৃত কোন তথ্য ভুল প্রমাণিত হলে বিওয়াইএলসি যেকোনো সময় সেই আবেদনকারীর আবেদন বাতিল করার ক্ষমতা রাখে)</div>
                                        <div class="sentence">3. BYLC will not tolerate any plagiarism. Copying or using the work of others will result in disqualification of candidacy. We encourage originality in thinking (বিওয়াইএলসি কোন ধরণের লেখা নকল করাকে সমর্থন করেনা। কোন আবেদন পত্রে কোন লেখা নকল বা চুরির প্রমাণ পাওয়া গেলে সেই আবেদনকারীর প্রার্থীতা বাতিল করা হবে)</div>
                                        <div class="sentence">4. If an applicant does not meet the minimum eligibility, his/her application will not be considered (যে সকল আবেদনকারী আবেদনের ন্যূনত্বম যোগ্যটা পূরণ করেননা তাদের আবেদন গ্রহণ করা হবেনা)</div>
                                        <div class="sentence">5. BYLC does not discriminate against any applicant based on race, gender, religion, age, ethnicity, and political beliefs (বিওয়াইএলসি জাতি, ধর্ম, বর্ণ, বয়স, লিঙ্গ, রাজনৈতিক আদর্শ ইত্যাদির ভিত্তিতে বৈষম্য করেনা)</div>
                                        <div class="sentence">6. BYLC reserves the right to make changes at any given time to the admission policies, program fees, curriculum, code of conduct, and any other information/subject matter (আবেদনের শর্তাবলী এবং নীতি, রেজিস্ট্রেশন ফি, পাঠ্যসূচী, আচরণবিধি সহ সামাজিক যোগাযোগ মাধ্যম এবং ওয়েবসাইটে প্রকাশিত যেকোনো তথ্য/বিষয় পরিবর্তনের অধিকার বিওয়াইএলসি রাখে)</div>
                                        <div class="sentence">7. By submitting this application you are in agreement with this policy (আবেদনপত্রটি জমাদানের মাধ্যমে আপনি এই শর্ত এবং নীতিগুলোর সাথে একমত পোষণ করছেন)</div>
                                        <br>
                                        <p style="font-size: 13px;">For any queries, please contact us at 01958447277, 01933323281, 01933323282, or email address at summit@bylc.org from Sunday to Thursday between 9 am and 5 pm. (কোন তথ্য বা সহযোগিতার জন্য যোগাযোগ করুন +৮৮০ ১৯ ৫৮৪৪ ৭২৭৭, +৮৮০ ১৯ ৩৩৩২ ৩২৮১, +৮৮০ ১৯ ৩৩৩২ ৩২৮২ অথবা মেইল করুন summit@bylc.org তে রবি থেকে বৃহস্পতিবার সকাল ৯টা থেকে বিকাল ৫ টার মধ্যে।)</p>
                                        <br>

                                        <a style="font-weight: bold ; font-size: small">Selection procedure (নির্বাচন প্রক্রিয়া):</a><br>
                                        <p style="font-size: 13px;">All interested applicants must complete the application form. After the initial screening of the application forms, only the shortlisted participants will be invited to attend the final interview round. (আগ্রহী আবেদনকারীদের অবশ্যই এই আবেদনপত্রটি পূরণ করতে হবে। আবেদনপত্রটি প্রাথমিক যাচাই এর পরে নির্বাচিত আবেদনকারীদের সাথে চূড়ান্ত পর্বের মূল্যায়নের জন্য যোগাযোগ করা হবে।)</p>

								  <br><br>

						    </div>
			            </section>

			            <!-------------------------------- PERSONAL INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
			                <center>
								<a style="font-size: medium ; color: #800080; font-weight: bold">Personal Information</a><br>
								<a style="font-size: medium ; color: #800080; font-weight: bold">(ব্যক্তিগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your personal information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্যক্তিগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
							</center>
							<br><br>
							<a style="font-size: small ; font-weight: bold">Full Name (পূর্ণ নাম)</a><br>
							<a style="font-size: smaller ; color: gray; ">As per passport or national ID or academic certificate (পাসপোর্ট বা জাতীয় পরিচয়পত্র বা একাডেমিক সার্টিফিকেট অনুযায়ী) (ex. Zuhair Bin Zabbar)</a><br>
							<input type="text" class="form-control" id="name" name="full-name" value ="{{old('full-name')}}">
							<span style ="color: red">@error('full-name'){{$message}}@enderror </span>
							<br>

							<!-- Gender -->
							<a style="font-size: small ; font-weight: bold">Gender (লিঙ্গ)</a><br>
							<div class="form-row">
								<div id="radio">
                                    <div class="row">
									<div class="col-md-4">
                                            <input type="radio" name="gender" value="male" {{ old("gender") == 'male' ? 'checked' : '' }}> <a style="font-size: small">Male (পুরুষ)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="female" {{ old("gender") == 'female' ? 'checked' : '' }}> <a style="font-size: small">Female (নারী)</a>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="gender" value="other" {{ old("gender") == 'other' ? 'checked' : '' }}> <a style="font-size: small">Other (অন্যান্য)</a>
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
										<input type="text" class="form-control" id="date" name="date-of-birth"  value ="{{old('date-of-birth')}}" />
										<span class="input-group-append">
										  <span class="input-group-text bg-light d-block">
											<i class="fa fa-calendar"></i>
										  </span>
										</span>
									</div>
								
								
						        </div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Nationality (জাতীয়তা)</a><br>
									<input type="text" class="form-control" id="nationality" name="nationality" value ="{{old('nationality')}}">
								</div>
							</div>

							<br>
							<!-- Father and Mother Name -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Father Name (বাবার নাম)</a><br>
									<input type="text" class="form-control" id="father_name" name="father_name" value ="{{old('father_name')}}">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mother Name (মায়ের নাম)</a><br>
									<input type="text" class="form-control" id="mother_name" name="mother-name" value ="{{old('mother-name')}}">
								</div>
							</div>

							<br>
							<!-- Mobile and Emergency Contact -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Mobile Number (মোবাইল নম্বর)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="mobile" name="mobile-number" value ="{{old('mobile-number')}}">
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Emergency Contact Number (জরুরী প্রয়োজনে)</a><br>
									<a style="font-size: smaller ; color: gray; ">01700000000</a><br>
									<input type="text" class="form-control" id="emergency_contact" name="emergency-contact" value ="{{old('emergency-contact')}}">
								</div>
							</div>

							<br>
							<!-- Email -->
							<div class="row g-3">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Email Address (ইমেইল)</a><br>
									<input type="email" class="form-control" id="email"  name="email-address" value ="{{old('email-address')}}">
									<span style ="color: red">@error('email-address'){{$message}}@enderror </span>
								</div>
							</div>
							<br><br>
							

							<!-- Ethnicity and Disability -->
							<a style="font-size: small ; font-weight: bold">Do you belong to any ethnic community, i.e.Chakma, Marma, etc? (আপনি কি কোন ক্ষুদ্র নৃগোষ্ঠীর অন্তর্ভুক্ত, যেমন চাকমা, মারমা ইত্যাদি?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="ethnicCheck" value="yes"  {{ old("ethnicity") == 'yes' ? 'checked' : '' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="ethnicity" onclick="javascript:ethnicityCheck();"  id="not_ethnicCheck" value="no" {{ old("ethnicity") == 'no' ? 'checked' : '' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="ethnic" style="display:none">
									<a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
									<input type="text" class="form-control" id="ethnicity_name" name="ethnicity_name"  value ="{{old('ethnicity_name')}}">
								</div>
							</div><br>
							<a style="font-size: small ; font-weight: bold">Do you have any disability, i.e., visual or hearing disabilities, physical disability, etc.? (আপনার কি কোন প্রতিবন্ধিতা রয়েছে, যেমনঃ দৃষ্টি, শ্রবণ, শারীরিক প্রতিবন্ধিতা বা অন্যান্য?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="disableCheck" value="yes" {{ old("disability") == 'yes' ? 'checked' : '' }}> <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="disability" onclick="javascript:disabilityCheck();"  id="not_disableCheck" value="no" {{ old("disability") == 'no' ? 'checked' : '' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<div id="disable" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">If yes, please mention below. (অনুগ্রহ করে উল্লেখ করুন)</a>
                                    <input type="text" class="form-control" id="disability_name" name="disability_name"  value ="{{old('disability_name')}}">
                                </div>
							</div>

							<br><br>
							<!-- Present Address -->
							<div class="subHeading" style="font-weight: bold ">Present Address (বর্তমান ঠিকানা)</div><br>

							<div class="row g-3">
								<!-- Apartment -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
									<input type="text" class="form-control" id="per_apartment"  name="per_apartment" value ="{{old('per_apartment')}}">
								</div>	
								<!-- House -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
									<input type="text" class="form-control" id="per_house" name="per_house" value ="{{old('per_house')}}">
								</div>
								<!-- Road -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
									<input type="text" class="form-control" id="per_road" name="per_road" value ="{{old('per_road')}}">
								</div>
							</div>
							
							<div class="row g-3">
								<!-- Thana -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
									<input type="text" class="form-control" id="per_thana" name="per_thana" value ="{{old('per_thana')}}">
								</div>	
								<!-- District -->
								<div class="col-md-4">
									<a style="font-size: small ; font-weight: bold">District (জেলা)</a><br>
									<div class="input-group mb-3" class="dropdown-menu">
										<select class="form-select" id="per_district" name="per_district" >
										  <option selected>Select District</option>
										  <option value="Bagerhat" {{ old("per_district") == 'Bagerhat' ? 'selected' : '' }}>Bagerhat (বাগেরহাট)</option>
										  <option value="Bandarban" {{ old("per_district") == 'Bandarban' ? 'selected' : '' }}>Bandarban (বান্দরবান)</option>
										  <option value="Barguna" {{ old("per_district") == 'Barguna' ? 'selected' : '' }}>Barguna (বরগুনা)</option>
										  <option value="Barishal" {{ old("per_district") == 'Barishal' ? 'selected' : '' }}>Barishal (বরিশাল)</option>
										  <option value="Bhola" {{ old("per_district") == 'Bhola' ? 'selected' : '' }}>Bhola (ভোলা)</option>
										  <option value="Bogura" {{ old("per_district") == 'Bogura' ? 'selected' : '' }}>Bogura (বগুড়া)</option>
										  
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
									<input type="text" class="form-control" id="per_pc" name="per_pc" value ="{{old('per_pc')}}">
								</div>	
							</div>

							<br><br>
							<!-- Permanent Address -->
							<a style="font-size: small ; font-weight: bold">Is your permanent address similar to the present address? (আপনার স্থায়ী ঠিকানা ও বর্তমান ঠিকানা কি একই?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="yesCheck" value="yes" {{ old("same_address") == 'yes' ? 'checked' : '' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="noCheck" value="no" {{ old("same_address") == 'no' ? 'checked' : '' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>

                            <div id="ifYes" style="display:none">
                            <br>
							    <div class="subHeading" style="font-weight: bold ">Permanent Address (স্থায়ী ঠিকানা)</div><br>
                            
                                <div class="row g-3">
									<!-- Apartment -->
									<div class="col-md-4">
										<a style="font-size: small ; font-weight: bold">Apartment No (এপার্টমেন্ট নং)</a><br>
										<input type="text" class="form-control" id="apartment" name="apartment" value ="{{old('apartment')}}">
									</div>	
									<!-- House -->
									<div class="col-md-4">
										<a style="font-size: small ; font-weight: bold">House/Holding No. (বাসা/হোল্ডিং নং)</a><br>
										<input type="text" class="form-control" id="house" name="house" value ="{{old('house')}}">
									</div>
									<!-- Road -->
									<div class="col-md-4">
										<a style="font-size: small ; font-weight: bold">Road No./Village (রোড নং/গ্রাম)</a><br>
										<input type="text" class="form-control" id="road" name="road" value ="{{old('road')}}">
									</div>
								</div>
                                
                                <div class="row g-3">
                                    <!-- Thana -->
                                    <div class="col-md-4">
                                        <a style="font-size: small ; font-weight: bold">Thana/Upazila (থানা/উপজেলা)</a><br>
                                        <input type="text" class="form-control" id="thana" name="thana" value ="{{old('thana')}}">
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
                                        <input type="text" class="form-control" id="pc" name="pc" value ="{{old('pc')}}">
                                    </div>	
                                </div>
                            </div>

							<br><br>


							<!-- Educational -->
							<center>
								<a style="font-size: medium ; color: #800080 ; font-weight: bold">Educational Information</a><br>
								<a style="font-size: medium ; color: #800080 ;font-weight: bold">(শিক্ষাগত তথ্যাদি)</a><br>
								<a style="font-size: x-small">Please provide your educational information carefully</a><br>
								<a style="font-size: smaller">(অনুগ্রহ করে নিম্নের ব্শিক্ষাগত তথ্যাদি সঠিকভাবে পূরণ করুন)</a>
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

                            <!-- Secondary Level -->
							<a style="font-size: small ; font-weight: bold">Secondary Level (মাধ্যমিক শিক্ষা স্তর)</a><br>	
							<div class="form-row">			
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="secondary_level" value="SSC"  {{ old("secondary_level") == 'SSC' ? 'checked' : '' }}> <a style="font-size: small">SSC (এস এস সি)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="secondary_level" value="OLevels" {{ old("secondary_level") == 'OLevels' ? 'checked' : '' }}>  <a style="font-size: small">O'Levels (ও' লেভেল)</a>
										</div>
                                        <div class="col-md-4">
											<input type="radio" name="secondary_level" value="Dakhil"{{ old("secondary_level") == 'Dakhil' ? 'checked' : '' }}>  <a style="font-size: small">Dakhil (দাখিল)</a>
										</div>	
									</div>			
								</div>
							</div>
							<br>

							<!-- School Name -->
							<a style="font-size: small ; font-weight: bold">Name of School/Madrassa Attended (শিক্ষা প্রতিষ্ঠানের নাম)</a><br>
							<input type="text" class="form-control" id="school_name" name="school_name" value ="{{old('school_name')}}">
							<br>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Year of Passing -->
                                    <a style="font-size: small ; font-weight: bold">Year of Passing (পাশের সন)</a><br>
                                    <a style="font-size: smaller ; color: gray; ">Example: 2012</a><br>
                                    <input type="text" class="form-control" id="graduation_year_school" name="graduation_year_school" value ="{{old('graduation_year_school')}}">
                                    <br>        
                                </div>
                                <div class="col-md-6">
                                    <!-- Result -->
                                    <a style="font-size: small ; font-weight: bold">Result (ফলাফল)</a><br>
                                    <a style="font-size: smaller ; color: gray; ">Example (উদাহরণ): 2010 (২০১০)</a><br>
                                    <input type="text" class="form-control" id="school_result" name="school_result" value ="{{old('school_result')}}">
                                    <br>
                                </div>
                            </div>

                           <!-- Higher Secondary Level -->
							<a style="font-size: small ; font-weight: bold">Higher Secondary Level (উচ্চ মাধ্যমিক শিক্ষা স্তর)</a><br>	
							<div class="form-row">			
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="higher_secondary_level" value="HSC" {{ old("higher_secondary_level") == 'HSC' ? 'checked' : '' }}> <a style="font-size: small">HSC (এইস এস সি)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="higher_secondary_level" value="Alim" {{ old("higher_secondary_level") == 'Alim' ? 'checked' : '' }}> <a style="font-size: small">Alim (আলিম)</a>
										</div>	
									</div>
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="higher_secondary_level" value="ALevels" {{ old("higher_secondary_level") == 'ALevels' ? 'checked' : '' }} > <a style="font-size: small">A'Levels (এ' লেভেল)</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="higher_secondary_level" value="Diploma" {{ old("higher_secondary_level") == 'Diploma' ? 'checked' : '' }}> <a style="font-size: small">Diploma (ডিপ্লোমা)</a>
										</div>	
									</div>			
								</div>
							</div>
							<br>

                            <!-- College Name -->
							<a style="font-size: small ; font-weight: bold">Name of College/Madrassa Attended (শিক্ষা প্রতিষ্ঠানের নাম)</a><br>
							<input type="text" class="form-control" id="school_name" name="collage_name" value ="{{old('collage_name')}}">
							<br>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Year of Passing -->
                                    <a style="font-size: small ; font-weight: bold">Year of Passing (পাশের সন)</a><br>
                                    <a style="font-size: smaller ; color: gray; ">Example: 2012</a><br>
                                    <input type="text" class="form-control" id="graduation_year_college" name="graduation_year_college" value ="{{old('graduation_year_college')}}">
                                    <br>        
                                </div>
                                <div class="col-md-6">
                                    <!-- Result -->
                                    <a style="font-size: small ; font-weight: bold">Result (ফলাফল)</a><br>
                                    <a style="font-size: smaller ; color: gray; ">Example (উদাহরণ): 2010 (২০১০)</a><br>
                                    <input type="text" class="form-control" id="college_result" name="college_result" value ="{{old('college_result')}}">
                                    <br>
                                </div>
                            </div>
                            <br>

                            <!-- Whether admitted to undergraduation -->
                            <a style="font-size: small ; font-weight: bold">Did you get your admission to the undergraduate level? (আপনি কি আপনার পরবর্তী শিক্ষাগত স্তরে (স্নাতক) ভর্তি হয়েছেন?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="get_admission" onclick="javascript:ifUndergrad();" id="yes_undergrad" value="yes" {{ old("get_admission") == 'yes' ? 'checked' : '' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="get_admission" onclick="javascript:ifUndergrad();" id="no_undergrad" value="no" {{ old("get_admission") == 'no' ? 'checked' : '' }}> <a style="font-size: small">No, waiting for admission (না, ভর্তির জন্য অপেক্ষারত আছি)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
                                <div id="undergrad_level" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">Undergraduate Level (স্নাতক ডিগ্রী)</a><br>
                                    <div id="radio">
                                        <div class="row g-1">
                                            <div class="col-md-4">
                                                <input type="radio" name="undergrad_level" value="Bachelor" {{ old("undergrad_level") == 'Bachelor' ? 'checked' : '' }} > <a style="font-size: small">Bachelor's (স্নাতক)</a> 
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="undergrad_level" value="Fazil" {{ old("undergrad_level") == 'Fazil' ? 'checked' : '' }} > <a style="font-size: small">Fazil (ফাযিল)</a> 
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="undergrad_level" value="Others" {{ old("undergrad_level") == 'Others' ? 'checked' : '' }} > <a style="font-size: small">Others (অন্যান্য)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <br>


                            <!-- Any BYLC Program participated before -->
                            <a style="font-size: small ; font-weight: bold">Did you participate in any training program of BYLC (BBLT, BBLTJ, APL, YLS, YLB, YEB, ACE, CareerX, Career Bootcamp) before? 
                                (আপনি কি এর আগে কোনো বিওয়াইএলসি প্রোগ্রামে অংশগ্রহণ করেছিলেন?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="any_program" onclick="javascript:programPartipated();" id="yes" value="yes" {{ old("any_program") == 'yes' ? 'checked' : '' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="any_program" onclick="javascript:programPartipated();" id="no" value="no" {{ old("any_program") == 'no' ? 'checked' : '' }} > <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
                                <div id="program_participated" style="display:none">
                                    <div class="row g-1">
										<div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="BBLTJ" id="BBLTJ" name="BBLTJ" {{ old("BBLTJ") == 'BBLTJ' ? 'checked' : '' }} >
                                                <label class="form-check-label" for="flexCheckDefault">BBLTJ (বিবিএলটিজে)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="YLB" id="YLB" name="YLB" {{ old("YLB") == 'YLB' ? 'checked' : '' }} >
                                                <label class="form-check-label" for="flexCheckDefault">YLB (ওয়াইএলবি)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="CareerX" id="CareerX" name="CareerX" {{ old("CareerX") == 'CareerX' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">CareerX (ক্যারিয়ার এক্স)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-1">
										<div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="BBLT" id="BBLT" name="BBLT" {{ old("BBLT") == 'BBLT' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">BBLT (বিবিএলটি)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="YEB" id="YEB" name="YEB" {{ old("YEB") == 'YEB' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">YEB (ওয়াইইবি)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Career_Bootcamp" id="Career-Bootcamp" name="Career_Bootcamp" {{ old("Career_Bootcamp") == 'Career_Bootcamp' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">Career Bootcamp (ক্যারিয়ার বুটক্যাম্প)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-1">
										<div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="APL" id="APL" name="APL" {{ old("APL") == 'APL' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">APL (এপিএল)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="ACE" id="ACE" name="ACE" {{ old("ACE") == 'ACE' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">ACE (এইস)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="YLS" id="YLS" name="YLS" {{ old("YLS") == 'YLS' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">YLS (ওয়াইএলএস)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <br>

                            <!-- Applicant Type -->
                            <a style="font-size: small ; font-weight: bold">Applicant Type (আবেদনকারীর ধরণ)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="applicant_type" onclick="javascript:applicantType();"  id="student" value="Student" {{ old("applicant_type") == 'Student' ? 'checked' : '' }}> <a style="font-size: small">Student (শিক্ষার্থী)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="applicant_type" onclick="javascript:applicantType();"  id="professional" value="Young professional" {{ old("applicant_type") == 'Young professional' ? 'checked' : '' }}> <a style="font-size: small">Young professional (তরুণ পেশাজীবী)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
                                <div id="appl_type" style="display:none">
                                    <a style="font-size: small ; font-weight: bold">Employment Type (পেশার ধরন)</a>
                                    <div class="form-row">
                                        <div id="radio">
                                            <input type="radio" name="employment_type" value="Self Employed" {{ old("employment_type") == 'Self Employed' ? 'checked' : '' }} > <a style="font-size: small" >Self Employed</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="employment_type" value="Employed" {{ old("employment_type") == 'Employed' ? 'checked' : '' }}> <a style="font-size: small">Employed</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
							</div>
                            <br>


							<!-- Marketing Questionaires -->
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
								<a style="font-size: medium ; color: #800080 ; font-weight: bold">Short Essays</a><br>
								<a style="font-size: medium ; color: #800080 ; font-weight: bold">(সংক্ষিপ্ত প্রবন্ধ)</a><br>				
                            </center>
							<br>

							<a style="font-size: smaller">Consider composing your essay responses in a word document to copy and paste into the application and avoid losing your work. (একটি ডকুমেন্টে আপনার লিখাটি  টাইপ করুন এবং কপি করে  এপ্লিকেশন ফরমে পেস্ট করুন যাতে লিখাটি হারিয়ে না যায়)</a>
							<br>

                            <a style="font-size: small ; font-weight: bold">Q.1. Please write your short bio within 150 words. Use this opportunity to introduce yourself. (১৫০ শব্দের মধ্যে নিজের সম্পর্কে লিখুন। আপনি এই সুযোগটি নিজেকে উপস্থাপন করতে ব্যবহার করতে পারেন।)</a><br>
							<a style="font-size: small ; font-weight: bold">(“অর্থনৈতিক উন্নতির চেয়ে পরিবেশকে রক্ষা করা বেশী গুরুত্বপূর্ণ” আপনি কি উপরোক্ত উক্তির সাথে একমত? আপনার উত্তরের যথার্থতা বিশ্লেষণ করুন)</a><br>
							<a style="font-size: small ; color: gray; ">Word limit: 150 words maximum (সর্বোচ্চ ১৫০ শব্দে)</a>
							<br>
							<div class="form-floating">
								<textarea class="form-control" rows="5" style="height:100%;" placeholder="Leave a comment here" id="answer" name="narrative_writing_1">{{ old('narrative_writing_1') }}</textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div><br>

                            <a style="font-size: small ; font-weight: bold">Q.2. Please read the following reflective question carefully and answer. Your essay should be a minimum of 200 words and be based on your personal opinions, knowledge, and experiences rather than acquired sources. Your responses will be judged on clarity, logical thinking, articulation, and structure. (অনুগ্রহ করে নিম্নলিখিত প্রশ্নটি মনযোগ দিয়ে পড়ুন এবং উত্তর দিন। আপনার উত্তরটি স্বচ্ছতা, যুক্তিযুক্ত চিন্তা, নৈতিকতা, স্পষ্ট লিখন এবং বাক্যের গঠন অনুসারে গণ্য করা হবে।)</a><br><br>
							<a style="font-size: small ; font-weight: bold">"বাংলাদেশের অগ্রযাত্রা: আমি থেকে আমরা" what is the first thing that comes into your mind when you hear this phrase? Explain in your own words how important it is to be united for a progressive nation. "বাংলাদেশের অগ্রযাত্রা: আমি থেকে আমরা"  বাক্যাংশটি শোনার পর আপনার মনে প্রথম কি অনুভূতি জাগ্রত হয়? প্রগতিশীল জাতি গঠনে ঐক্যবদ্ধ হওয়া কতটা জরুরি তা আপনার নিজের ভাষায় ব্যাখ্যা করুন।</a><br>
							<a style="font-size: small ; color: gray; ">Word limit: 200 words minimum (সর্বোচ্চ ২০০ শব্দে)</a>
							<br>
							<div class="form-floating">
								<textarea class="form-control" rows="5" style="height:100%;" placeholder="Leave a comment here" id="answer" name="narrative_writing_2"> {{ old('narrative_writing_2') }}</textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div><br>

							<br>
							<a style="font-size: small ; color: black; ">Please follow the link below to check our terms of data usage and read them carefully before you submit the form (ফর্ম জমা দেওয়ার পূর্বে অনুগ্রহ করে নিচের লিঙ্কটি থেকে আমাদের ডেটা ব্যবহারের শর্তাবলী পড়ুন ও চেকবক্সে টিক চিহ্ন দিন)</a><br>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="agree_terms">
								<a style="font-size: smaller">I have read the terms and agree to the terms of data usage (আমি তথ্যের ব্যবহার বিষয়ক শর্তাবলী পড়েছি এবং সম্মতি প্রদান করছি)</a>
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
        // window.onload = function() {
        //     document.getElementById('ifYes').style.display = 'none';
        // }
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
        function programPartipated(){
            if (document.getElementById('yes').checked) {
                document.getElementById('program_participated').style.display = 'block';
            }
            else{
                document.getElementById('program_participated').style.display = 'none';
            }
        }
        function applicantType(){
            if (document.getElementById('professional').checked) {
                document.getElementById('appl_type').style.display = 'block';
            }
            else{
                document.getElementById('appl_type').style.display = 'none';
            }
        }
        function ifUndergrad(){
            if (document.getElementById('yes_undergrad').checked) {
                document.getElementById('undergrad_level').style.display = 'block';
            }
            else{
                document.getElementById('undergrad_level').style.display = 'none';
            }
        }
    </script>

</body>
</html>