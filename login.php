<?php
session_start();
header('Content-Type: application/json');
include 'includes/db.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; // Menggunakan MD5 untuk hashing password

    $sql = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        $response['success'] = true;
        $response['role'] = $user['role'];
    } else {
        $response['success'] = false;
        $response['message'] = "Invalid username or password.";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
}

echo json_encode($response);
?>
