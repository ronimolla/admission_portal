@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
    <div class="content">

        <div class="bg-white border rounded">           
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto rounded-circle">
                                <!-- <img src="{{asset('assets/img/user/u6.jpg')}}" alt="user image"> -->
                                <img src="{{asset('assets/img/user/img.png')}}" alt="user image">
                            </div>

                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$personalinfo->full_name}}</h4>
                                <p>{{$contactinfo->email_address}}</p><br>
                                 <a   class="btn btn-primary" href="{{ url('preselection/edit/'.$questionaryinfo->student_id.'/'.$questionaryinfo->program_batch_id)}}">Preselection</a> 
                            </div>
                        </div>

                        <hr class="w-100">

                        <div class="contact-info pt-4">
                            <h5 class="text-dark mb-1">Contact Information</h5>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Student ID</p>
                            <p>{{$personalinfo->student_id}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Program Name</p>
                            <p>{{$questionaryinfo->program_name }}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                            <p>{{$contactinfo->email_address}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>{{$contactinfo->personal_phone_no}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                            <p>{{$personalinfo->dob}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
                            <p class="pb-3 social-button">
                                <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                                <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Personal-info" data-toggle="tab" href="#info" role="tab" aria-controls="settings" aria-selected="false">Peronal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="personal-address" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Address Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="educational-info" data-toggle="tab" href="#educational" role="tab" aria-controls="education" aria-selected="true">Educational Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="answer" data-toggle="tab" href="#ans" role="tab" aria-controls="ans" aria-selected="true">Questionarry Answer</a>
                        </li>

                        </ul>

                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="Personal-info"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName" ><b>Full Name :</b> {{$personalinfo->full_name}}</label><br/>
                                            <label for="gender"><b>Gender :</b> {{$personalinfo->gender}}</label><br/>
                                            <label for="nationality"><b>Nationality :</b> {{$personalinfo->nationality}}</label><br/>
                                            <label for="ethnicity"><b>Ethnicity :</b> </label><br/>  
                                            <label for="disability"><b>Disability:</b> </label><br/>
                                            <label for="father-name"><b>father Name :</b> {{$personalinfo->father_name}}</label><br/>
                                            <label for="mother-name"><b>Mother Name :</b> {{$personalinfo->mother_name}}</label><br/>                                          
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">                        
                                        <label for="FullName"><b>Guardian's Name :</b> {{$personalinfo->guardian_name}}</label><br/>
                                        <label for="FullName"><b>Relationship with the Guardian :</b> {{$personalinfo->guardian_relation}}</label><br/>
                                        <label for="FullName"><b>Emergency Contact Number :</b> {{$contactinfo->emergency_contact_no}}</label><br/>
                                        <label for="FullName"><b>Guardian's Phone Number :</b> {{$contactinfo->guardian_phone_no}}</label><br/>
                                        <label for="FullName"><b>Guardian's Email Address :</b> {{$contactinfo->guardian_email_address}}</label><br/>
                                        <label for="FullName"><b>Guardian's Alternative Phone Number :</b> {{$contactinfo->guardian_phone_no2}}</label><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName"><b>Present Apartment No :</b>  {{$addressinfo->present_apartment_no}}</label><br/>
                                            <label for="gender"><b>Present House No :</b>  {{$addressinfo->present_house_no}}</label><br/>
                                            <label for="nationality"><b>Present Road No/Village :</b>  {{$addressinfo->present_road_no_OR_village}}</label><br/>
                                            <label for="ethnicity"><b>Present Thana / Upozila :</b>  {{$addressinfo->present_thana_OR_upazala}}</label><br/>  
                                            <label for="disability"><b>Present District :</b>  {{$addressinfo->present_district}}</label><br/>
                                            <label for="father-name"><b>Present Division :</b>  {{$addressinfo->present_division}}</label><br/>
                                            <label for="mother-name"><b>Present Post Code:</b>  {{$addressinfo->present_post_code}}</label><br/>                                          
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName"><b>Permanent Apartment No :</b>  {{$addressinfo->permanent_apartment_no}}</label><br/>
                                            <label for="gender"><b>Permanent House No :</b>  {{$addressinfo->permanent_house_no}}</label><br/>
                                            <label for="nationality"><b>Permanent Road No/Village :</b>  {{$addressinfo->permanent_road_no_OR_village}}</label><br/>
                                            <label for="ethnicity"><b>Permanent Thana / Upozila :</b>  {{$addressinfo->permanent_thana_OR_upazala}}</label><br/>  
                                            <label for="disability"><b>Permanent District :</b>  {{$addressinfo->permanent_district}}</label><br/>
                                            <label for="father-name"><b>Permanent Division :</b>  {{$addressinfo->permanent_division}}</label><br/>
                                            <label for="mother-name"><b>Permanent Post Code:</b>  {{$addressinfo->permanent_post_code}}</label><br/>   
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                          
                            <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="timeline-tab"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName"><b>Educational Medium :</b> {{$eduinfo->educational_medium}}</label><br/>
                                            <label for="ethnicity"><b>Institute Name : {{$eduinfo->school}}</b> </label><br/>  
                                            <label for="disability"><b>Class :</b> {{$eduinfo->class}}</label><br/>
                                            <label for="disability"><b>SSC passing Year :</b> {{$eduinfo->ssc_passing_year}}</label><br/>
                                            <label for="disability"><b>SSC Result :</b> {{$eduinfo->ssc_result}}</label><br/>
                                            <label for="father-name"><b>Higher Secondary Institute Name :</b> {{$eduinfo->college}} </label><br/>
                                            <label for="mother-name"><b>Current study year :</b> {{$eduinfo->college_current_year}}</label><br/> 
                                            <label for="mother-name"><b>Passing Year/Current year of study :</b> {{$eduinfo->college_passing_year}}</label><br/> 
                                            <label for="mother-name"><b>Result (if passing year is given) :</b> {{$eduinfo->gpa	}}</label><br/>                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName"><b>UnderGyaduate Level :</b> {{$eduinfo->undergraduate_leve}}</label><br/>
                                            <label for="FullName"><b>University Name :</b> {{$eduinfo->university}}</label><br/>
                                            <label for="gender"><b>Graduation Degree :</b> {{$eduinfo->degree}}</label><br/>
                                            <label for="nationality"><b>Current Year of Study :</b> {{$eduinfo->uni_current_year}}</label><br/>
                                            <label for="nationality"><b>Passing year / Current Year of Study :</b>  {{$eduinfo->uni_passing_year}}</label><br/>
                                            <label for="ethnicity"><b>Result (if passing year is given) :</b> {{$eduinfo->cgpa}}</label><br/>  
                                            <label for="disability"><b>Extracurricular :</b> {{$eduinfo->extracurricular}}</label><br/> 
                                        </div>
                                    </div>
                                </div>        
                            </div>

                            <div class="tab-pane fade" id="ans" role="tabpanel" aria-labelledby="timeline-tab"><br/>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            @if($questionaryinfo->program_name =='BBLT' || $questionaryinfo->program_name =='BBLTJ'  )
                                                <label for="FullName"><b>Justification Answer :</b> {{$questionaryinfo->justify_answer}}</label><br/>
                                            
                                            @elseif($questionaryinfo->program_name =='APL' || $questionaryinfo->program_name =='YLS' )
                                                <label for="FullName"><b>Narrative Writing-1 Answer :</b> {{$questionaryinfo->narrative_writing_1}}</label><br/>
                                                <label for="FullName"><b>Narrative Writing-2 Answer :</b> {{$questionaryinfo->narrative_writing_2}}</label><br/>                                  
                                            
                                            @endif
                                            
                                            
                                        </div>
                                    </div>  
                                </div>        
                            </div>
                            
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>


    </div>
</div>
@endsection