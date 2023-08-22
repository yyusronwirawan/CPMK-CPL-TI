<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LPM Smart Sistem</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fa-solid fa-house"></i>
            <span>Home Page</span></a>
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route(Auth::user()->prodi_kode) }}">
            <i class="fa-solid fa-circle-check"></i>
            <span>Penilain & Diagram</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('element-' . Auth::user()->prodi_kode) }}">
            <i class="fa-brands fa-elementor"></i>
            <span>Element & Berkas</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('berkas') }}">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>Multi Search</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
