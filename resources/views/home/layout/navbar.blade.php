<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3 ">
                <div class="site-logo">
                    <a href="{{route('home.index')}}" class="font-weight-bold">Mahfuz</a>
                </div>
            </div>
            <div class="col-9  text-right">
                <span class="d-inline-block d-lg-block"><a href="#"
                        class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                            class="icon-menu h3 text-white"></span></a></span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li class="active"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>

                        <li><a href="{{route('home.about')}}" class="nav-link">About</a></li>
                        
                        <li><a href="{{route('home.work')}}" class="nav-link">Work</a></li>
                        <li><a href="{{route('home.post')}}" class="nav-link">Posts</a></li>
                        <li><a href="{{route('home.contact')}}" class="nav-link">Contact</a></li>
                    </ul>       
                </nav>
            </div>
        </div>
    </div>
</header>