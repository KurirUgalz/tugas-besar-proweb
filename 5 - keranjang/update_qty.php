<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}

$cart_id = $_POST['cart_id'];
$action = $_POST['action'];

if ($action === 'tambah') {
    mysqli_query($conn, "UPDATE cart SET qty = qty + 1 WHERE id = '$cart_id'");
} elseif ($action === 'kurang') {
    $result = mysqli_query($conn, "SELECT qty FROM cart WHERE id = '$cart_id'");
    $row = mysqli_fetch_assoc($result);
    if ($row['qty'] > 1) {
        mysqli_query($conn, "UPDATE cart SET qty = qty - 1 WHERE id = '$cart_id'");
    }
}

header("Location: cart.php");
exit();
?>