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
                  <h5 class="card-title">LOGBOOK ADMIN <span>| INTERNSHIP</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col" name="name">Nama</th>
                        <th scope="col" name="tgl">Tanggal</th>
                        <th scope="col" name="des">Deskripsi</th>
                      </tr>
                    </thead>
                    @foreach($logbook as $data )
                    <tbody>
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->NAMA }}</td>
                        <td>{{ $data->TGL_KEGIATAN }}</td>
                        <td>{{ $data->DESKRIPSI }}</td>
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