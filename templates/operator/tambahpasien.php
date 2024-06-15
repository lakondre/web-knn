<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <title>Tambah Data Pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah Data Pasien
            </div>
            <div class="card-body">
              <form action="simpanpasien.php" method="POST" onsubmit="return validatePassword()">
                
                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Pasien"></textarea>
                </div>

                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="text" name="nohp" placeholder="Masukkan Nomor Handphone" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tlahir" placeholder="Masukkan Nomor Tanggal Lahir" class="form-control tlahir" id="tlahir">  
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        function validatePassword() {
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("confirm-password");
            const errorMessage = document.getElementById("error-message");

            if (password.value !== confirmPassword.value) {
                errorMessage.textContent = "Kata sandi tidak sesuai. Harap pastikan kata sandi cocok.";
                return false; // Mencegah form dikirim jika kata sandi tidak cocok
            }

            errorMessage.textContent = ""; // Jika cocok, kosongkan pesan kesalahan
            return true; // Izinkan form dikirim
        }
        $(function () {
        $('.tlahir').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,\
        changeYear: true
            });
        });
    </script>
  </body>
</html>