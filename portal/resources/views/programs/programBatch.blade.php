@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	  <div class="breadcrumb-wrapper">
						<h1>Program-Batch Information</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.html">
									<span class="mdi mdi-home"></span>                
									</a>
								</li>
								<li class="breadcrumb-item">
									Batch-tables
								</li>								
							</ol>
						</nav>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
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
								<div class="card-header card-header-border-bottom d-flex justify-content-between">

                                    <div class="form-group">
										<a>Program Name</a>
										<select class="form-control" id="programs" style="font-size:13px">

											<option value="0" disabled="true" selected="true">Select Program</option>												
											@foreach($program_name as $pname)
												<option value="{{$pname->program_id}}">{{$pname->program_name}}</option>
											@endforeach
										</select>
									</div>

                                    <h2>Program-Batch Table</h2>

									<a href="{{url('/programs/createBatch')}}"  class="shadow btn btn-outline-success"><i class="mdi mdi-plus"></i>&nbsp; Create Batch</a>

								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<!-- <div id="batch_data_table"> -->
												<thead>
													<tr>
														<th>SL.No.</th>
														<th>State</th>
														<th>Batch Name</th>
														<th>Program</th>
														<th>Total Students</th>
														<th>Application Start</th>
														<th>Application End</th>	
														<th>Program Start</th>
														<th>Program End</th>
														<th>Registration Fees</th>
														<th>Action</th>							
													</tr>
												</thead>
												
												<?php 
													$c = 1; 
											 		$count = 0; 
												?>

												<tbody>
													@foreach($program_info as $prg)
														@foreach($totalStudents as $ts)
															@if($prg->batch_id == $ts->program_batch_id)
																<?php $count++;?>
															@endif
														@endforeach

														<?php
														        $state="";
																$stateColor="";
																$otherColor="";
																$todayDate = now()->format('Y-m-d');
																$weight="";
														
																if($todayDate >= $prg->start_date && $todayDate <= $prg->end_date){
																	$state="Running";
																	$stateColor = "btn-success";
																	$weight = "bold";
																	$otherColor= "black";
																}
																elseif( $todayDate > $prg->end_date){
																	$state="Closed";
																}
																else{
																	$state="Upcoming";
																	$stateColor = "btn-danger";
																	$otherColor= "black";
																}
																$red = "btn-danger";
																$green = "btn-success";
																$blue = "btn-info";
														?>
														<tr>
															<td style="font-weight:<?php echo $weight; ?>">{{$c++}}</td>
															<td >
																@if($state == "Running")
																	<button type="button" class="btn <?php echo $green;?> btn-sm rounded-pill" data-toggle="button" aria-pressed="false" autocomplete="off">{{$state}}</button>	
																@endif
																@if($state == "Closed")
																	<button type="button" class="btn <?php echo $red;?> btn-sm rounded-pill" data-toggle="button" aria-pressed="false" autocomplete="off">{{$state}}</button>	
																@endif
																@if($state == "Upcoming")
																	<button type="button" class="btn <?php echo $blue;?> btn-sm rounded-pill" data-toggle="button" aria-pressed="false" autocomplete="off">{{$state}}</button>	
																@endif
															</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->batch_name}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->program_name}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$count}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->start_date}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->end_date}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->program_start_date}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->program_end_date}}</td>
															<td style="color:<?php echo $otherColor; ?>">{{$prg->registration_fees}}</td>
															<td>
																<a href="{{ url('programs/editBatch/'.$prg->batch_id)}}"  class="btn btn-primary">Update</a>
															</td>
														</tr>
														<?php $count=0; ?>
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