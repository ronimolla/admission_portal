
@extends('layouts.StudentLayout.student_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>Payment</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="index.html">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						pending registration fees
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
										<th>Update Payment Details</th>
                                			
									</tr>
								</thead>

								<tbody>
                                    @foreach($mywaiverdetails as $waiver)
									<tr>
										<td>{{$waiver->student_id}}</td>
										<td>{{$waiver->full_name}}</td>
                                        <td>{{$waiver->program_batch_name}}</td>
                                        <td>{{$waiver->final_registration_fees }}</td>
										<td>
											<a href="{{ url('student/update-payment/details/'.$waiver->student_id.'/'.$waiver->program_batch_id)}}" class="btn btn-primary">Update details</a>
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
