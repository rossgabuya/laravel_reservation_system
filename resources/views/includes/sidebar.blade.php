@if(Auth::check())
<!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('src/img/icons/default-user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->first_name." ".Auth::user()->last_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/customer/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/customer/reservations') }}">
            <i class="fa fa-files-o"></i>
            <span>Reservations</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/customer/settings') }}">
            <i class="fa fa-gears"></i> <span>Settings</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
  @elseif(Auth::guard('admins')->check())

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('src/img/icons/default-user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard('admins')->user()->first_name." ".Auth::guard('admins')->user()->last_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/admin/reservations') }}">
            <i class="fa fa-files-o"></i>
            <span>Reservations</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/admin/rooms') }}">
            <i class="fa fa-gears"></i> <span>Rooms And Amenities</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/admin/promos') }}">
            <i class="ion ion-bag"></i> <span>Promos</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  @endif