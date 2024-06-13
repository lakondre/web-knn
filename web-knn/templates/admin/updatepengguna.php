<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_user        = $_POST['id_user'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$nohp           = $_POST['nohp'];
$level          = $_POST['level'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nm_user = '$nama', username = '$username', nohp = '$nohp', pass = '$password', level = '$level' WHERE id_user = '$id_user'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: pengguna.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>