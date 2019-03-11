<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-nav mb-3 ">
    <div class="flex-row d-flex">
        <a class="navbar-brand" href="{{url('/')}}" title="Free Bootstrap 4 Admin Template">
            <p><i class="fab fa-galactic-senate"></i><b> Rainbow Cinema</b></p> 
        </a>
    </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown active">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    <i class="fas fa-user-alt"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    
</nav>