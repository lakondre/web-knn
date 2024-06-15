<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id_user = '$id'";

if($con->query($query)) {
    header("location: pengguna.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>