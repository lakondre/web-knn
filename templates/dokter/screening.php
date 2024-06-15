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
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Cropper.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Cropper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
      <!-- bootstrap css --> 
      <link rel="stylesheet" type="text/css" href="../static/assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../static/assets/css/style.css">
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
         <div class="container">
            <div class="market_section_2">
               <div class="card-deck">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <form method="post">
                        <label for="">Pilih Pelanggan :</label>
                        <select name="pelanggan" class="card body">
            <option value="">Pilih</option>
            <?php 
            include('koneksi.php');
                $pelanggan = $con->query("select * from pasien order by id_pasien");
                while ($d_pelanggan=$pelanggan->fetch_assoc()) {
                   echo "
                   <option value='$d_pelanggan[id_pasien]'>$d_pelanggan[nama]</option>
                   ";
                }

             ?>
                     </select>
               </form>
               <p class="card-text">Pilih Foto Mata tekan tombol dibawah</p>
               <div class="container">
               <form action="/upload" method="post" enctype="multipart/form-data">
                  <input type="file" name="file" accept="image/*">
                  <button type="submit">Upload Image</button>
               </form>
               </div>
                  
                 
               {% if result %}
        <h2>Classification Result: {{ result }}</h2>
        <img src="{{ image_url }}" alt="Uploaded Image" style="max-width: 500px;">
    {% endif %}
                        
                      </p>
                    </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
      <!-- market section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
        let cropper;

        // Pratinjau gambar yang dipilih
        function previewImage(event) {
            const imagePreview = document.getElementById("image-preview");
            const imageContainer = document.getElementById("image-container");
            const cropButton = document.getElementById("crop-button");

            // Tampilkan pratinjau
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imageContainer.style.display = "block";
            cropButton.style.display = "block";

            // Inisialisasi Cropper.js
            if (cropper) {
                cropper.destroy(); // Hancurkan cropper sebelumnya jika ada
            }

            cropper = new Cropper(imagePreview, {
                aspectRatio: 1, // Rasio aspek untuk pemangkasan
                viewMode: 2,
            });
        }

        // Fungsi untuk memotong gambar
        function cropImage() {
            const submitButton = document.getElementById("submit-button");

            // Mendapatkan hasil potongan
            const canvas = cropper.getCroppedCanvas();
            canvas.toBlob((blob) => {
                const formData = new FormData(document.getElementById("image-form"));
                formData.append("cropped_image", blob, "cropped_image.png");

                // Mengganti file asli dengan versi yang telah dipotong
                const fileInput = document.getElementById("file-upload");
                fileInput.files = new FileList([blob]);

                submitButton.style.display = "block"; // Tampilkan tombol submit
            });
            
        }

        $('#file-upload').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(fileName);
        });
    </script>
   </body>
</html>

