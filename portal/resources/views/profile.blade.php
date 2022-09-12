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
                                <img src="assets/img/user/u6.jpg" alt="user image">
                            </div>

                            <div class="card-body">
                                <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                <p>Albrecht.straub@gmail.com</p>
                                <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                            </div>
                        </div>

                        <hr class="w-100">

                        <div class="contact-info pt-4">
                            <h5 class="text-dark mb-1">Contact Information</h5>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Student ID</p>
                            <p>BBLT1001</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                            <p>Albrecht.straub@gmail.com</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>+99 9539 2641 31</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                            <p>Nov 15, 1990</p>
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

                        </ul>

                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="Personal-info"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName" >Full Name :</label><br/>
                                            <label for="gender">Gender :</label><br/>
                                            <label for="nationality">Nationality :</label><br/>
                                            <label for="ethnicity">Ethnicity :</label><br/>  
                                            <label for="disability">Disability :</label><br/>
                                            <label for="father-name">father Name :</label><br/>
                                            <label for="mother-name">Mother Name :</label><br/>                                          
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">                        
                                        <label for="FullName">Guardian's Name :</label><br/>
                                        <label for="FullName">Relationship with the Guardian :</label><br/>
                                        <label for="FullName">Emergency Contact Number :</label><br/>
                                        <label for="FullName">Guardian's Phone Number :</label><br/>
                                        <label for="FullName">Guardian's Email Address :</label><br/>
                                        <label for="FullName">Guardian's Alternative Phone Number :</label><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName">Present Apartment No :</label><br/>
                                            <label for="gender">Present House No :</label><br/>
                                            <label for="nationality">Present Road No/Village :</label><br/>
                                            <label for="ethnicity">Present Thana / Upozila :</label><br/>  
                                            <label for="disability">Present District :</label><br/>
                                            <label for="father-name">Present Division :</label><br/>
                                            <label for="mother-name">Present Post Code:</label><br/>                                          
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName">Permanent Apartment No :</label><br/>
                                            <label for="gender">Permanent House No :</label><br/>
                                            <label for="nationality">Permanent Road No/Village :</label><br/>
                                            <label for="ethnicity">Permanent Thana / Upozila :</label><br/>  
                                            <label for="disability">Permanent District :</label><br/>
                                            <label for="father-name">Permanent Division :</label><br/>
                                            <label for="mother-name">Permanent Post Code:</label><br/>   
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                          
                            <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="timeline-tab"><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName"  class="text-dark font-weight-medium pt-4 mb-2">Educational Medium :</label><p>i have no idea what i have to do in this situation</p><br/>
                                            <label for="gender">Primary Institute Name :</label><br/>
                                            <label for="nationality">Class(Primary) :</label><br/>
                                            <label for="ethnicity">Secondary Institute Name :</label><br/>  
                                            <label for="disability">Class(Secondary) :</label><br/>
                                            <label for="father-name">Higher Secondary Institute Name :</label><br/>
                                            <label for="mother-name">Passing Year/Current year of study :</label><br/> 
                                            <label for="mother-name">Result (if passing year is given) :</label><br/>                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="FullName">University Name :it's your choice to what things can be done</label><br/>
                                            <label for="gender">Graduation Degree :</label><br/>
                                            <label for="nationality">Passing year / Current Year of Study :</label><br/>
                                            <label for="ethnicity">Result (if passing year is given) :</label><br/>  
                                            <label for="disability">CGPA (if Current Year of Study) :</label><br/> 
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