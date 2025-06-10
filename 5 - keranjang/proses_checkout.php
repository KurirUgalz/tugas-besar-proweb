<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "toko_online");
$user_email = $_SESSION['email'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$user_email'"));
$user_id = $user['id'];
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['harga'] * $item['qty'];
}
mysqli_query($conn, "INSERT INTO orders (user_id, total) VALUES ('$user_id', '$total')");
$order_id = mysqli_insert_id($conn);
foreach ($_SESSION['cart'] as $pid => $item) {
    mysqli_query($conn, "INSERT INTO order_items (order_id, produk_id, qty, harga) VALUES ('$order_id', '$pid', '{$item['qty']}', '{$item['harga']}')");
}
unset($_SESSION['cart']);
echo "<h2>Pesanan berhasil! Terima kasih sudah belanja.</h2>";
echo '<a href="/2 - halamanberanda/beranda.php">Kembali ke Beranda</a>';
?>