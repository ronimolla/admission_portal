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

									<a href="{{ route('Admins.create') }}" class="shadow btn btn-outline-success"><i class="mdi mdi-account-plus"></i>&nbsp; Create User</a>
								</div>

								<div class="card-body">
									<div class="basic-data-table">
										<table id="basic-data-table" class="table nowrap" style="width:100%">
											<thead>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Email ID</th>
													<th>Department</th>
													<th>Position</th>
													<th>Role</th>
													<th>Edit</th>
													<th>Delete</th>
													
												</tr>
											</thead>

											<tbody>
												@foreach($employe as $emp)
													<tr>
														<td>{{$emp->first_name}}</td>
														<td>{{$emp->last_name}}</td>
														<td>{{$emp->email}}</td>
														<td>{{$emp->department}}</td>
														<td>{{$emp->designation}}</td>
														<td>{{$emp->role}}</td>
														<td>
															<a href="{{ route('Admins.edit',$emp->id)}}" class="btn btn-primary">Edit</a>
														</td>	
														<td>
															<form action="{{ route('Admins.destroy', $emp->id)}}" method="post">
																@csrf
																@method('DELETE')
																<button class="btn btn-danger" type="submit">Delete</button>
															</form>
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