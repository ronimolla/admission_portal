@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	  <div class="breadcrumb-wrapper">
						<h1>Event Information</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.html">
									<span class="mdi mdi-home"></span>                
									 </a>
								</li>
								<li class="breadcrumb-item">
									Event-tables
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
										<select class="form-control" id="category_event" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Category</option>
                                            <option value="Leadership">Leadership</option>
                                            <option value="Professional Development">Professional Development</option>
                                            <option value="BGN">BGN</option>
											<option value="Social">Social</option>												
										</select>
									</div>

                                    <h2>Event Data Table</h2>

									<a href="{{ url('events/createEvent')}}"  class="btn btn-success">Create New Event</a>
								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>SL.No.</th>
													<th>Event Name</th>
													<th>Category</th>
                                                    <th>Total Batches</th>										
												</tr>
											</thead>
                                            
											<?php 
												$c = 1; 
											 	$count = 0; 
											?>
											<tbody>
                                                @foreach($event_name as $evt)
													@foreach($totalBatch as $tb)
														@if($evt->id == $tb->event_id)
															<?php $count++; ?>
														@endif
													@endforeach
                                                    <tr>
                                                        <td>{{$c++}}</td>
                                                        <td>{{$evt->event_name}}</td>
                                                        <td>{{$evt->category}}</td>
                                                        <td>{{$count}}</td>
                                                    </tr>
													<?php $count=0;?>
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