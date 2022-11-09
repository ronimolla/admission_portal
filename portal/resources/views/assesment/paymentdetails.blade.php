@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Tables</h1>
			<h1>Assesment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="index.html">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						Data Table
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
                                        <th>Reject Registration</th>
													
									</tr>
								</thead>

								<tbody>
                                    @foreach($paymentdetails as $details)
									<tr>
										<td>{{$details->student_id}}</td>
										<td>{{$details->full_name}}</td>
                                        <td>{{$details->batch_name}}</td>
                                        <td>{{$details->program_batch_name}}</td>
										<td>{{$details->final_registration_fees}}</td>
                                        <td>{{$details->payment_media}}</td>
										<td>{{$details->reference}}</td>
                                        <td>{{$details->payment_mobileno}}</td>
										
										<td>
                                            <a href="{{ url('registration/accepted/'.$details->student_id.'/'.$details->program_batch_id)}}" class="btn btn-primary">Accept</a>
										</td>
                                        <td>
                                            <a href="{{ url('registration/refuse/'.$details->student_id.'/'.$details->program_batch_id)}}" class="btn btn-danger">Reject</a>
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