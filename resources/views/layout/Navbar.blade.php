<nav class="navbar p-0 fixed-top d-flex flex-row">
    <!-- Logo untuk perangkat kecil -->
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('storage/img/logo.png') }}" alt="logo"></a>
    </div>
    <!-- Bagian utama navbar -->
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <!-- Tombol toggle sidebar -->
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <!-- Form pencarian -->
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search pelatihan">
                </form>
            </li>
        </ul>

        <!-- Bagian kanan navbar -->
        <ul class="navbar-nav navbar-nav-right">
            <!-- Notifikasi pesan -->
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success">3</span> <!-- Jumlah pesan baru -->
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Pesan</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{ asset('storage/img/logo.png') }}" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Admin Pelatihan</p>
                            <p class="text-muted mb-0">"Jangan lupa absensi pelatihan"</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Lihat semua pesan</p>
                </div>
            </li>

            <!-- Notifikasi umum -->
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger">5</span> <!-- Jumlah notifikasi baru -->
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifikasi</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Pelatihan berlangsung</p>
                            <p class="text-muted mb-0">"Pelatihan Dasar dimulai pukul 09:00"</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-alert text-warning"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Peringatan</p>
                            <p class="text-muted mb-0">"Masa pelatihan hampir selesai"</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Lihat semua notifikasi</p>
                </div>
            </li>

            <!-- Profil pengguna -->
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="{{ asset('storage/img/logo.png') }}" alt="Profile">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="mdi mdi-account text-primary"></i>
                        Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout text-danger"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>

        <!-- Tombol toggle sidebar untuk perangkat kecil -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
