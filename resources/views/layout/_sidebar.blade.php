<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fab fa-laravel"></i>WPA30
      </div>
    </a>
    <!-- Nav Item - Dashboard -->

    <li class="nav-item active">
      <a href="#">  &nbsp &nbsp <i class="fa fa-circle text-success"></i> 
        &nbsp&nbsp <span class="text-light"> {{ Auth::user()->name }}</span>
      </a>
    </li>
    {{-- activ user dashboard --}}
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
        custom data
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-ticket-alt"></i>
        <span>bookings</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Booking:</h6>
            <a class="collapse-item" href="{{url('/booking/show/book')}}"><i class="far fa-check-circle"></i>  choose movie</a>
        </div>
      </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-film"></i>
        <span>movies</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/movie')}}"><i class="far fa-list-alt"></i> list</a>
            <a class="collapse-item" href="{{url('/movie/create')}}"><i class="far fa-edit"></i> create</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
    {{-- Showing item --}}
    <li class="nav-item">
        <a class="nav-link" href="{{url('/show')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>now showing</span>
        </a>
    </li>
    {{-- Hall item  --}}
    <li class="nav-item">
        <a class="nav-link" href="{{url('/hall')}}">
          <i class="fas fa-theater-masks"></i>
            <span>cinema halls</span>
        </a>
    </li>
    {{-- Seat item  --}}
    <li class="nav-item">
        <a class="nav-link" href="{{url('/seat')}}">
          <i class="fas fa-chair"></i>
          <span>seat</span>
        </a>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/monthly/report')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Monthly report charts</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Setting</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{url('/user')}}"> <i class="fas fa-user-cog"></i> User</a>
            <a class="collapse-item" href="{{url('/data/voucher')}}"><i class="far fa-file-pdf"></i>  Monthly Sale PDF</a>
        </div>
    </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->