<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../3%20-%20halamanlogin/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$alamat = $_POST['alamat'];
$pembayaran = $_POST['pembayaran'];
$total = 0;

$result = mysqli_query($conn, "SELECT cart.*, produk.harga FROM cart JOIN produk ON cart.produk_id = produk.id WHERE cart.user_id = '$user_id'");
while ($row = mysqli_fetch_assoc($result)) {
    $total += $row['harga'] * $row['qty'];
}

// Simpan pesanan ke tabel pesanan
mysqli_query($conn, "INSERT INTO pesanan (user_id, produk, total, alamat, pembayaran, status, tanggal) 
                     VALUES ('$user_id', 'Produk dari keranjang', '$total', '$alamat', '$pembayaran', 'pending', NOW())");
$order_id = mysqli_insert_id($conn);

// Simpan detail pesanan ke tabel order_items
$result = mysqli_query($conn, "SELECT cart.*, produk.harga FROM cart JOIN produk ON cart.produk_id = produk.id WHERE cart.user_id = '$user_id'");
while ($row = mysqli_fetch_assoc($result)) {
    mysqli_query($conn, "INSERT INTO order_items (order_id, produk_id, qty, harga) VALUES ('$order_id', '{$row['produk_id']}', '{$row['qty']}', '{$row['harga']}')");
}

// Hapus keranjang setelah checkout
mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #28a745;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h2>Pesanan Berhasil!</h2>
    <p>Total Pembayaran: Rp <?= number_format($total, 0, ',', '.') ?></p>
    <p>Alamat Pengiriman: <?= htmlspecialchars($alamat) ?></p>
    <p>Metode Pembayaran: <?= htmlspecialchars($pembayaran) ?></p>
    <a href="../7 - pesanan/pesanan.php" class="btn btn-custom">Lihat Pesanan</a>
    <a href="../2 - halamanberanda/beranda.php" class="btn btn-custom">Kembali ke Beranda</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
