<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BMKG Juanda | Internship</title>
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
                <h4>Pengajuan PKL Magang</h4>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pengajuan Tahap 1</h5>
                            <p>Pada tahap awal mengisi data diri dan mengupload CV</p>
                            <br>
                            <div class="text-center">
                                <a href="/users/cekTahap1"><button type="button"
                                        class="btn btn-success">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pengajuan Tahap 2</h5>
                            <p>Pada tahap selanjutnya mengisi Surat Pernyataan dan Proposal</p>
                            <br>
                            <div class="text-center">
                                <a href="/users/cekTahap2"><button type="button"
                                        class="btn btn-success">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cek Status Pengajuan</h5>
                            <p>Cek status pengajuan secara berkala untuk mengetahui informasi</p>
                            <br>
                            <div class="text-center">
                                <a href="/users/cekpengajuan"><button type="button"
                                        class="btn btn-success">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Aktivitas Logbook PKL Magang</h4>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mengisi Logbook Mingguan</h5>
                            <p>Setelah melakukan project individu/kelompok setiap minggu, diharapakan untuk segera
                                mengisi logbook untuk diperika secara berkala</p>
                            <br>
                            <div class="text-center">
                                <a href="/users/tambahlogbook"><button type="button"
                                        class="btn btn-primary">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cek Logbook Mingguan</h5>
                            <p>Setelah mengisi logbook mingguan, silakan cek status logbook mingguan untuk mengetahui
                                koreksi dan informasi secara berkala</p>
                            <br>
                            <div class="text-center">
                                <a href="/users/logbook"><button type="button"
                                        class="btn btn-primary">Selengkapnya</button></a>
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
