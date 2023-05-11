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

        <div class="pagetitle">

        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">

                        {{-- @foreach ($users as $user) --}}
                        <div class="card-body pt-3">
                            <br>
                            <h3 style="text-align:center"><b>Pendaftaran PKL/Magang</b></h3>
                            <br>
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" user-bs-toggle="tab"
                                        user-bs-target="#tahap1"><b>Tahap 1</b></button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" user-bs-toggle="tab" user-bs-target="#tahap2"><b>Tahap
                                            2</b></button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active tahap1" id="tahap1">
                                    <h5 class="card-title">Input user Diri</h5>
                                    <!-- Profile Edit Form -->
                                    <form action="/Pendaftar/store" method="post" enctype="multipart/form-user">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Nama
                                                    Kel/Individu</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <textarea name="name" class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Asal
                                                    Instansi</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="asins" type="text" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>Jurusan</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="jurusan" type="text" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>No.Telp</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="tlp" type="number" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Email
                                                    Ketua</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="email" readonly type="" class="form-control"
                                                    {{-- id="" value=""> --}} id="" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Jenis
                                                    Intern</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="jenis" type="text" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>Kelompok/Individu</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="kelind" type="text" class="form-control" id=""
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>Periode</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="periode" type="number" class="form-control"
                                                    id="" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>Mulai</b></label>
                                            <div class="col-md-8 col-lg-3">
                                                <input name="startdate" type="date" class="form-control"
                                                    id="" value="">
                                            </div>
                                            <label for="no telp" class="col-md-4 col-lg-2 col-form-label"
                                                style="text-align:center"><b>Sampai</b></label>
                                            <div class="col-md-8 col-lg-3">
                                                <input name="enddate" type="date" class="form-control"
                                                    id="" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Pilihan
                                                    Tempat</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="pil">
                                                    <option selected>-</option>
                                                    <option value="teknisi">Teknisi</option>
                                                    <option value="observasi">Observasi</option>
                                                    <option value="aero">Aero</option>
                                                    <option value="datin">Datin</option>
                                                    <option value="tu">TU</option>
                                                    <option value="foreceaster">Foreceaster</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Rencana
                                                    Kegiatan</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <textarea class="form-control" name="rencana" style="height: 100px"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label"><b>Upload
                                                    CV</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input class="form-control" name="file" type="file"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                        <br>
                                    </form><!-- End Profile Edit Form -->
                                </div>

                                <div class="tab-pane fade show tahap2" id="tahap2">
                                    <h5 class="card-title">Input Berkas</h5>
                                    <!-- Profile Edit Form -->
                                    <form action="/pengajuan/store" method="post" enctype="multipart/form-user">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-3 col-form-label"><b>Email</b></label>
                                            <div class="col-md-8 col-lg-8">
                                                <input name="email" readonly type="" class="form-control"
                                                    id="" value="">
                                                {{-- id="" value="{{ $user->email }}"> --}}
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="no telp" class="col-md-4 col-lg-12 col-form-label"><b>Surat
                                                    Persetujuan dari Asal Sekolah/Kampus</b></label>
                                            <div class="col-md-8 col-lg-11">
                                                <input class="form-control" name="surat" type="file"
                                                    id="formFile">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no telp"
                                                class="col-md-4 col-lg-12 col-form-label"><b>Proposal
                                                    Kegiatan</b></label>
                                            <div class="col-md-8 col-lg-11">
                                                <input class="form-control" name="proposal" type="file"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                        <br>
                                    </form><!-- End Profile Edit Form -->
                                </div>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                    {{-- @endforeach --}}

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    @include('template/footer')

</body>

</html>
