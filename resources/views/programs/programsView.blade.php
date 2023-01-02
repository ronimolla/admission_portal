@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	  <div class="breadcrumb-wrapper">
						<h1>Program Information</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.html">
									<span class="mdi mdi-home"></span>                
									 </a>
								</li>
								<li class="breadcrumb-item">
									Program-tables
								</li>								
							</ol>
						</nav>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">

									<div class="form-group">
										<a>Project Name</a>
										<select class="form-control" id="project" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Project</option>
                                            <option value="CSF">CSF</option>
                                            <option value="EKN">EKN</option>												
										</select>
									</div>

                                    <div class="form-group">
										<a>Category</a>
										<select class="form-control" id="category" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Category</option>
                                            <option value="Leadership">Leadership</option>
                                            <option value="Professional Development">Professional Development</option>
                                            <option value="Entrepreneurship">Entrepreneurship</option>												
										</select>
									</div>

                                    <h2>Program Data Table</h2>
                                    
									<a href="{{ url('programs/createProgram')}}"  class="shadow btn btn-outline-success"><i class="mdi mdi-plus"></i>&nbsp; Create Program</a>

								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>SL.No.</th>
													<th>Program Name</th>
													<th>Category</th>
                                                    <th>Total Batches</th>
													<th>Project</th>												
												</tr>
											</thead>
                                            
                                            <?php 
												$c = 1; 
											 	$count = 0; 
											?>
                                                
											<tbody>	
												@foreach($program_name as $prg)
													@foreach($totalBatch as $tb)
														@if($prg->program_id == $tb->program_id)
															<?php $count++;?>
														@endif
													@endforeach
													<tr>
                                                        <td>{{$c++}}</td>
                                                        <td>{{$prg->program_name}}</td>
                                                        <td>{{$prg->category}}</td>
                                                        <td>{{$count}}</td>
                                                        <td>{{$prg->donor}}</td>
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