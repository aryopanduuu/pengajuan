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
                    @foreach($accept1 as $data )
                    <tbody>
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->NAMA }}</td>
                        <td>{{ $data->ASAL_INSTANSI }}</td>
                        <td>{{ $data->JURUSAN }}</td>
                        <td>{{ $data->NO_TLP }}</td>
                        <td>{{ $data->PERIODE_MAGANG }}</td>
                        <td>{{ $data->START_DATE }}</td>
                        <td>{{ $data->END_DATE }}</td>
                        <td>{{ $data->PILIHAN_TEMPAT }}</td>
                        <td>{{ $data->RENCANA_KEGIATAN }}</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i>{{ $data->FILE_CV }}</a></td>
                        <td><button type="button" class="btn btn-primary">{{ $data->STATUS_PENDAFTARAN}}ACC</button></td>
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