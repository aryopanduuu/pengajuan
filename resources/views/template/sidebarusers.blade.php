    <!--Header-->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/indexuser" class="logo d-flex align-items-center">
                <img src="../img/LOGO BMKG.png" alt="">
                <span class="d-none d-lg-block"><b>BMKG JUANDA</b></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        {{-- Mengambil ID USER --}}
        @Auth
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="../img/man.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    {{-- <form action="/logout" method="post"> --}}
                                    {{-- @csrf --}}
                                    <i class="bi bi-box-arrow-right" href=""></i>
                                    <span>Logout</span>
                                    {{-- </form> --}}
                                </a>
                            </li>
                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                </ul>
            </nav><!-- End Icons Navigation -->
        @endauth

    </header>
    <!--End Header-->

    <!--Sidebar-->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="/indexuser">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            {{-- Untuk Admin --}}
            <li class="nav-heading">VALIDASI PKL/Magang</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../admin/rekapdata1">
                    <i class="bi bi-clipboard-check"></i><span>Rekap Data Tahap 1</span>
                </a>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="../admin/rekapdata2">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Rekap Data Tahap 2</span>
                </a>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pen"></i><span>Data Accept</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../admin/accept1">
                            <i class="bi bi-circle"></i><span>Acceppt Tahap 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/accept2">
                            <i class="bi bi-circle"></i><span>Accept Tahap 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pen"></i><span>Data Decline</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="users/pengajuan1">
                            <i class="bi bi-circle"></i><span>Decline Tahap 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="users/pengajuan2">
                            <i class="bi bi-circle"></i><span>Decline Tahap 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-heading">LOGBOOK</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../admin/logbook">
                    <i class="bi bi-journal-check"></i>
                    <span>Logbook PKL/Magang</span>
                </a>
            </li><!-- End Register Page Nav -->

            <!--END LOGBOOK -->
            <li class="nav-heading">KALENDER</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Kalender</span>
                </a>
            </li><!-- End Register Page Nav -->


            {{-- Untuk User --}}

            <li class="nav-heading">PENDAFTARAN</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../users/pendaftaran">
                    <i class="bi bi-pen"></i><span>Pendaftaran PKL/Magang</span>
                </a>
            </li>
            {{-- Cek Pendaftar --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pen"></i><span>Cek Status Pendaftaran</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../users/cekTahap1">
                            <i class="bi bi-circle"></i><span>Status Tahap 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="../users/cekTahap2">
                            <i class="bi bi-circle"></i><span>Status Tahap 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- LOGBOOK -->
            <li class="nav-heading">LOGBOOK</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/view/tambahlogbook">
                    <i class="bi bi-pen"></i>
                    <span>Mengisi Logbook</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/view/ceklogbook">
                    <i class="bi bi-folder2-open"></i>
                    <span>Cek Logbook</span>
                </a>
            </li>
        </ul>
    </aside>
    <!--End Sidebar-->
