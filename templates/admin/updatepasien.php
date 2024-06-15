<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pasien        = $_POST['id_pasien'];
$nama           = $_POST['nama'];
$alamat       = $_POST['alamat'];
$nohp           = $_POST['nohp'];
$tlahir          = $_POST['tlahir'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pasien SET nama = '$nama', alamat = '$alamat', nohp = '$nohp', tlahir = '$tlahir' WHERE id_pasien = '$id_pasien'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: pasien.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>