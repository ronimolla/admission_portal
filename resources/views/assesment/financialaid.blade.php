
@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Assesment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="{{url('/dashboard')}}">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Waiver request
					</li>
								
				</ol>
			</nav>
		</div>


        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>All Student who are applied for waiver and waiting update their request</h2>		
					</div>

					@if($message = Session::get('flash_message_success'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif

					<div class="card-body">
						<div class="basic-data-table">
							<table id="basic-data-table" class="table nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Full Name</th>
										<th>Program_batch Name</th>
										<th>Program Batch ID</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Present Destrict</th>
                                        <th>Present Devision</th>
										<th>Update</th>
										<!-- <th>view</th>			 -->
									</tr>
								</thead>

								<tbody>
                                    @foreach($finance as $std)
									<tr>
										<td>{{$std->student_id}}</td>
										<td>{{$std->full_name}}</td>
                                        <td>{{$std->batch_name}}</td>
										<td>{{$std->program_batch_id}}</td>
                                        <td>{{$std->gender}}</td>
										<td>{{$std->email_address}}</td>
                                        <td>{{$std->present_district}}</td>
										<td>{{$std->present_division}}</td>
										<td>
											<a href="{{ url('financialaid-status/'.$std->student_id.'/'.$std->program_batch_id)}}" class="btn btn-primary">Update Result</a>
										</td>	
                                        <!-- <td>
											<a href="{{ url('view-profile/'.$std->student_id)}}" class="btn btn-primary">view Profile</a>
										</td>	 -->
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
