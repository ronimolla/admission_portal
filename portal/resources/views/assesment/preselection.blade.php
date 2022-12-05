@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Assesment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="{{ url('/dashboard')}}" >
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Pre Selection
					</li>
					<li class="breadcrumb-item">
						<a href="{{ url('/dashboard')}}" >
						    <span class="mdi-chevron-left-box"></span>                
						</a>
					</li>
					
								
				</ol>
			</nav>
		</div>

        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>All Applicants Who are Waiting for Pre Selection</h2>						
					</div>
					@if($message = Session::get('flash_message_error'))
						<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif
					@if($message = Session::get('flash_message_success'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif

					<div class="card-body">
						<div class="basic-data-table">
							<table id="basic-data-table" class="table nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Batch Code</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Contact Number</th>
										<th>Present Destrict</th>
                                        <th>Present Devision</th>
										<th>Edit</th>
										<th>view</th>
													
									</tr>
								</thead>

								<tbody>
                                    @foreach($student as $std)
									<tr>
										<td>{{$std->student_id}}</td>
										<td>{{$std->full_name}}</td>
                                        <td>{{$std->program_name}}</td>
										<td>{{$std->program_batch_id}}</td>
                                        <td>{{$std->gender}}</td>
										<td>{{$std->email_address}}</td>
										<td>{{$std->personal_phone_no}}</td>
                                        <td>{{$std->present_district}}</td>
										<td>{{$std->present_division}}</td>
										<td>
											<a href="{{ url('preselection/edit/'.$std->student_id.'/'.$std->program_batch_id)}}" class="btn btn-primary">Preselection</a>
										</td>	
                                        <td>
											<a href="{{ url('view-profile/'.$std->student_id.'/'.$std->program_batch_id)}}" class="btn btn-primary">view Profile</a>
										</td>	
									</tr>
									@endforeach
								</tbody>
							</table>
						</div><!-- End basic-data-table -->
					</div><!-- End card body -->
				</div><!-- End card card-default -->
			</div><!-- End  col-12-->
		</div><!-- End row-->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>All Applicants Who are Waiting for Follow-Up</h2>                      
                    </div>

					@if($message = Session::get('flash_message_error'))
						<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif
					@if($message = Session::get('flash_message_success_follow_up'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif

                    <div class="card-body">
                        <div class="basic-data-table">
                            <table id="basic-data-table2" class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
									<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Batch Code</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Contact Number</th>
                                        <th>Preselection Score</th>
										<th>Writting Exam Eligibility</th>
										<th>Follow-Up</th>
										                              
                                    </tr>
                                </thead>

                                <tbody>
									@foreach($preselection_stage as $pstage)
                                        <tr>
                                            <td>{{$pstage->student_id}}</td>
											<td>{{$pstage->full_name}}</td>
											<td>{{$pstage->program_name}}</td>
											<td>{{$pstage->program_batch_id}}</td>
											<td>{{$pstage->gender}}</td>
											<td>{{$pstage->email_address}}</td>
											<td>{{$pstage->personal_phone_no}}</td>
											<td>{{$pstage->pre_subtotal}}</td>
											<td>{{$pstage->select_for_writing_test}}</td>
											<td>
												<a href="{{ url('preselection/follow-up/'.$pstage->student_id.'/'.$pstage->program_batch_id)}}" class="btn btn-primary">Follow-Up</a>
											</td>	
											
												
                                        </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div><!-- End basic-data-table -->
                    </div><!-- End card body -->
                </div><!-- End card card-default -->
            </div>
        </div>
 	</div>
</div>
@endsection