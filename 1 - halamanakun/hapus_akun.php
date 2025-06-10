<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../2 - halamanberanda/beranda.php");
    exit();
}
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";
$conn = mysqli_connect($host, $user, $pass, $db);

$email = $_SESSION["email"];
// Hapus user dari database
mysqli_query($conn, "DELETE FROM users WHERE email='$email'");

// Hapus session
session_unset();
session_destroy();

// Redirect ke beranda
header("Location: ../2 - halamanberanda/beranda.php?hapus=1");
exit();
?>