<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <!-- <a id="menu_toggle"><i class="fa fa-bars"></i></a> -->
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">                
                    <img src="{{ asset('gentella/production/images/user.png') }}" alt="Profile-User">User
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right mt-3" aria-labelledby="navbarDropdown">
             
                <a class="dropdown-item"  href="#">
                    <span>Profile</span>
                </a>
                <a class="dropdown-item"  href="#" id="btnBantuan">Bantuan</a>
   
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out pull-right"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
            </li>

        </ul>
        </nav>
    </div>
</div>