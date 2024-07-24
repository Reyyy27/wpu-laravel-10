<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <main>
        <div class="d-flex justify-content-center" >
            <div class="card m-3 p-4">
            <div class="card-body m-2 p-3">
                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="">NIS</label>
                    <input type="text" name="nis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $data->nis }}">

                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $data->nama }}">

                    <label for="">Kelas</label>
                    <input type="text" name="kelas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $data->kelas }}">
                
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $data->jurusan }}">
                    
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