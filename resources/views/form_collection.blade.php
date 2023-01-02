@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
  	<div class="content">
	    <div class="breadcrumb-wrapper">
			<h1>All Program Forms</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb p-0">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="mdi mdi-home"></span>                
							</a>
						</li>
						<li class="breadcrumb-item">
							Program-forms
						</li>								
					</ol>
				</nav>
		</div>

        <div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">                                    
                        <h2>Leadership </h2>
					</div>

					<div class="card-body">
                        <div class="card-header card-header-border-bottom d-flex justify-content-between">
                            <div class="row">               
                                <div class="col">
                                    <!-- BBLT Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <a href="{{ url('admin/program/bblt')}}" target="_blank" >
                                                <div class="target"><img class="target" src="{{asset('images/program_image/bblt.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                            <a>
                                        </div>
                                        <a style="font-size:14px">BBLT</a>
                                    </button>
                                </div>
                                            
                                <div class="col">
                                    <!-- BBLTJ Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <a href="{{ url('admin/program/bbltj')}}" target="_blank">
                                                <div class="target"><img class="target" src="{{asset('images/program_image/bbltj.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                            </a>
                                        </div>
                                        <a style="font-size:14px">BBLTJ</a>
                                    </button>
                                </div>
                                            
                                <div class="col">
                                    <!-- YLS Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <a href="{{ url('admin/program/yls')}}" target="_blank">
                                                <div class="target"><img class="target" src="{{asset('images/program_image/yls.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                            </a>
                                        </div>
                                        <a style="font-size:14px">YLS</a>
                                    </button>
                                </div>
                                            
                                <div class="col">
                                    <!-- APL Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <a href="{{ url('admin/program/apl')}}" target="_blank">
                                                <div class="target"><img class="target" src="{{asset('images/program_image/apl.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                            </a>
                                        </div>
                                        <a style="font-size:14px">APL</a>
                                    </button>
                                </div> 

                                <div class="col">
                                    <!-- LFK Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <div class="target"><img class="target" src="{{asset('images/no_image.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                        </div>
                                        <a style="font-size:14px">LFK</a>
                                    </button>
                                </div>
                                            
                                <div class="col">
                                    <!-- YLB Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <div class="target"><img class="target" src="{{asset('images/no_image.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                        </div>
                                        <a style="font-size:14px">YLB</a>
                                    </button>
                                </div> 

                            </div>
                        </div>
					</div><!-- End card body -->
				</div><!-- End card card-default -->

                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">                                  
                        <h2>Professional Development</h2>
                    </div>

                    <div class="card-body">
                        <div class="card-header card-header-border-bottom d-flex justify-content-between">
                            <div class="row">               
                                <div class="col">
                                    <!-- CareerX Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <a href="{{ url('admin/program/careerx')}}" target="_blank">
                                                <div class="target"><img class="target" src="{{asset('images/no_image.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                            </a>
                                        </div>
                                        <a style="font-size:14px">CareerX</a>
                                    </button>
                                </div>                                       
                                <div class="col">
                                    <!-- ACE Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <div class="target"><img class="target" src="{{asset('images/no_image.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                        </div>
                                        <a style="font-size:14px">ACE</a>
                                    </button>
                                </div>
                                <div class="col">
                                    <!-- Bootcaps Form -->
                                    <button type="" target="_blank">
                                        <div class="shadow-lg p-1 mb-2 bg-white rounded">
                                            <div class="target"><img class="target" src="{{asset('images/no_image.png')}}" alt=" " class="rounded mx-auto d-block" style="width: 150; height:150"></div>
                                        </div>
                                        <a style="font-size:14px">Bootcamps</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End card body -->
				</div><!-- End card card-default -->

                <div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">  
                        <h2>Entrepreneurship</h2>
					</div>

					<div class="card-body">
                        <a>No Entrepreneurship Forms yet</a>
					</div><!-- End card body -->
				</div><!-- End card card-default -->
			
            </div>
		</div>
 	</div>
</div>

@endsection

