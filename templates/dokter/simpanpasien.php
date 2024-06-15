<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama           = $_POST['nama'];
$alamat       = $_POST['alamat'];
$nohp           = $_POST['nohp'];
$tlahir          = $_POST['tlahir'];

//query insert data ke dalam database
$query = "INSERT INTO pasien (nama, alamat, nohp, tlahir) VALUES ('$nama', '$alamat', '$nohp', '$tlahir')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
    header("location: pasien.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>