<div class="col-md-3 col-lg-2 mh-100 sidebar-offcanvas bg-dark pl-0 my-sidebar" id="sidebar" role="navigation">
    <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3 ">
        <li class="nav-item">
            <a class="nav-link text-light" href="{{url('/')}}"><i class="fas fa-tachometer-alt"></i>   Dashboard</a>
        </li>
        {{-- dashboard seciton --}}
        

        <li class="nav-item">
            <a class="nav-link text-light" href="#movie-menu" data-toggle="collapse" data-target="#movie-menu">
                <i class="fas fa-film"></i> Movie <i class="fas fa-angle-down"></i>
            </a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="movie-menu" aria-expanded="false">
                <li class="nav-item text-light"><a href="/movie" class="nav-link" href="">List</a></li>
                <li class="nav-item text-light"><a href="/movie/create" class="nav-link" href="">Create</a></li>
            </ul>
        </li>

        {{-- now showing section --}}
        <li class="nav-item">
            <a class="nav-link text-light" href="/booking/show/book"><i class="fas fa-clipboard-list"></i>  Booking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/seat"><i class="fas fa-chair"></i></i> Seat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/hall"><i class="fas fa-ethernet"></i>  Cinema Halls</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link text-light" href="{{url('/show')}}"><i class="fas fa-film"></i> Now Showing </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
                <i class="fas fa-cog"></i> Option<i class="fas fa-angle-down"></i>
            </a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                <li class="nav-item"><a class="nav-link text-light" href="{{url('/user')}}"> <i class="fas fa-users-cog"></i>User </a></li>
                <li class="nav-item"><a class="nav-link text-light" href=""><i class="far fa-money-bill-alt"></i> Payment</a></li>
            </ul>
        </li>
        		
    </ul>
</div>