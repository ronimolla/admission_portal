@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Student Information</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb p-0">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="mdi mdi-home"></span>                
							</a>
						</li>
						<li class="breadcrumb-item">
							Student-tables
						</li>								
					</ol>
				</nav>
		</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">                                
                                <h2>Student Data Table</h2>

									<div class="form-group">
										<a>Type</a>
										<select class="form-control" id="student_type" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Type</option>											
											<option value="pending">Registered</option>
											<option value="selected">Pending</option>
											<option value="rejected">Not Registered</option>
										</select>
									</div>
								
									<div class="form-group">
										<a>Program Name</a>
										<select class="form-control" id="program_name" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Program</option>												
											@foreach($program_name as $pname)
												<option value="{{$pname->program_id}}">{{$pname->program_name}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<a>Batch Name</a>
										<select class="form-control" id="batch_name" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Batch</option>	
											@foreach($program_batch_name as $batch)
												<option value="{{$batch->batch_id}}">{{$batch->batch_name}}</option>					
											@endforeach
										</select>
									</div>
                             
                                    <a href="{{url('/download-csv')}}" class="btn btn-success"><i class="mdi mdi-download"></i>&nbsp;   Download as CSV</a>

								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>Sl.No.</th>
													<th>Batch</th>
													<th>Student ID</th>
													<th>Full name</th>
													<th>Email ID</th>
													<th>Phone No</th>
													<th>Address</th>
													<th>Profile</th>													
												</tr>
											</thead>

											<?php $c = 1; ?>
											<tbody>                                              
                                                @foreach($student_info as $std)
                                                    <tr>
                                                        <td>{{$c++}}</td>
                                                        <td>{{$std->batch_name}}</td>
														<td>{{$std->student_id}}</td>
                                                        <td>{{$std->full_name}}</td>
                                                        <td>{{$std->email_address}}</td>
                                                        <td>{{$std->personal_phone_no}}</td>
                                                        <td>{{$std->present_district}}</td>
                                                        <td>
															<a href="{{ url('view-profile/'.$std->student_id)}}" class="btn btn-primary">View</a>
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

