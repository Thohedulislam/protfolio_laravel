
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed {{\Request::route() == 'about' ? 'active' : ''}} waves-effect" href="{{route('about')}}"ata-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
        </a>

        <a class="nav-link collapsed {{\Request::route() == 'about_list' ? 'active' : ''}} waves-effect" href="{{route('about_list')}}"ata-toggle="collapse" data-target="#collapselist"
        aria-expanded="true" aria-controls="collapselist">
         <i class="fa-solid fa-user"></i>
         <span >About_list</span>
     </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Contact</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Resume</span>
        </a>
    </li>

    <!-- Nav Item - Skills -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>testimonial</span></a>
    </li>

    <!-- Nav Item - testimonial -->
    <li class="nav-item">
        <a class="nav-link{{\Request::route() == 'skills' ? 'active' : ''}} waves-effect" href="{{route('skills')}}"ata-toggle="collapse" data-target="#collapselist"
        aria-expanded="true" aria-controls="collapselist">
            <i class="fas fa-fw fa-table"></i>
            <span>AddSkills</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link{{\Request::route() == 'Skills_list' ? 'active' : ''}} waves-effect" href="{{route('Skills_list')}}"ata-toggle="collapse" data-target="#collapselist"
        aria-expanded="true" aria-controls="collapselist">
            <i class="fas fa-fw fa-table"></i>
            <span>skills_list</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Protfolio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
