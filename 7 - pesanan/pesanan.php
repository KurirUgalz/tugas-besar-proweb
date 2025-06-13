<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../3 - halamanlogin/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE user_id = '$user_id' ORDER BY tanggal DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesanan Saya</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    h2 {
      font-size: 1.8rem;
      color: #333;
      margin-bottom: 20px;
    }
    .order {
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .order:last-child {
      border-bottom: none;
    }
    .order-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .order-status {
      font-weight: bold;
      color: #4caf50; /* Green for delivered */
    }
    .order-status.in-transit {
      color: #ff9800; /* Orange for in transit */
    }
    .order-status.pending {
      color: #f44336; /* Red for pending */
    }
    .order-details {
      margin-top: 10px;
    }
    .order-details span {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Pesanan Saya</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="order">
          <div class="order-header">
            <span>ID Pesanan: <?= htmlspecialchars($row['id']) ?></span>
            <span class="order-status <?= htmlspecialchars($row['status']) ?>">
              <?= htmlspecialchars($row['status']) === 'delivered' ? 'Sudah Sampai' : (htmlspecialchars($row['status']) === 'in-transit' ? 'Sedang Diantar' : 'Menunggu Konfirmasi') ?>
            </span>
          </div>
          <div class="order-details">
            <span>Produk: <?= htmlspecialchars($row['produk']) ?></span>
            <span>Total: Rp<?= number_format($row['total']) ?></span>
            <span>Tanggal: <?= htmlspecialchars($row['tanggal']) ?></span>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>Anda belum memiliki pesanan.</p>
    <?php endif; ?>
  </div>
</body>
</html>