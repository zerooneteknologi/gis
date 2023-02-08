<!-- [ Header ] start -->
<header class="pc-header ">
    <div class="header-wrapper">
        <div class="mr-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <img src="{{ $setting->logo}}" alt="{{ $setting->tittleWeb}}" style="max-height: 35px" class="logo logo-lg float-left">
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="material-icons-two-tone">search</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <i data-feather="search"></i>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            </div>
                        </form>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="admin/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                        <span>
                            <span class="user-name">Joseph William</span>
                            <span class="user-desc">Administrator</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="material-icons-two-tone">chrome_reader_mode</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</header>
<!-- [ Header ] end -->