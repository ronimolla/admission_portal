@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Tables</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="index.html">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Data Table
					</li>
								
				</ol>
			</nav>
		</div>


        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>All Student who are Selected for Interview and Waiting for Update their resut</h2>
						
					</div>

					<div class="card-body">
						<div class="basic-data-table">
							<table id="basic-data-table" class="table nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Code</th>
										<th>Gender</th>
										<th>Email</th>
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
                                        <td>{{$std->present_district}}</td>
										<td>{{$std->present_division}}</td>
										<td>
											<a href="{{ url('interviewresult/edit/'.$std->student_id)}}" class="btn btn-primary">Preselection</a>
										</td>	
                                        <td>
											<a href="{{ url('view-profile/'.$std->student_id)}}" class="btn btn-primary">view Profile</a>
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

                    <div class="card-body">
                        <div class="basic-data-table">
						<table id="basic-data-table" class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
									<th>Student ID</th>
										<th>Full Name</th>
										<th>Program Name</th>
										<th>Program Code</th>
										<th>All Total Score</th>
										<th>Registration Eligibility</th>
										<th>Follow-Up</th>
										<th>view</th>                               
                                    </tr>
                                </thead>

                                <tbody>
									@foreach($preselection_stage as $pstage)
                                        <tr>
                                            <td>{{$pstage->student_id}}</td>
											<td>{{$pstage->full_name}}</td>
											<td>{{$pstage->program_name}}</td>
											<td>{{$pstage->program_batch_id}}</td>
											<td>{{$pstage->present_district}}</td>
											<td>{{$pstage->present_division}}</td>
											<td>
												<a href="{{ url('interview/follow-up/'.$pstage->student_id)}}" class="btn btn-primary">Follow-Up</a>
											</td>	
											<td>
												<a href="{{ url('view-profile/'.$pstage->student_id)}}" class="btn btn-primary">view Profile</a>
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