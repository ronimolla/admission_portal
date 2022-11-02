<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Financial Aid Form</title>
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
	<div class="page-content" style="background: darkgreen">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<img src="images/bylc-logo.png" alt="" width="280" height="50"> <br><br>
					<div class="Heading" style="font-weight: bold "> Financial Aid Application Form</div>
					<div class="subHeading" >(আর্থিক সহায়তার আবেদনপত্র)</div>
				</div>
		      
				<form class="form-register" method="post" action="{{url('financialaid-form')}}" name="add_school" id="add_school" novalidate="novalidate">{{csrf_field()}}
		        	<div id="form-total">


			            <!-------------------------------- PERSONAL INFORMATION ----------------------------------->
			            <h2>
							<!-- form template -->
			            </h2>
			            <section>
			                <center>
								<a style="font-size: larger ; color: darkgreen; font-weight: bold">Section A — Applicant’s Information (আবেদনকারীর তথ্য)</a><br>
							</center>
							<br><br>
							
							
                            <!-- Full name -->
							<a style="font-size: small ; font-weight: bold">Full Name (পূর্ণ নাম)</a><br>
							<a style="font-size: smaller ; color: gray; ">As per passport or national ID or academic certificate (পাসপোর্ট বা জাতীয় পরিচয়পত্র বা একাডেমিক সার্টিফিকেট অনুযায়ী) (ex. Zuhair Bin Zabbar)</a><br>
							<input type="text" class="form-control" name="full_name" id="full_name" value ="{{$studentinfo->full_name}}" readonly>
							<br>
							<a style="font-size: small ; font-weight: bold">Program Batch-Name</a>
							<div class="input-group mb-3">
								<select class="form-select" id="division" name="program_code">
								@foreach($batchinfo as $info)
									<option value="{{ $info->batch_id }}">{{ $info->batch_name }}</option>
								@endforeach
								</select>
							</div>
							<!-- BGN Member or not -->
							<a style="font-size: small ; font-weight: bold">If you are already a BGN member, please mention BGN membership ID (আপনি যদি বিজিএন মেম্বার হয়ে থাকেন অনুগ্রহ করে মেম্বারশীপ আইডি টি উল্লেখ করুন)</a><br>
							<input type="text" class="form-control" name="bgn_id" id="bgn_id" >
							<br>



							<!-- Reference, Email, Contact -->
							<div class="row g-1">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Reference ID (রেফারেন্স আইডি)</a><br>
									<input type="text" class="form-control" name="student_id" id="student_id"  value ="{{$studentinfo->student_id}}" readonly>
								</div>
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Email (ইমেইল)</a><br>
									<input type="text" class="form-control" name="email" id="email"  value ="{{$studentinfo->email_address}}" readonly>
								</div>
							</div>
							<div class="row g-1">
								<div class="col-md-6">
									<a style="font-size: small ; font-weight: bold">Contact number (যোগাযোগ নাম্বার)</a><br>
									<input type="text" class="form-control" name="contact" id="contact"  value ="{{$studentinfo->personal_phone_no}}" >
								</div>
							</div>
							<br><br>
	
							<!-- Family Financial Information -->
							<center>
								<a style="font-size: larger ; color: darkgreen; font-weight: bold">Section B — Family Financial Information (পারিবারিক আর্থিক তথ্য)</a><br>
							</center>
							<br><br>

							<!-- Number of family members -->
							<a style="font-size: small ; font-weight: bold">Number of family members live together (পরিবারের সদস্য সংখ্যা)</a><br>
							<input type="text" class="form-control" name="family_members" id="family_members" >
							<br>

							<!-- Earning Person Number -->
							<a style="font-size: small ; font-weight: bold">Number of earning person(s) in the family (পরিবারের উপার্জনকারী ব্যক্তির সংখ্যা)</a><br>
							<input type="text" class="form-control" name="earning_person_number" id="earning_person_number" >
							<br>

							<!-- Earning Person in family -->
							<a style="font-size: small ; font-weight: bold">Earning person in the family (পরিবারের উপার্জনকারী ব্যক্তি)</a><br>
							<div class="row g-1">
								<div class="col-md-4">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" onclick="javascript:FatherIncome();"  id="fatherCheck" name="father" value="Father">
										<label style="font-size: 14px;">Father (পিতা)</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" onclick="javascript:MotherIncome();"  id="motherCheck" name="mother" value="Mother">
										<label style="font-size: 14px;">Mother (মাতা)</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" onclick="javascript:OtherIncome();"  id="otherCheck" name="others"value="Others">
										<label style="font-size: 14px;">Others (অন্যান্য উপার্জনকারী)</label>
									</div>
								</div>
							</div>
							<br>

							<!-- Father Income Info -->
							<div id="ifFather" style="display:none">
								<a style="font-size: large ; font-weight: bold; color: green;">Father's details (পিতার বিবরণ)</a><br>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Father's  name (পিতার নাম)</a><br>
										<input type="text" class="form-control" name="father_name" id="father_name" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Father's contact number (পিতার যোগাযোগ নাম্বার)</a><br>
										<input type="text" class="form-control" name="father_contact_number" id="father_contact_number" >
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Father's occupation (পিতার পেশা)</a><br>
										<input type="text" class="form-control" name="father_occupation" id="father_occupation">
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Father's organization name (পিতার প্রতিষ্ঠানের নাম)</a><br>
										<input type="text" class="form-control" name="father_orgazation_name" id="father_orgazation_name">
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Father's monthly income (পিতার মাসিক আয়)</a><br>
										<input type="text" class="form-control" name="father_monthly_income" id="father_monthly_income">
									</div>
								</div>
							<br>
							</div>

							<!-- Mother Income Info -->
							<div id="ifMother" style="display:none">
								<a style="font-size: large ; font-weight: bold; color: green;">Mother's details (মাতার বিবরণ)</a><br>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Mother's name (মাতার নাম)</a><br>
										<input type="text" class="form-control" name="mother_name" id="mother_name" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Mother's contact number  (মাতার যোগাযোগ নাম্বার)</a><br>
										<input type="text" class="form-control" name="mother_contact_number" id="mother_contact_number" >
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Mother's occupation (মাতার পেশা)</a><br>
										<input type="text" class="form-control" name="mother_occupation" id="mother_occupation">
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Mother's organization name (মাতার প্রতিষ্ঠানের নাম)</a><br>
										<input type="text" class="form-control" name="mother_orgazation_name" id="mother_orgazation_name">
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Mother's monthly income (মাতার মাসিক আয়)</a><br>
										<input type="text" class="form-control" name="mother_monthly_income" id="mother_monthly_income">
									</div>
								</div>
								<br>
							</div>

							<!-- Other Income Info -->
							<div id="ifOther" style="display:none">
								<a style="font-size: medium ; font-weight: bold; color: green;">Others earning person's details (অন্যান্য উপার্জনকারীর বিবরণ)</a><br>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Name (নাম)</a><br>
										<input type="text" class="form-control" name="other_name" id="other_name" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Relation with the applicant (আবেদন কারীর সাথে সম্পর্ক)</a><br>
										<input type="text" class="form-control" name="relation" id="relation" >
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Contact number (যোগাযোগ নাম্বার)</a><br>
										<input type="text" class="form-control" name="other_contact" id="other_contact">
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Occupation (পেশা)</a><br>
										<input type="text" class="form-control" name="other_occupation" id="other_orgazation_name">
									</div>
								</div>
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Organization name (প্রতিষ্ঠানের নাম)</a><br>
										<input type="text" class="form-control" name="other_organization_name" id="other_monthly_income">
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Monthly income (মাসিক আয়)</a><br>
										<input type="text" class="form-control" name="other_monthly_income" id="other_monthly_income">
									</div>
								</div>
								<br>
							</div>

							<a style="font-size: small ; font-weight: bold">Kindly click on Add more if you have more than one other earning person (অন্যান্য উপার্জনকারীর সংখ্যা একাধিক হলে অনুগ্রহকরে Add more এ ক্লিক করুন)</a>
							<br><br>
								

							<!-- Total monthly income of fixed asset -->
							<a style="font-size: small ; font-weight: bold">Total monthly income from any fixed asset, e.g. house rent, farming (নির্ধারিত উৎস থেকে মাসিক আয়, যেমন- বাড়ি ভাড়া, কৃষিকাজ)</a><br>
							<input type="text" class="form-control" name="monthly_fixedasset_income" id="monthly_fixedasset_income" >
							<br><br>



						
							<!-- Expenditure Information -->
							<center>
								<a style="font-size: larger ; color: darkgreen ; font-weight: bold">Section C — Expenditure Information (খরচ সম্পর্কিত তথ্য)</a><br>
							</center>
							<br><br>
							<a style="font-size: medium ; color: green ; font-weight: bold">Educational expenses (monthly average) শিক্ষাখাতে ব্যয় (মাসিক গড়ে)</a><br><br>

							<div class="form-row">
								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Tuition and fees (টিউশন ফি)</a><br>
										<input type="text" class="form-control" name="tution_fees" id="tution_fees" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Books and supplies (বই ও আনুষঙ্গিক)</a><br>
										<input type="text" class="form-control" name="book&supply" id="book&supply" >
									</div>
								</div>

								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Living expenses if you live without family, e.g. hostel (পরিবার ব্যতীত থাকলে থাকার খরচ, যেমন হোস্টেল)</a><br>
										<input type="text" class="form-control" name="living_expenses" id="living_expenses" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Total educational expenses</a><br>
										<a style="font-size: small ; font-weight: bold">(সর্বমোট ব্যয়)</a><br>
										<input type="text" class="form-control" name="total_educational_expense" id="total_educational_expense" >
									</div>
								</div>

								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Personal expenses (ব্যক্তিগত ব্যয়)</a><br>
										<input type="text" class="form-control" name="personal_expenses" id="personal_expenses">
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Transportation expenses (যাতায়াত ব্যয়)</a><br>
										<input type="text" class="form-control" name="transportation_expenses" id="transportation_expenses" >
									</div>
								</div>

								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Parent’s contribution (অভিভাবকের অনুদান)</a><br>
										<input type="text" class="form-control" name="parent_contribution" id="parent_contribution" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Student’s personal contribution (শিক্ষার্থীর ব্যক্তিগত অনুদান)</a><br>
										<input type="text" class="form-control" name="own_contribution" id="own_contribution" >
									</div>
								</div>

								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Total earnings to cover the educational expenses</a><br>
										<input type="number" class="form-control" name="total_earn" id="total_earn" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Scholarship/Tuition fee Waiver amount (বৃত্তি)</a><br>
										<input type="number" class="form-control" name="schlarship" id="schlarship" >
									</div>
								</div>

								<div class="row g-1">
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Other family members’ contribution (বাড়ির অন্যান্য সদস্যের অনুদান)</a><br>
										<input type="number" class="form-control" name="family_menber_contribution" id="family_menber_contribution" >
									</div>
									<div class="col-md-6">
										<a style="font-size: small ; font-weight: bold">Total resources (সর্বমোট তহবিল)</a><br>
										<input type="number" class="form-control" name="total_resources" id="total_resources" >
									</div>
								</div>
							</div>
							<br><br>

							<a style="font-size: small ; font-weight: bold">Briefly state your reason to apply for the financial aid to participate in the Building Bridges through Leadership Training program. (বিল্ডিং ব্রিজেস থ্রু লিডারশীপ ট্রেনিং প্রোগ্রামে অংশগ্রহণের জন্য আর্থিক সহায়তা চাওয়ার কারণ বিশদ ভাবে উল্লেখ করুন)</a><br>
							<a style="font-size: x-small  ; color: gray;">Please elaborate your family financial situation; how expenses are covered, and if any extra expenses are incurred</a><br>
							<div class="form-floating">
								<textarea class="form-control" rows="7" style="height:100%;" placeholder="Leave a comment here" name="reasoning" id="answer"></textarea>
								<label for="floatingTextarea">Write answer here</label>
							</div>
							<br><br>

							<!-- References  -->
							<center>
								<a style="font-size: larger ; color: darkgreen ; font-weight: bold">Section D—References (তথ্যসূত্র)</a><br>
							</center>
							<br>
							<a style="font-size: small ;  font-weight: bold">With whom BYLC Financial Aid Committee will communicate for information verification? (তথ্য যাচাইয়ের জন্য বিওয়াইএলসি আর্থিক সহায়তা কমিটি কার সঙ্গে যোগাযোগ করবে?)</a><br>					
							<div class="form-row">
								<div id="radio">
									<div class="row g-3">
										<div class="col-md-4">
											<input type="radio" name="verification_person" id="father" name="communication_person" value="Father"> <a style="font-size: small">Father (পিতা)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="verification_person" id="mother" name="communication_person" value="Mother"> <a style="font-size: small">Mother (মাতা)</a> 
										</div>
										<div class="col-md-4">
											<input type="radio" name="verification_person" id="other" name="communication_person" value="Others"> <a style="font-size: small">Others (অন্যান্য)</a> 
										</div>
									</div> 
								</div>
							</div>
							<br>
							<div >

							<br>
							</div>
							
							<a style="font-size: x-small ; color: gray; ">Declaration:</a><br>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="agree_terms">
								<a style="font-size: smaller">I hereby certify that the above information is true and correct to the best of my knowledge and belief. In case any of the above information is found to be false, misleading, or misrepresenting, I am aware that I may be held liable for it, and my registration can be terminated. (আমি প্রত্যয়ন করছি যে, উপরের সকল তথ্য সঠিক ও সত্য। যদি এই তথ্যের কোনো কিছু মিথ্যা বা ভুল পাওয়া যায় তবে এজন্য আমিই দায়ী, এবং আমার রেজিস্ট্রেশন বাতিল বলে গণ্য হবে)</a>
							</div>

							<br><br>
							<center><button type="submit" class="btn btn-primary">SUBMIT</button></center>

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

		function FatherIncome(){
            if (document.getElementById('fatherCheck').checked) {
                document.getElementById('ifFather').style.display = 'block';
            }
            else{
                document.getElementById('ifFather').style.display = 'none';
            }
        }

		function MotherIncome(){
            if (document.getElementById('motherCheck').checked) {
                document.getElementById('ifMother').style.display = 'block';
            }
            else{
                document.getElementById('ifMother').style.display = 'none';
            }
        }

		function OtherIncome(){
            if (document.getElementById('otherCheck').checked) {
                document.getElementById('ifOther').style.display = 'block';
            }
            else{
                document.getElementById('ifOther').style.display = 'none';
            }
        }

    </script>


</body>
</html>