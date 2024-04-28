<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row bg-light">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between bg-light">
        <a class="navbar-brand brand-logo-mini align-self-center d-lg-none fw-bolder text-danger"
            href="{{route('admin.dashboard')}}">Mahfuz Web Agency</a>
        <button class="navbar-toggler  align-self-center mr-2 text-light " type="button"
            data-toggle="minimize">
            <i class="mdi mdi-menu text-light"></i>
        </button>
        <ul class="navbar-nav ">

            <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                    <div class="input-group border border-dark rounded-5 ">
                        <input type="text" class="form-control bg-light text-dark "
                            placeholder="Search" />
                        <div class="input-group-append">
                            <span class="input-group-text bg-light ">
                                <i class="mdi mdi-magnify "></i>
                            </span>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right ml-lg-auto">

            <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle px-5 py-3" id="profileDropdown" href="#"
                    data-toggle="dropdown">
                    <span class="profile-name text-capitalize">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{route('admin.profile')}}">
                        <i class="mdi mdi-face-profile mr-2 text-success"></i>Profile </a>
                    <a class="dropdown-item" href="{{route('profile.logout')}}">
                        <i class="mdi mdi-logout mr-2 text-success"></i>Logout </a>
                </div>
            </li>
        </ul> 
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>