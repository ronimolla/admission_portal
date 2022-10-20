@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	  <div class="breadcrumb-wrapper">
						<h1>Event-Batch Information</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.html">
									<span class="mdi mdi-home"></span>                
									 </a>
								</li>
								<li class="breadcrumb-item">
									Event-batch-tables
								</li>								
							</ol>
						</nav>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">

                                    <div class="form-group">
										<a>Category</a>
										<select class="form-control" id="events" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Program</option>												
											@foreach($event_name as $pname)
												<option value="{{$pname->id}}">{{$pname->event_name}}</option>
											@endforeach
										</select>
									</div>

                                    <h2>Event Data Table</h2>

									<a href="{{ url('events/createEventBatch')}}"  class="btn btn-success">Create New Event</a>
								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>SL.No.</th>
													<th>Batch Name</th>
													<th>Event Name</th>
													<th>Start Date</th>
                                                    <th>End Date</th>
													<th>Year</th>
													<th>Budget</th>
                                                    <th>Sponser</th>
													<th>Total Participants</th>											
												</tr>
											</thead>
                                            
                                            <?php 
												$c = 1; 
												$count=0;
											?>
											<tbody>
												@foreach($event_info as $prg)
													@foreach($totalStudents as $ts)
															@if($prg->batch_name == $ts->event_batch_name)
																<?php $count++;?>
															@endif
													@endforeach
													@foreach($totalParticipants as $ps)
															@if($prg->batch_name == $ps->event_batch_name)
																<?php $count++;?>
															@endif
													@endforeach
                                                    <tr>
														<td>{{$c++}}</td>
                                                        <td>{{$prg->batch_name}}</td>
                                                        <td>{{$prg->event_name}}</td>
                                                        <td>{{$prg->start_date}}</td>
														<td>{{$prg->end_date}}</td>
                                                        <td>{{$prg->year}}</td>
                                                        <td>{{$prg->budget}}</td>
														<td>{{$prg->sponser}}</td>
														<td>{{$count}}</td>
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