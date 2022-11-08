<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>APL Form</title>
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
	<div class="page-content" style="background:	#800080">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="{{asset('images/bylc-logo.png')}}" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold ">The Art and Practice of Leadership ({{$batchinfo->batch_name}}) Application Form</div>
					<div class="subHeading" >দ্যা আর্ট অ্যান্ড প্র্যাকটিস অফ লিডারশিপ (এপিএল) আবেদনপত্র</div>
				</div>
		      
				<form class="form-register" method="post" action="{{url('/apl/store')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">

		        		<!-------------------------------- GUIDELINES ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
						<input type="hidden" class="form-control" id="program_name"  name="program_name" value="APL" >
						<input type="hidden" class="form-control" id="program_name"  name="program_batch_id" value="{{$batchinfo->batch_id}}" >
			            <section>
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="sentence" style="font-weight: bold ">About Art and Practice of Leadership: </div>
										<div class="sentence">The Art and Practice of Leadership (APL) is a seven-day-long leadership and skills development national workshop. Conceptualized at Harvard University, this workshop provides participants with an exceptional opportunity to learn about leadership during a crisis. The participants embark on a stimulating personal journey that develops their leadership potential and helps them gain new competencies to better compete in the fast-changing world. The ongoing pandemic is causing the global economy and job market to change faster than ever before. At the same time, this is creating opportunities for youth to lead change-making initiatives with new skills. In order to get crisis ready and equip yourself with the cutting-edge skills for the post-pandemic world, commence your journey on leadership with high potential youth from all over Bangladesh and also become part of a powerful network of young leaders.</div>
										<br>
										<div class="sentence" style="font-weight: bold ">Eligibility: </div>
                                        <div class="sentence">Only third or fourth-year undergraduate students and first or second-year full-time master’s students (who have completed their bachelor’s degree not more than two years ago) from an accredited university in Bangladesh are eligible to apply for this seven-day-long national workshop on leadership and professional development.</div>
                                        <br>
                                        <a style="font-weight: bold ; font-size: small">Application Deadline: </a> <a style="font-size: small">October 9, 2021</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Class Time: </a> <a style="font-size: small">6:00 pm–8:40 pm</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Mode of the Program: </a> <a style="font-size: small">Online</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Program Date: </a> <a style="font-size: small">October 30–November 5, 2021</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">Registration Fee: </a> <a style="font-size: small">The registration fee for APL is BDT 5,000, which includes BDT 1,000 for lifetime membership of BYLC Graduate Network (BGN). The regular registration fee of APL is BDT 7,000 but in light of the ongoing pandemic, we are offering a general BDT 2,000 scholarship for all registrants. As a leadership institute, BYLC believes in youth development and will cover the remaining costs through its own consulting and training work and through other funding. If you are already a BYLC graduate and a BGN member, the BGN registration fee will not be applicable for you and you will have to pay BDT 4,000 for registration. Any other financial waiver will not be available.</a> 
                                        <br><br>                                    
                                        <a style="font-size: small">Please take your time and carefully fill out the following application form. Shortlisted applicants will be invited for an interview. If you finally get selected, you will receive the registration offer to enrol in this program.</a>
                                        <br><br>
									</div>
									<div class="col-md-6">
                                        <div class="sentence" style="font-weight: bold ">আর্ট অ্যান্ড প্র্যাকটিস অফ লিডারশিপ সম্পর্কে: </div>
										<div class="sentence">দ্যা আর্ট অ্যান্ড প্র্যাকটিস অফ লিডারশিপ (এপিএল) একটি ৭ দিনের নেতৃত্ব এবং দক্ষতা উন্নয়নের জাতীয় কর্মশালা। হার্ভার্ড বিশ্ববিদ্যালয়ের ধারণাগত, এই কর্মশালা অংশগ্রহণকারীদের কোনো সঙ্কটের সময় নেতৃত্ব সম্পর্কে শেখার একটি ব্যতিক্রমী সুযোগ সরবরাহ করে। অংশগ্রহণকারীরা একটি উদ্দীপনামূলক আত্মবিশ্লেষণধর্মী যাত্রা শুরু করে যা তাদের নেতৃত্বের সম্ভাবনা বিকশিত করে এবং দ্রুত পরিবর্তনশীল বিশ্বের সাথে তাল মিলিয়ে চলার জন্য নতুন দক্ষতা অর্জন করে। বর্তমান মহামারীটি পুরো বিশ্ব অর্থনীতি এবং চাকরীর বাজারকে আগের চেয়ে দ্রুত পরিবর্তিত করছে একই সাথে, এটি নতুন প্রজন্মের জন্য নতুন দক্ষতার সাথে উত্থানের সুযোগ তৈরি করছে। সংকট তৈরি হওয়ায় এবং মহামারী-পরবর্তী বিশ্বজুড়ে আধুনিক দক্ষতার সাথে নিজেকে গড়ে তোলার জন্য, সারা বাংলাদেশ থেকে সম্ভাব্য যুবকদের সাথে আপনার যাত্রা শুরু করুন এবং যুব নেতাদের একটি শক্তিশালী নেটওয়ার্কের অংশ হয়ে উঠুন।</div>
										<br>
										<div class="sentence" style="font-weight: bold ">যোগ্যতা: </div>
                                        <div class="sentence">কেবলমাত্র তৃতীয় বা চতুর্থ বর্ষের স্নাতক ছাত্র এবং প্রথম বা দ্বিতীয়-বর্ষের পূর্ণকালীন স্নাতকোত্তর শিক্ষার্থীরা (যারা দুই বছরের কম সময়ের মধ্যে স্নাতক ডিগ্রি অর্জন করেছেন) সাত দিনের নেতৃত্ব এবং পেশাদার বিকাশের এই জাতীয় কর্মশালার জন্য আবেদন করতে পারবেন।</div>
                                        <br>
                                        <a style="font-weight: bold ; font-size: small">আবেদনের শেষ সময়: </a> <a style="font-size: small">অক্টোবর ৯, ২০২১</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">ক্লাসের সময়: </a> <a style="font-size: small">সন্ধ্যা ৬:০০–রাত ৮:৪০</a>
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">প্রোগ্রামের ধরণ: </a> <a style="font-size: small">অনলাইন</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">প্রোগ্রামের সময়কাল: </a> <a style="font-size: small">অক্টোবর ৩০–নভেম্বর ৫, ২০২১</a> 
                                        <br><br>
                                        <a style="font-weight: bold ; font-size: small">রেজিস্ট্রেশন ফি: </a> <a style="font-size: small">এপিএলের রেজিস্ট্রেশন ফি ৫,০০০ টাকা, যা্র মধ্যে বিওয়াইএলসি গ্রাজুয়েট নেটওয়ার্কের (বিজিএন) আজীবন সদস্য ফি ১,০০০ টাকা অন্তর্ভুক্ত রয়েছে। মূল রেজিস্ট্রেশন ফি ছিল ৭,০০০ টাকা; কোভিড-১৯ মহামারীজনিত পরিস্থিতির কারণে ২,০০০ টাকা স্কলারশিপ হিসাবে দেওয়া হচ্ছে। নেতৃত্বদানকারী প্রতিষ্ঠান হিসাবে, বিওয়াইএলসি যুব বিকাশে বিশ্বাস করে এবং বাকী ব্যয়গুলি নিজের পরামর্শ এবং প্রশিক্ষণ কাজের মাধ্যমে এবং অন্যান্য অর্থায়নের মাধ্যমে পূরণ করবে। আপনি যদি ইতিমধ্যে বিওয়াইএলসি গ্রাজুয়েট এবং একজন বিজিএন সদস্য হন, আপনার জন্য বিজিএন রেজিস্ট্রেশন ফি প্রযোজ্য হবে না এবং আপনাকে রেজিস্ট্রেশনের জন্য ৪,০০০ টাকা দিতে হবে। অন্য কোনও আর্থিক বৃত্তি প্রযোজ্য হবে না।</a> 
                                        <br><br>                                    
                                        <a style="font-size: small">অনুগ্রহ করে সময় নিন এবং সাবধানতার সাথে নীচের আবেদন ফর্মটি পূরণ করুন। সংক্ষিপ্ত তালিকাভুক্ত আবেদনকারীদের একটি সাক্ষাত্কারের জন্য আমন্ত্রন করা হবে। আপনি যদি চূড়ান্তভাবে নির্বাচিত হন তবে এই প্রোগ্রামটিতে রেজিস্ট্রেশনের জন্য আপনাকে অফার করা হবে।</a>
                                        <br><br>
									</div>
								  </div>
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
										<input type="date" class="form-control" id="dateinfo" name="date-of-birth" value ="{{old('date-of-birth')}}" />
										
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
								<div class="col-md-6">
									<!-- NID -->
									<a style="font-size: small ; font-weight: bold">NID/Bith Certificate/Paport No</a><br>
									<input type="text" class="form-control" name="nid" id="nid" name="nid" value ="{{old('nid')}}" >
									<span style ="color: red">@error('nid'){{$message}}@enderror </span>
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
							</div>
							<br>
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
										  @foreach($district as $dis)
												<option value="{{ $dis->name }}" {{ old("per_district") ==  $dis->name  ? 'selected' : '' }}>{{ $dis->name }}</option>
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
												<option value="{{ $div->name }}"{{ old("per_division") ==  $div->name  ? 'selected' : '' }}>{{ $div->name }}</option>
											@endforeach									 
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
							<!-- Permanent Address -->
							<a style="font-size: small ; font-weight: bold">Is your permanent address similar to the present address? (আপনার স্থায়ী ঠিকানা ও বর্তমান ঠিকানা কি একই?)</a><br>
							<div class="form-row">
								<div id="radio">
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="yesCheck" value="yes" {{ old("same_address") == 'yes' ? 'checked' : '' }} > <a style="font-size: small">Yes (হ্যাঁ)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="same_address" onclick="javascript:yesnoCheck();"  id="noCheck" value="no" {{ old("same_address") == 'no' ? 'checked' : '' }}> <a style="font-size: small">No (না)</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
												@foreach($district as $dis)
													<option value="{{ $dis->name }}" {{ old("district") ==  $dis->name  ? 'selected' : '' }}>{{ $dis->name }}</option>
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
													<option value="{{ $div->name }}"{{ old("division") ==  $div->name  ? 'selected' : '' }}>{{ $div->name }}</option>
												@endforeach
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

                            <!-- Medium -->
							<a style="font-size: small ; font-weight: bold">Current Year of Study (চলতি শিক্ষাবর্ষ)</a><br>	
							<div class="form-row">			
								<div id="radio">
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="current_year_study" value="Honors 3rd year" {{ old("current_year_study") == 'Honors 3rd year' ? 'checked' : '' }} > <a style="font-size: small">Honor's 3rd year (অনার্স ৩য় বর্ষ)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="current_year_study" value="Graduation completed" {{ old("current_year_study") == 'Graduation completed' ? 'checked' : '' }}> <a style="font-size: small">Graduation completed (স্নাতক সম্পন্ন)</a>
										</div>	
									</div>
									<div class="row g-1">
										<div class="col-md-4">
											<input type="radio" name="current_year_study" value="Honors 4th year" {{ old("current_year_study") == 'Honors 4th year' ? 'checked' : '' }} > <a style="font-size: small">Honor's 4th year (অনার্স ৪র্থ বর্ষ)</a>
										</div>
										<div class="col-md-4">
											<input type="radio" name="current_year_study" value="Masters" {{ old("current_year_study") == 'Masters' ? 'checked' : '' }}> <a style="font-size: small">Masters (মাস্টার্স)</a>
										</div>	
									</div>			
								</div>
							</div>
							<br>

							<!-- Institution Name -->
							<a style="font-size: small ; font-weight: bold">Name of Institution (প্রতিষ্ঠানের নাম)</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: University of Dhaka</a><br>
							<input type="text" class="form-control" id="institution" name="institution" value ="{{old('institution')}}">
							<br>

                            <!-- Year of Graduation -->
							<a style="font-size: small ; font-weight: bold">Year of Graduation / Expected Year of Graduation (স্নাতক সম্পন্নের/সম্ভাব্য সম্পন্নের সন)</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 2012</a><br>
							<input type="text" class="form-control" id="graduation_year" name= "graduation_year" value ="{{old('graduation_year')}}">
							<br>

                            <!-- CGPA -->
							<a style="font-size: small ; font-weight: bold">CGPA (সিজিপিএ)</a><br>
                            <a style="font-size: smaller ; color: gray; ">Example: 3.48</a><br>
							<input type="text" class="form-control" id="cgpa" name="cgpa" value ="{{old('cgpa')}}">
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

							<a style="font-size: smaller">Please answer the following questions in your own words. The quality of your answers will be assessed based on your articulation, logical thinking, framing, and authenticity.</a>
							<a style="font-size: smaller ; color:red">(*Any sort of plagiarism will cause immediate disqualification of the application)</a><br>
							<a style="font-size: smaller">অনুগ্রহ করে আপনার নিজের মত করে প্রশ্নগুলোর উত্তর দিন। স্পষ্টতা, যৌক্তিকতা, সুসংগঠন এবং মৌলিকতার ভিত্তিতে আপনার উত্তরের মান মূল্যায়ন করা হবে।</a>
							<a style="font-size: smaller ; color:red">(*কোন ধরনের অসৎ উপায় অবলম্বন করলে আবেদনকারীর আবেদন বাতিল বলে গন্য হবে)</a><br><br>
							
                            <a style="font-size: small ; font-weight: bold">Q.1. Why do you want to do this program? How would you like this program to contribute to your personal and professional development?</a><br>
							<a style="font-size: small ; font-weight: bold">(“অর্থনৈতিক উন্নতির চেয়ে পরিবেশকে রক্ষা করা বেশী গুরুত্বপূর্ণ” আপনি কি উপরোক্ত উক্তির সাথে একমত? আপনার উত্তরের যথার্থতা বিশ্লেষণ করুন)</a><br>
							<a style="font-size: small ; color: gray; ">Maximum 200 words (সর্বোচ্চ ২০০ শব্দ)</a>
							<br>
							<div class="form-floating">
								<textarea class="form-control" rows="8" style="height:100%;" placeholder="Leave a comment here" id="answer" name="narrative_writing_1">{{ old('narrative_writing_1') }}</textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div><br>

                            <a style="font-size: small ; font-weight: bold">Q.2. Have you exercised leadership in your professional or personal life? Share an experience if you have one.</a><br>
							<a style="font-size: small ; font-weight: bold">(আপনি কি আপনার পেশাগত বা ব্যক্তিগত জীবনে নেতৃত্ব চর্চা করেছেন? অনুগ্রহ করে আপনার অভিজ্ঞতা বর্ণনা করুন।)</a><br>
							<a style="font-size: small ; color: gray; ">Maximum 200 words (সর্বোচ্চ ২০০ শব্দ)</a>
							<br>
							<div class="form-floating">
								<textarea class="form-control" rows="8" style="height:100%;" placeholder="Leave a comment here" id="answer" name="narrative_writing_2">{{ old('narrative_writing_2') }}</textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div><br>

							<br>
							<a style="font-size: small ; color: black; ">Please follow the link below to check our terms of data usage and read them carefully before you submit the form.</a><br>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="agree_terms">
								<a style="font-size: smaller">I agree to the terms of data usage</a>
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