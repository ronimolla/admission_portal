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
									Admin-tables
								</li>
								
							</ol>
						</nav>
					</div>
                   

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<h2>All Admins Data Table</h2>

									<a href="#"  class="btn btn-outline-primary btn-sm text-uppercase">
										 Create User
									</a>
								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>Student ID</th>
													<th>Student Name</th>
													<th>Program name</th>
													<th>Date of Birth</th>
													<th>Nationality</th>
													<th>View</th>
													<
													
												</tr>
											</thead>

											<tbody>
												@foreach($student as $std)
													<tr>
														<td>{{$std->student_id }}</td>
														<td>{{$std->full_name}}</td>
														<td>{{$std->program_name}}</td>
														<td>{{$std->dob}}</td>
														<td>{{$std->nationality}}</td>
														
														<td>
															<a href="{{ url('view-profile/'.$std->student_id)}}"class="btn btn-primary">View</a>
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