<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Internship | Pendfataran</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('template/head')
</head>

<body>
    @include('template/sidebarusers')

    <main id="main" class="main">
        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Logbook -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">LOGBOOK USER <span>| INTERNSHIP</span></h5>
                                <h1 style="text-align:right;"><a href="../users/tambahlogbook"><button type="button"
                                            class="btn btn-success">Tambah data</button></a></h1>
                                @if (Session::has('status'))
                                    <p class="alert alert-info">{{ Session::get('status') }}</p>
                                @endif
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col" name="name">Nama</th>
                                            <th scope="col" name="tgl">Tanggal</th>
                                            <th scope="col" name="des">Deskripsi</th>
                                            <th scope="col" name="act">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($logbook1 as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama_log }}</td>
                                            <td>{{ $data->tgl_log }}</td>
                                            <td>{{ $data->desk_log }}</td>
                                            <td>
                                                <a href="/users/editlogbook{{ $data->id_log }}"><i
                                                        class="btn btn-warning">EDIT</i></a> |
                                                <button type="button" class="btn btn-danger">DELETE</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    @include('template/footer')

</body>

</html>
