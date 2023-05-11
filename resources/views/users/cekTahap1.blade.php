<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BMKG Juanda | Internship</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('template/head')
</head>

<body>
    <!-- ======= Navbar ======= -->
    @include('template/sidebarusers')

    <!--Main-->
    <main id="main" class="main">

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <h5 class="card-title">CEK PENGAJUAN <span>| PKL/MAGANG</span></h5>

                        <!-- PKL SISWA -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">PENGAJUAN TAHAP 1</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Asal</th>
                                                <th scope="col">Periode</th>
                                                <th scope="col">Tempat</th>
                                                <th scope="col">CV</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($cek1 as $datas)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $datas->name }}</td>
                                                    <td>{{ $datas->asins }}</td>
                                                    <td>{{ $datas->periode }}</td>
                                                    <td>{{ $datas->pil }}</td>
                                                    <td>{{ $datas->file }}</td>
                                                    <td>{{ $datas->status }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END PKL SISWA -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main>

    @include('template/footer')

</body>

</html>
