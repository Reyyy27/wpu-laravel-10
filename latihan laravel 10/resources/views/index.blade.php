<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kelas Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>
    

    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico" 
      type="image/x-icon"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <!-- Fonts and icons -->
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
  </head>

<!-- body -->

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
              <img
                src="assets/img/logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="40"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="#">
                        <span class="sub-item">Kelas</span>
                      </a>
                    </li>
                    <li>
                      <a href="/siswa">
                        <span class="sub-item">Siswa</span>
                      </a>
                    </li>
                    <li>
                      <a href="/mapel">
                        <span class="sub-item">Mapel</span>
                      </a>
                    </li>
                    <li>
                      <a href="/guru">
                        <span class="sub-item">Guru</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="#" class="logo">
                <img
                  src="assets/img/logo.png"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">

              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <form action="{{ route('kelas.index') }}" method="GET">
                    <input type="search" name="search" id="searchInput" class="form-control mx-sm-3" placeholder="Search">
                </form>
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search" action="/" method="GET">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                          name="search"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
              
            
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Kelas</h3>
                <h6 class="op-7 mb-2">Tampilan Tabel Kelas</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                
          <!--       modal           -->

                            <!-- Tombol untuk membuka modal --><!-- Tombol untuk membuka modal -->
            <button type="button" class="btn btn-outline-dark d-flex justify-content-end" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Kelas</button>

            <!-- Modal -->
            <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdatakelas" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahdatakelas">Tambah Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="tambahKelasForm" action="{{ url('/store') }}" method="POST">
                      @csrf
                      <label class="form-label">Kelas</label>
                      <input type="text" name="kelas" id="kelas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      
                      <label class="form-label">Jurusan</label>
                      <input type="text" name="jurusan" id="jurusan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="saveChanges" class="btn btn-success">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

                <!-- batas -->

              </div>
            </div>
            
            
              <div class="col">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Tabel Kelas</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive text-center">
                        
                
                        <!-- Projects table -->
                        <table class="table align-items-center mb-0" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class="text-center">Kelas</th>
                                    <th scope="col" class="text-center">Jurusan</th>
                                    <th scope="col" class="text-center">Jumlah Siswa</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                
                            @php
                                $no = 1;
                            @endphp
                
                            <tbody>
                                @foreach ($kelas as $row)
                                <tr>
                                    <td>{{ $no++ }}</td> <!-- no -->
                                    <td>{{ $row->kelas }}</td> <!-- kelas -->
                                    <td>{{ $row->jurusan }}</td> <!-- jurusan -->
                                    <td>{{ $row->siswa->count() }}</td>
                                    <td> <!-- action btn -->
                                        <a href="/editdatakelas/{{ $row->id }}" class="btn btn-outline-primary">Edit Data</a>
                                        <a href="javascript:void(0)" class="btn btn-outline-danger delete" data-id="{{ $row->id }}">Hapus Data</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- div wrap -->

      
    </div>
    
    
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify 
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>

<!---------------------------- Sweetalert ------------------------------------------>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>

    $('.delete').click(function(){
      var kelasid = $(this).attr('data-id');
      swal({
      title: "Yakin?",
      text: "Kamu akan menghapus data "+kelasid+"!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/delete/"+kelasid+""
        swal("Data berhasil dihapus!", {
          icon: "success",
        });
      } else {
        swal("Data kamu aman!");
      }
    });

    });

  </script>

<!--------------------- sweetalert ----------------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.delete').forEach(function (button) {
          button.addEventListener('click', function () {
              var dataId = this.getAttribute('data-id');
              swal({
                  title: "Apakah kamu yakin?",
                  text: "Data ini akan dihapus secara permanen!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then((willDelete) => {
                  if (willDelete) {
                      window.location.href = "/deletekelas/" + dataId;
                  }
              });
          });
      });
  });
</script>

<!-- ------------------ tambah data ----------------- -->
<script>
  $(document).ready(function() {
      var rowCount = $('#dataTable tr').length;

      $('#tambahKelasForm').on('submit', function(e) {
          e.preventDefault(); // Mencegah form default submission

          var formData = $(this).serialize();

          $.ajax({
              url: '/insertdatakelas',
              type: 'POST',
              data: formData,
              success: function(response) {
                  $('#tambahdata').modal('hide');
                  
                  swal("Berhasil!", "Data kelas telah ditambahkan.", "success")
                  .then(() => {
                      var newRow = '<tr id="row-' + response.id + '">' +
                          '<td>' + rowCount + '</td>' +
                          '<td>' + response.kelas + '</td>' +
                          '<td>' + response.jurusan + '</td>' +
                          '<td>' + response.siswa_count + '</td>' +
                          '<td>' +
                              '<a href="/editdatakelas/' + response.id + '" class="btn btn-outline-primary">Edit Data</a> ' +
                              '<a href="javascript:void(0)" class="btn btn-outline-danger delete" data-id="' + response.id + '">Hapus Data</a>' +
                          '</td>' +
                          '</tr>';
                      $('#dataTable').append(newRow);
                      rowCount++;
                  });
              },
              error: function(xhr) {
                  swal("Terjadi kesalahan!", "Gagal menambahkan data kelas.", "error");
              }
          });
      });
      
      $(document).on('click', '.delete', function() {
    var id = $(this).data('id');
    var token = $('meta[name="csrf-token"]').attr('content'); // Ambil token CSRF

    swal({
        title: "Apakah kamu yakin?",
        text: "Data ini akan dihapus secara permanen!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: '/deletedatakelas/' + id,
                type: 'DELETE',
                data: {
                    _token: token // Sertakan token CSRF
                },
                success: function(response) {
                    $('#row-' + id).remove(); // Hapus baris tabel
                    swal("Berhasil!", "Data kelas telah dihapus.", "success");
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Tambahkan untuk debugging
                    swal("Terjadi kesalahan!", "Gagal menghapus data kelas.", "error");
                }
            });
        }
    });
});


      $('#saveChanges').on('click', function(e) {
          e.preventDefault(); // Mencegah form default submission

          var formData = {
              _token: $('input[name=_token]').val(),
              kelas: $('#kelas').val(),
              jurusan: $('#jurusan').val()
          };

          $.ajax({
              url: '/insertdatakelas',
              type: 'POST',
              data: formData,
              success: function(response) {
                  $('#tambahdata').modal('hide');

                  swal("Berhasil!", "Data kelas telah ditambahkan.", "success")
                  .then(() => {
                      var newRow = '<tr id="row-' + response.id + '">' +
                          '<td>' + rowCount + '</td>' +
                          '<td>' + response.kelas + '</td>' +
                          '<td>' + response.jurusan + '</td>' +
                          '<td>' + response.siswa_count + '</td>' +
                          '<td>' +
                              '<a href="/editdatakelas/' + response.id + '" class="btn btn-outline-primary">Edit Data</a> ' +
                              '<a href="javascript:void(0)" class="btn btn-outline-danger delete" data-id="' + response.id + '">Hapus Data</a>' +
                          '</td>' +
                          '</tr>';
                      $('#dataTable').append(newRow);
                      rowCount++;
                  });
              },
              error: function(xhr) {
                  swal("Terjadi kesalahan!", "Gagal menambahkan data kelas.", "error");
              }
          });
      });
  });
</script>



  </body>
</html>
