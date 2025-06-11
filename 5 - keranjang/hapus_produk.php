<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_produk'];

    // Hapus produk dari keranjang
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }

    // Redirect kembali ke halaman keranjang
    header("Location: cart.php");
    exit();
}
?>