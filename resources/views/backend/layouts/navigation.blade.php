
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Members
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.users.index') }}"  aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Functionality
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Blog System</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('admin.posts.index') }}">Post</a>
                <a class="collapse-item" href="{{ route('admin.tags.index') }}">Tags</a>

            </div>
        </div>
    </li>

    <!-- Nav Item - References -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.references.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>References</span></a>
    </li>

    <!-- Nav Item - References -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fas fa-project-diagram"></i>
            <span>Projects</span></a>
    </li>

    <!-- Nav Item - Forums -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Forums System</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('admin.discussions.index') }}">Disscution</a>
                <a class="collapse-item" href="{{ route('admin.topics.index') }}">Topic</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - References -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-book-reader"></i>
            <span>Google Drive System</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar)
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    Sidebar Message
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>
-->

</ul>
<!-- End of Sidebar -->
