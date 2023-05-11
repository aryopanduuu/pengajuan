<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Internship | Rekap Tahap 1</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('template/head')
</head>

<body>
    @include('template/sidebarusers')

    <!--Main-->
    <main id="main" class="main">

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <h5 class="card-title">VALIDASI PKL/MAGANG <span>| TAHAP 1</span></h5>

                        <!-- MAGANG SISWA -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Validasi <span>| Tahap 1</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Kel/Individu</th>
                                                <th scope="col">Asal Instansi</th>
                                                <th scope="col">Jurusan</th>
                                                <th scope="col">No.Telp</th>
                                                <th scope="col">Jenis Intern</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">End Date</th>
                                                <th scope="col">Tempat</th>
                                                <th scope="col">Rencana Kegiatan</th>
                                                <th scope="col">CV</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($rekap1 as $data)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->asins }}</td>
                                                    <td>{{ $data->jurusan }}</td>
                                                    <td>{{ $data->no_tlp }}</td>
                                                    <td>{{ $data->periode }}</td>
                                                    <td>{{ $data->startdate }}</td>
                                                    <td>{{ $data->enddate }}</td>
                                                    <td>{{ $data->pil }}</td>
                                                    <td>{{ $data->rencana }}</td>
                                                    <td><a href="#"><i
                                                                class="bi bi-folder-plus"></i>{{ $data->file }}</a>
                                                    </td>
                                                    <td><button type="button"
                                                            class="btn btn-primary">{{ $data->status }}ACC</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END MAGANG SISWA -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main>
    @include('template/footer')

</body>

</html>
