<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH Data Pengguna
            </div>
            <div class="card-body">
              <form action="simpanpengguna.php" method="POST" onsubmit="return validatePassword()">
                
                <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukan Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Re-Entry Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" required placeholder="Masukan Password" class="form-control">
                </div>
                <div id="error-message" style="color: red;"></div>

                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="text" name="nohp" placeholder="Masukkan Nomor Handhphone" class="form-control">
                </div>

                <div class="form-group">
                  <label>Level</label>
                  <select name="level" id="level" class="form-control" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>
                    <option value="Dokter">Dokter</option>
</select>
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
    </script>
  </body>
</html>