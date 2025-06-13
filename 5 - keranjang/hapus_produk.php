<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../3%20-%20halamanlogin/login.php");
    exit();
}

$cart_id = $_POST['cart_id'];

mysqli_query($conn, "DELETE FROM cart WHERE id = '$cart_id'");

header("Location: cart.php");
exit();
?>