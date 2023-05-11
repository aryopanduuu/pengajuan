<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Internship | Admin</title>
    @include('template/head')
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!--Header Sidebar-->
    @include('template/sidebarusers')

    <!--Main-->
    <main id="main" class="main">
        <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
            <div class="row">
            <h5 class="card-title">VALIDASI<span> PKL/MAGANG</span></h5>
            {{-- <h3>{{ Session::get('name') }}</h3>
            <h3>{{ Session::get('email') }}</h3>
            <h3>{{ Session::get('role') }}</h3> --}}
                <!-- PKL VALIDASI TAHAP 1 -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Validasi PKL/Magang <span>| Tahap 1</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $allDataVerified1 }}</h6>
                                    <span class="text-danger small pt-1 fw-bold">Pendaftaran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PKL VALIDASI TAHAP 2 -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Validasi PKL/Magang <span>| Tahap 2</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $allDataVerified2 }}</h6>
                                    <span class="text-danger small pt-1 fw-bold">Pengajuan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="card-title">LOGBOOK<span> PKL/MAGANG</span></h5>
                <!-- LOGBOOK PKL -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">LOGBOOK <span>| PKL/Magang</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-lines-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>17</h6>
                                    <span class="text-danger small pt-1 fw-bold">Approval</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </section>

    </main>

    <!--Footer Script-->
    @include('template/footer')

</body>
<!-- END BODY -->
</html>