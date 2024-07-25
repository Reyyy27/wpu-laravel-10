<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <main>
        <!--sidebars -->
        <div class="row">
        <div class="col-2 text-center">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 230px; height: 1500px ; outline:1px solid black;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Menu Utama</span>
            </a>
            <br>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                  <button type="button" class="btn btn-outline-dark m-1" >Kelas</button>
              </li>
              
              <li>
                  <a href="siswa" type="button" class="btn btn-outline-dark m-1">Murid</a>
              </li>
              
              <li>
                  <button type="button" class="btn btn-outline-dark m-1">Mapel</button>
              </li>
            </ul>  
          </div>
        </div>
    

          <!--navbar-->
  <div class="col w-auto">
        <nav class="navbar bg-body-tertiary p-3" style="height:75px ;outline: 1px solid black ;">
            <a class="navbar-brand">Kelas</a>
              <button class="btn btn-outline-dark" type="submit">logout</button>
        </nav>
        
        @if ($massage = Session::get('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <div>
            {{ $massage }}
          </div>
        </div>
        
        
        @endif
 <!---->
      <div class="card m-4" style="outline: 1px solid black ;">
      <div class="card-header" style="outline: 1px solid black ;">
        <div class="container d-flex justify-content-between">
          <div class="navbar-brand p-2">Kelas</div>
          <button type="button" class="btn btn-outline-dark d-flex justify-content-end" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Kelas</button>
        </div>

      <!-- Modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdatakelas" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahdatakelas">Tambah Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/insertdatakelas" method="POST" enctype="multipart/form-data">
                  @csrf
                  <label class="form-label">Kelas</label>
                  <input type="text" name="kelas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  
                  <label class="form-label">Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
                </form>
            </div>
          </div>
        </div>
     
      </div>     <!-- card head -->
        <div class="card-body">
            
                <div class="container-fluid d-flex justify-content-between">
                        <button class="btn dropdown-toggle-split d-flex" data-bs-toggle="dropdown" aria-expanded="false" style="outline: 1px solid black">
                          
                        </button>
                        
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item" href="#">10</a></li>
                          <li><a class="dropdown-item" href="#">50</a></li>
                          <li><a class="dropdown-item" href="#">100</a></li>
                        </ul>
              <!-- Search bar -->
                        <form class="d-flex justify-content-between" role="search">
                          <input class="form-control d-flex" type="search" placeholder="Search" aria-label="Search" style="outline:1px solid black">
                          <button class="btn btn-outline-dark d-flex" type="submit">Search</button>
                        </form>
                      </div>
                  
                <br>
                <!-- table -->
              <table class="table table-stripped-columns text-center me-5" style="outline: 1px solid black"> 
                
                <tr>
                    <td>No</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                    <td>Jumlah Siswa</td>
                    <td>Aksi</td>
                </tr>

                @php
                    $no = 1;
                    
                @endphp

                @foreach ($data as $row)

                <tr>
                    <td>{{ $no++ }}</td> <!-- no -->
                    <td>{{ $row->kelas }}</td> <!-- kelas -->
                    <td>{{ $row->jurusan }}</td> <!-- jurusan -->
                    <td>{{ $row->siswa->count() }}</td>
                    <td> <!-- action btn -->
                      <button type="button" class="btn btn-outline-secondary">Lihat Data</button>
                         
                        <a href="/editdatakelas/{{ $row->id }}" class="btn btn-outline-primary">Edit Data</a>
                        
                        <a href="/deletekelas/{{ $row->id }}" class="btn btn-outline-danger">Hapus Data</a>
                        
                    </td>
                </tr>
                    
                @endforeach

              </table>
              <div class="list-inline d-flex">
                <div class="p-2 flex-grow-1">Showing 1 to 10 out of 20</div>
                <div class="p-2 btn btn-outline-dark ">Prev</div>
                <div class="p-2 btn btn-outline-dark ">Next</div>
              </div>
        </div>
        </div>
        <!--div col 2-->
        </div>
        <!-- div row -->
        </div>
   
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>