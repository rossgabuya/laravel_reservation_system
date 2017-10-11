  @if(Auth::check() == true)
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>RS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hotel </b>Reservation</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="menu-icon fa fa-user"></span>
              <span class="hidden-xs">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
              <span class="menu-icon fa fa-caret-down"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('src/img/icons/default-user.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->first_name." ".Auth::user()->last_name }}
                  <!-- <small>Member since Nov. 2012</small> -->
                  <small>Customer</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('customer/settings')}}" class="btn btn-default btn-flat">Settings</a>
                </div>
                <div class="pull-right">
                   <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                    </a>

                    <form id="logout-form" action="{{ route('customer.logout')}}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  @elseif(Auth::guard('admins')->check() == true)

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>RS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hotel </b>Reservation</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="menu-icon fa fa-user"></span>
              <span class="hidden-xs">{{ Auth::guard('admins')->user()->first_name." ".Auth::guard('admins')->user()->last_name }}</span>
              <span class="menu-icon fa fa-caret-down"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('src/img/icons/default-user.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::guard('admins')->user()->first_name." ".Auth::guard('admins')->user()->last_name }}
                  <!-- <small>Member since Nov. 2012</small> -->
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                   <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout')}}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  @else
    <nav class="navbar navbar-inverse navbar-static-top" style="margin-top: 0">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hotel Reservation</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">

                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/features') }}">Features</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/customer/login') }}">Login</a></li>
                <li><a href="{{ url('/customer/signup') }}">Sign Up</a></li>
              </ul>
            </div>
          </div>
        </nav>
  @endif