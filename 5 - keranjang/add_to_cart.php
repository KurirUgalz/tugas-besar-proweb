<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    echo "Anda belum login. Silakan login terlebih dahulu.";
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$produk_id = $_POST['produk_id'];
$qty = 1;

// Periksa apakah produk sudah ada di keranjang
$result = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id' AND produk_id = '$produk_id'");
if (mysqli_num_rows($result) > 0) {
    mysqli_query($conn, "UPDATE cart SET qty = qty + 1 WHERE user_id = '$user_id' AND produk_id = '$produk_id'");
} else {
    mysqli_query($conn, "INSERT INTO cart (user_id, produk_id, qty) VALUES ('$user_id', '$produk_id', '$qty')");
}

header("Location: cart.php");
exit();
?>