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
                    <div class="card">
                        <div class="card-body pt-3">
                            <br>
                            <h3 style="text-align:center"><b>LOGBOOK BARU</b></h3>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active tahap1" id="tahap1">
                                    <h5 class="card-title">Tambah Logbook</h5>
                                    <!-- Profile Edit Form -->
                                    <form action="/store" method="post">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-3 col-lg-2 col-form-label">Nama</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input name="name_log" type="text" class="form-control"
                                                    id="" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-3 col-lg-2 col-form-label">Tanggal</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input name="tgl_log" type="date" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-3 col-lg-2 col-form-label">Deskripsi</label>
                                            <div class="col-md-9 col-lg-10">
                                                <textarea name="desk_log" class="form-control" type="text" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <br>
                                    </form><!-- End Profile Edit Form -->
                                </div>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->

    @include('template/footer')

</body>

</html>
