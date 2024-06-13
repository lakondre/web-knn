<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pasien WHERE id_pasien = '$id'";

if($con->query($query)) {
    header("location: pasien.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>