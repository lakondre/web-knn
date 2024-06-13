<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$nohp           = $_POST['nohp'];
$level          = $_POST['level'];

//query insert data ke dalam database
$query = "INSERT INTO user (nm_user, username, nohp, pass, level) VALUES ('$nama', '$username', '$nohp', '$password', '$level')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
    header("location: pengguna.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>