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
								<div class="card-header card-header-border-bottom d-flex justify-content-between">

                                    <div class="form-group">
										<a>Program Name</a>
										<select class="form-control" id="program_name" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Program</option>												
											@foreach($program_name as $pname)
												<option value="{{$pname->program_id}}">{{$pname->program_name}}</option>
											@endforeach
										</select>
									</div>

                                    <h2>Program-Batch Table</h2>

									<a href=" "  class="btn btn-success">Create New Batch</a>
								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>SL.No.</th>
													<th>Batch Name</th>
													<th>Program</th>
													<th>Duration</th>
                                                    <th>Total Students</th>									
												</tr>
											</thead>
                                            
                                            <?php $c = 1; ?>
											<tbody>
                                                @foreach($program_info as $prg)
                                                    <tr>
                                                        <td>{{$c++}}</td>
                                                        <td>{{$prg->batch_name}}</td>
                                                        <td>{{$prg->program_name}}</td>
                                                        <td>{{$prg->duration}}</td>
                                                        <td>40</td>
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