<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    header("Location: 3 - halamanlogin/login.php");
} else {
    echo "Gagal daftar: " . $conn->error;
}
?>