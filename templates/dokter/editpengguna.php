<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM user WHERE id_user = $id LIMIT 1";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT Data Pengguna
            </div>
            <div class="card-body">
              <form action="updatepengguna.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" name="nama" value="<?php echo $row['nm_user'] ?>" placeholder="Masukkan Nama Pengguna" class="form-control">
                  <input type="hidden" name="id_user" value="<?php echo $row['id_user'] ?>">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Masukkan Username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" nama="password" value="<?php echo $row['pass']?>" placeholder="Masukan Password" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="text" name="nohp" value="<?php echo $row['nohp']?>" placeholder="Masukkan Nomor Handhphone" class="form-control">
                </div>

                <div class="form-group">
                  <label>Level</label>
                  <select name="level" id="level" value="<?php echo $row['level']?>" class="form-control" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>
                    <option value="Dokter">Dokter</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>