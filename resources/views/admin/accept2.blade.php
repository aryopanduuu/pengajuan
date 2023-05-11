<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Internship | Rekap Tahap 2</title>
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
            <h5 class="card-title">VALIDASI PKL/MAGANG <span>| TAHAP 2</span></h5>

            <!-- MAGANG SISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Validasi <span>| Tahap 2</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email Ketua</th>
                        <th scope="col">Surat Pengantar</th>
                        <th scope="col">Proposal Pengajuan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach($accept2 as $data )
                    <tbody>
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->EMAIL }}</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i>{{ $data->SURAT_PENGANTAR }}</a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i>{{ $data->PROPOSAL }}</a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button></td>
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