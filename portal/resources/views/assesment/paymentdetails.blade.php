@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Assesment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="index.html">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Registration request
					</li>
								
				</ol>
			</nav>
		</div>


        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>All Student's who pay for their registration fees</h2>	
					</div>

					@if($message = Session::get('flash_message_error'))
						<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
						</div>
					@endif
					@if($message = Session::get('flash_message_success_follow_up'))
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
										<th>Registration fees</th>
										<th>Payment Media</th>
										<th>Reference Code</th>
                                        <th>Mobile No</th>
										<th>Accept Registration</th>
                                        <th>Update Payment</th>
													
									</tr>
								</thead>

								<tbody>
                                    @foreach($paymentdetails as $details)
									<tr>
										<td>{{$details->student_id}}</td>
										<td>{{$details->full_name}}</td>
                                        <td>{{$details->program_batch_name}}</td>
										<td>{{$details->final_registration_fees}}</td>
                                        <td>{{$details->payment_media}}</td>
										<td>{{$details->reference}}</td>
                                        <td>{{$details->payment_mobileno}}</td>
										
										<td>
                                            <a href="{{ url('registration/accepted/'.$details->student_id.'/'.$details->program_batch_id)}}" class="btn btn-primary">Accept</a>
										</td>
                                        <td>
                                            <a href="{{ url('registration/update/'.$details->student_id.'/'.$details->program_batch_id)}}" class="btn btn-primary">Update</a>
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