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
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 230px; height: 550px ; outline:1px solid black;">
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
                  <button type="button" class="btn btn-outline-dark m-1">Murid</button>
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
        
 <!---->
 <div class="card m-4" style="outline: 1px solid black ;">
  <div class="card-header" style="outline: 1px solid black ;">
        <div class="container d-flex justify-content-between">
                <div class="navbar-brand p-2">Kelas</div>
                  <button class="btn btn-outline-dark d-flex justify-content-end " type="submit">tambah kelas</button>
          </div>
      </div>    
        <div class="card-body">
            
                <div class="container-fluid d-flex justify-content-between">
                        <button class="btn dropdown-toggle-split d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                          5
                        </button>
                        
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
              
                    <form class="d-flex" role="search">
                      <input class="form-control d-flex justify-content-end" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-dark " type="submit">Search</button>
                    </form>
                  </div>
                <br>
                
              <table class="table table-stripped-columns text-center me-5"> 
                <tr>
                    <td>No</td>
                    <td>Nama Kelas</td>
                    <td>Jurusan</td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>10</td>
                    <td>RPL</td>
                    <td>
                        Lihat Data | Edit Data | Hapus Data
                    </td>
                </tr>
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
        <!-- div col kanan -->
        </div>
   
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>