<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_mata";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
