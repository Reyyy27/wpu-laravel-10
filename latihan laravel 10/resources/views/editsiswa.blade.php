<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon"/>

    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />

    <style>
      body {
        background-color: #1b1b1b;
      }
      .card {
        width: 50%;
      }
      .form-label {
        text-align: left;
      }
      .form-control, .form-select {
        width: 75%;
        margin-left: auto;
      }
      .form-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
      }
    </style>
    
  </head>
  <body>
    
    <main>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card text-center m-3">
              <div class="card-header">
                <h5 class="card-title">Edit Siswa</h5>
              </div>
              <div class="card-body">
                <form action="/updatedata/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" name="nis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $siswa->nis }}">
                    </div>

                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $siswa->nama }}">
                    </div>

                    <div class="form-group">
                      <label for="">Kelas</label>
                        <select class="form-select" id="editKelas" name="kelas_id" aria-label="Default select example">
                            <option selected>Pilih kelas</option>
                            @foreach ($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->kelas }} {{ $kls->jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </form>
               
            </div>
            </div>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>

