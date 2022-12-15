@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Old Student Data</h1>
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
										<a>Program Name</a>
										<select class="form-control" id="program_name" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Program</option>												

										</select>
									</div>

									<div class="form-group">
										<a>Batch Name</a>
										<select class="form-control" id="batch_name" style="font-size:13px">
											<option value="0" disabled="true" selected="true">Select Batch</option>	
		
										</select>
									</div>

									<div class="form-group">
										<div class="container px-4">
											<div class="row gx-5">
												<div class="col">
													<div class="p-2 border bg-dark">
														<a style="font-weight:bold; color:lightgreen;">Import Old Student data / Only CSV format</a><br>
														<input type="file" id="myFile" name="filename">
														<button type="submit" href="" class="btn-sm btn-light"><a style="font-weight:bold"><i class="mdi mdi-file-upload-outline"></i>&nbsp; Import</a></button>	
													</div>
												</div>
											</div>
										</div>
									</div>

									<a href="{{url('/download-csv')}}" class="btn btn-success"><i class="mdi mdi-download"></i>&nbsp;  Download as CSV</a>
                        

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

											<tbody>                                              
                        
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

