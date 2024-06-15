<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Data Pasien</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../static/assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../static/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../static/assets/css/table.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../static/assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../static/assets/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../static/assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
             
	    <link rel="website icon" type="png" href="../static/assets/img/cropped-icon-RSAW-270x270.png">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="../static/assets/img/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url_for('pengguna') }}">Data Pengguna</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  active" href="{{ url_for('pasien') }}">Data Pasien</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url_for('riwayat') }}">Data Riwayat</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url_for('classification') }}">Screening Sistem</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url_for('logout') }}">Logout</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- market section start -->
      <div class="market_section layout_padding">
        <div class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        DATA PASIEN
                        </div>
                    <div class="card-body">
                    <a href="{{ url_for('tambahpasien') }}" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                    <button class="btn btn-md btn-success" style="margin-bottom: 10px" onclick="window.print()">Print this page</button>
                    <table class="table table-bordered" id="myTable">
    <thead>
        <tr>
            <th scope="col">NO.</th>
            <th scope="col">NAMA LENGKAP</th>
            <th scope="col">UAlamat</th>
            <th scope="col">NO HP</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
        {% for pasien in pasiens %}
        <tr>
            <td>{{ pasien.id_pasien }}</td>
            <td>{{ pasien.nama }}</td>
            <td>{{ pasien.alamat }}</td>
            <td>{{ pasien.nohp }}</td>
            <td>{{ pasien.tlahir }}</td>
            <td>
                <a href="editpasien.php?id={{ pasien.id_pasien }}" class="btn btn-sm btn-primary edit-button"><i class="fa fa-edit"></i></a>
                <a href="hapuspasien.php?id={{ pasien.id_pasien }}" class="btn btn-sm btn-danger delete-button" onclick="return confirm('Apakah yakin menghapus data ini?')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
            </div>
          </div>
      </div>
   


      <!-- market section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Andreas Adha Maulana</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="../static/assets/js/jquery.min.js"></script>
      <script src="../static/assets/js/popper.min.js"></script>
      <script src="../static/assets/js/bootstrap.bundle.min.js"></script>
      <script src="../static/assets/js/jquery-3.0.0.min.js"></script>
      <script src="../static/assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../static/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../static/assets/js/custom.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );

      function confirmDelete() {
            return confirm("Apakah yakin menghapus data ini?");
        }
    </script>
   </body>
</html>