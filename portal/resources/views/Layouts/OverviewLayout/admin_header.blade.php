<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button class="rtbrand">
        <img src="{{asset('images/brand.png')}}" class="r-image" alt="User Image" />
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            <!-- <div class="input-group">
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div> -->
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                        <i class="mdi mdi-bell-outline"></i>
                    </button>

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                        <div class="card-header card-header-border-bottom px-3">
                            <h2>Notifications</h2>
                        </div>
                    </div>
                </li> -->              
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <img src="{{asset('images/brand.png')}}" class="user-image" alt="User Image" />
                        <span class="d-none d-lg-inline-block">{{Session::get('AdminName')}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User Image -->
                        <li class="dropdown-footer">
                            <a href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>