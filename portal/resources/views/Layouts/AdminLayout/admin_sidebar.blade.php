<!-- ====================================
    ——— LEFT SIDEBAR WITH OUT FOOTER
===================================== -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html" title="Sleek Dashboard">
                <!-- <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg> -->
                <img src="{{asset('images/brand.png')}}" class="rt-image" alt="User Image" />
                <span class="brand-name text-truncate">Admission Portal</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
              
                <li class="">
                    <a class="sidenav-item-link" href="{{url('/dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> 
                    </a>
                </li>
                
                <!-- <li class="section-title">
                   UI Elements
                </li> -->

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                        aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Assesment</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="components" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#buttons" aria-expanded="false" aria-controls="buttons">
                                    <span class="nav-text">Program</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="buttons">
                                    <div class="sub-menu">
                                        <li class="">
                                             <a href="{{url('/assesment/preselection')}}">Pre Selection</a>
                                        </li>

                                        <li class="">
                                            <a href="{{url('/assesment/writing')}}">Writing test</a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('/assesment/interview')}}">Interview</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#buttons1" aria-expanded="false" aria-controls="buttons">
                                    <span class="nav-text">Event</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse " id="buttons1">
                                    <div class="sub-menu">
                                        <li class="">
                                             <a href="button-default.html">Button Default</a>
                                        </li>

                                        <li class="">
                                            <a href="button-dropdown.html">Button Dropdown</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="">
                    <a class="sidenav-item-link" href="{{url('/Admins')}}">
                        <i class="mdi mdi-account-box-outline"></i>
                        <span class="nav-text">Users</span> 
                    </a>
                </li>
                <li class="">
                    <a class="sidenav-item-link" href="{{url('#')}}">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Programs</span> 
                    </a>
                </li>
                <li class="">
                    <a class="sidenav-item-link" href="{{url('/program_page/programs_info')}}">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Student management</span> 
                    </a>
                </li>
                <li class="">
                    <a class="sidenav-item-link" href="{{url('/program_page/programs_info')}}">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Settings</span> 
                    </a>
                </li>

            </ul>
        </div>

    </div>
</aside>