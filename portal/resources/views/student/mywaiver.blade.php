
@extends('layouts.StudentLayout.student_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>My Waiver</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="index.html">
						    <span class="mdi mdi-home"></span>                
						</a>
					</li>
					<li class="breadcrumb-item">
						All Data
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
										<th>Waiver Percentage</th>
										<th>Waiver Amount</th>
										<th>final Registration fees</th>
                                			
									</tr>
								</thead>

								<tbody>
                                    @foreach($mywaiverdetails as $waiver)
									<tr>
										<td>{{$waiver->student_id}}</td>
										<td>{{$waiver->full_name}}</td>
                                        <td>{{$waiver->program_batch_name}}</td>
										<td>{{$waiver->registration_fees}}</td>
										<td>{{$waiver->waiver_percentage}}</td>
                                        <td>{{$waiver->waiver_amount}}</td>
                                        <td>{{$waiver->registration_fees - $waiver->waiver_amount }}</td>
												
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
