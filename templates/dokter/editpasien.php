<?php 
  
  include('../admin/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM pasien WHERE id_pasien = $id LIMIT 1";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pasien</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT Data Pasien
            </div>
            <div class="card-body">
              <form action="updatepasien.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Pasien" class="form-control">
                  <input type="hidden" name="id_pasien" value="<?php echo $row['id_pasien'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="text" name="nohp" value="<?php echo $row['nohp']?>" placeholder="Masukkan Nomor Handhphone" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tlahir" value="<?php echo $row['tlahir']?>" placeholder="Masukkan Nomor Tanggal Lahir" class="form-control tlahir" id="tlahir">  
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