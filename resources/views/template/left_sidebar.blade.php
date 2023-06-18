<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CUCI KENDARAAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route ('welcome') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{route ('user.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen User</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{route('layanan.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Layanan</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pelanggang.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Pelanggang</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Pembayaran</span></a>
    </li>
    <hr class="sidebar-divider my-0">
</ul>
