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
              
                <li class="{{ request()->is('student/dashboard') ? 'active' : '' }}" >
                    <a class="sidenav-item-link" href="{{url('/student/dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> 
                    </a>
                </li>
                <li class="has-sub {{ request()->is('student/program') || request()->is('student/event') ? 'active' : '' }}">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#event"
                    aria-expanded="false" aria-controls="event">
                    <i class="mdi mdi-diamond-stone"></i>
                    <span class="nav-text">Application Forms</span> <b class="caret"></b>
                  </a>
                  <ul class="{{ request()->is('student/program') || request()->is('student/event') ? '' : 'collapse' }}" id="event" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="{{ request()->is('student/program') ? 'active' : '' }}">
                        <a class="sidenav-item-link" href="{{url('/student/program')}}">
                          <span class="nav-text">Program</span>
                        </a>
                      </li>
                      <li class="{{ request()->is('student/event') ? 'active' : '' }}">
                        <a class="sidenav-item-link" href="{{url('/student/event')}}">
                          <span class="nav-text">Event</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>
                
                <li class="">
                    <a class="sidenav-item-link" href="#">
                        <i class="mdi mdi-account-box-outline"></i>
                        <span class="nav-text">Writing Exam</span> 
                    </a>
                </li>

                <li class={{ request()->is('financialaid-form') ? 'active' : '' }}"">
                    <a class="sidenav-item-link" href="{{url('/financialaid-form')}}" target="_blank">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Request For Waiver</span> 
                    </a>
                </li>

                <li class="">
                    <a class="sidenav-item-link" href="{{url('/student/mywaiver')}}">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">My waiver</span> 
                    </a>
                </li>

                <li class="">
                    <a class="sidenav-item-link" href="{{url('/student/my-payments')}}">
                        <i class="mdi mdi-currency-bdt"></i>
                        <span class="nav-text">Update Payment Info</span> 
                    </a>
                </li>
                

            </ul>
        </div>

    </div>
</aside>