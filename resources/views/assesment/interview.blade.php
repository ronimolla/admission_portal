@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Assesment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="{{url('/dashboard')}}">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Interview Stage
					</li>
								
				</ol>
			</nav>
		</div>


        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>All Student who are Selected for Interview and Waiting for Update their result</h2>						
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
							<table id="basic-data-table2" class="table nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Code</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Contact Number</th>
										<th>Present Destrict</th>
                                        <th>Present Devision</th>
										<th>Update</th>
													
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
											<a href="{{ url('interviewresult/edit/'.$std->student_id.'/'.$std->program_batch_id)}}" class="btn btn-primary">Update Result</a>
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
						<table id="basic-data-table" class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
									<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Code</th>
										<th>Email</th>
										<th>Contact Number</th>
										<th>All Total Score</th>
										<th>Registration Eligibility</th>
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
											<td>{{$pstage->all_totall_marks}}</td>
											<td>{{$pstage->email_address}}</td>
											<td>{{$pstage->personal_phone_no}}</td>
											<td>{{$pstage->present_division}}</td>
											<td>
												<a href="{{ url('interview/follow-up/'.$pstage->student_id.'/'.$pstage->program_batch_id)}}" class="btn btn-primary">Follow-Up</a>
											</td>	
													
                                        </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div><!-- End basic-data-table -->
                    </div><!-- End card body -->
                </div><!-- End card card-default -->
            </div><!-- End col-12 row -->
        </div><!-- End row -->
 	</div><!-- End content -->
</div><!-- End content-wrapper -->
@endsection