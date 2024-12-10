<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <!-- Sidebar Brand Wrapper -->
    <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-center fixed-top">
        <div class="logo-container">
            <!-- Logo Full (SINDIKAT) -->
            <div class="logo-text" id="logo-full">SINDIKAT</div>
            <!-- Logo Shrinked (S / SK) -->
            <div class="logo-text-shrink" id="logo-shrink">S</div>
        </div>
    </div>

    <ul class="nav">
        <!-- Profile Section -->
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle" src="{{ asset('storage/img/logo.png') }}" alt="">
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>Staff</span>
                    </div>
                </div>
            </div>
        </li>
        
        <!-- Dashboard Link -->
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard_pegawai') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard Pegawai</span>
            </a>
        </li>
        
        <!-- Dropdown Menu for Pelatihan -->
        <li class="nav-item menu-items">
            <a class="nav-link" href="#menuPelatihan" data-toggle="collapse" aria-expanded="false" aria-controls="menuPelatihan">
                <span class="menu-icon"><i class="mdi mdi-school"></i></span>
                <span class="menu-title">Menu Pelatihan</span>
                <i class="menu-arrow mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="menuPelatihan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelatihan.index') }}">Daftar Pelatihan</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<!-- Tambahkan CSS -->
<style>
    /* Sidebar brand wrapper styling */
    .logo-container {
        text-align: center;
        margin-top: 20px;
        position: relative;
    }

    .logo-text, .logo-text-shrink {
        color: white;
        font-family: Arial, sans-serif;
        font-weight: bold;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .logo-text {
        font-size: calc(1.5em + 1vw); /* Responsif */
    }

    .logo-text-shrink {
        font-size: 2em; /* Lebih kecil untuk mode shrink */
        display: none; /* Default: tersembunyi */
    }

    /* Responsif untuk Sidebar yang diperkecil */
    #sidebar.minimized .logo-text {
        display: none;
    }

    #sidebar.minimized .logo-text-shrink {
        display: block;
    }

    /* Sidebar rapi */
    .sidebar-brand-wrapper {
        padding: 10px;
    }

    .profile-desc {
        padding: 15px;
        text-align: center;
        color: white;
    }

    .menu-items .menu-title {
        font-size: 14px;
        font-weight: 600;
    }

    .menu-items .menu-icon {
        font-size: 20px;
        margin-right: 10px;
    }

    .menu-items .menu-arrow {
        font-size: 18px;
        margin-left: auto;
    }
</style>
