    <!--Header-->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/indexuser" class="logo d-flex align-items-center">
                <img src="../img/LOGO BMKG.png" alt="">
                <span class="d-none d-lg-block"><b>BMKG JUANDA</b></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="../img/man.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Internship</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header>
    <!--End Header-->

    <!--Sidebar-->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="../users">
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="informasi">
                    <i class="bi bi-info-circle"></i>
                    <span>Informasi</span>
                </a>

                <!-- LOGBOOK -->
            <li class="nav-heading">PENGAJUAN</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pen"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="pengajuan1">
                            <i class="bi bi-circle"></i><span>Pengajuan Tahap 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="pengajuan2">
                            <i class="bi bi-circle"></i><span>Pengajuan Tahap 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="cekpengajuan">
                    <i class="bi bi-folder2-open"></i>
                    <span>Cek Status Pengajuan</span>
                </a>
            </li>

            <!-- LOGBOOK -->
            <li class="nav-heading">LOGBOOK</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="isilogbook">
                    <i class="bi bi-pen"></i>
                    <span>Mengisi Logbook</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="ceklogbook">
                    <i class="bi bi-folder2-open"></i>
                    <span>Cek Logbook</span>
                </a>
            </li>
        </ul>
    </aside>
    <!--End Sidebar-->
