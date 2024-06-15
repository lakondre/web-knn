<?php
// upload_image.php
$uploadDir = 'uploads/';
$fileName = basename($_FILES['cropped_image']['name']);
$uploadFile = $uploadDir . $fileName;

// Memeriksa apakah direktori tujuan ada, jika tidak, buat direktori tersebut
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Pindahkan file yang diunggah ke lokasi tujuan
if (move_uploaded_file($_FILES['cropped_image']['tmp_name'], $uploadFile)) {
    // Redirect ke halaman yang menampilkan gambar yang telah diunggah
    header("Location: /index.html?image=" . $uploadFile);
} else {
    echo "Terjadi kesalahan saat mengunggah gambar.";
}
?>
