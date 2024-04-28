<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo fw-bolder text-danger link-offset-2 link-underline link-underline-opacity-0 " href="{{route('admin.dashboard')}}">Mahfuz Web Agency</a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3 fw-bolder text-danger link-offset-2 link-underline link-underline-opacity-0" href="{{route('admin.dashboard')}}">Mahfuz Web
            Agency</a>
    </div>

    <ul class="nav  ">
        <hr>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.images')}}">
                <i class="mdi mdi-image-filter menu-icon"></i>
                <span class="menu-title">Images</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.work')}}">
                <i class="mdi mdi-worker menu-icon"></i>
                <span class="menu-title">My Work</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.abouts')}}">
                <i class="mdi mdi-checkbox-multiple-marked menu-icon"></i>
                <span class="menu-title">About and skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.posts')}}">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Posts</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contacts')}}">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Contact Message</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://mahfuz.test/">
                <i class="mdi mdi-screen-rotation menu-icon"></i>
                <span class="menu-title">Frontend</span>
            </a>
        </li>
        
    </ul>
</nav>