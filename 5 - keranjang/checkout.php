<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../3%20-%20halamanlogin/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT cart.*, produk.nama, produk.harga 
                               FROM cart 
                               JOIN produk ON cart.produk_id = produk.id 
                               WHERE cart.user_id = '$user_id'");

$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
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
    .section {
      margin-bottom: 20px;
    }
    .summary {
      background: #f9f9f9;
      padding: 15px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }
    .summary-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .summary-total {
      font-weight: bold;
      font-size: 1.2rem;
      color: #333;
    }
    .hidden {
      display: none;
    }
    select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #28a745;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      margin-top: 10px;
    }
    button:hover {
      background-color: #218838;
    }
    .back-button {
      background-color: #007bff;
    }
    .back-button:hover {
      background-color: #0056b3;
    }
    .rekening-form {
      max-width: 500px; 
      margin: 0 auto;
    }

    .form-pembayaran {
      max-width: 500px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: normal;
    }

    .form-group select,
    .form-group input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      box-sizing: border-box;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: #fafafa;
    }

  </style>
  <script>
    function toggleBankOptions(paymentMethod) {
      const bankOptions = document.getElementById('bank-options');
      const ewalletOptions = document.getElementById('ewallet-options');
      if (paymentMethod === 'transfer') {
        bankOptions.classList.remove('hidden');
        ewalletOptions.classList.add('hidden');
      } else if (paymentMethod === 'ewallet') {
        ewalletOptions.classList.remove('hidden');
        bankOptions.classList.add('hidden');
      } else {
        bankOptions.classList.add('hidden');
        ewalletOptions.classList.add('hidden');
      }
    }

    function goBack() {
      window.history.back();
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>Checkout</h2>
    <form action="proses_checkout.php" method="post">
      <!-- Alamat Pengiriman -->
      <div class="section">
        <label>Alamat Pengiriman:<br>
          <textarea name="alamat" required rows="3" cols="40"></textarea>
        </label>
      </div>

      <!-- Ringkasan Pesanan -->
      <div class="section summary">
        <h3>Ringkasan Pesanan</h3>
        <?php while ($row = mysqli_fetch_assoc($result)): 
          $subtotal = $row['harga'] * $row['qty'];
          $total += $subtotal;
        ?>
        <div class="summary-row">
          <span><?= htmlspecialchars($row['nama']) ?> (<?= $row['qty'] ?>x)</span>
          <span>Rp<?= number_format($subtotal) ?></span>
        </div>
        <?php endwhile; ?>
        <div class="summary-row summary-total">
          <span>Total Pembayaran:</span>
          <span>Rp<?= number_format($total) ?></span>
        </div>
      </div>

      <!-- Metode Pembayaran -->
      <div class="section">
        <label>Pilih Metode Pembayaran:<br>
          <select name="pembayaran" onchange="toggleBankOptions(this.value)" required>
            <option value="">-- Pilih Metode --</option>
            <option value="transfer">Transfer Bank</option>
            <option value="cod">COD (Bayar di Tempat)</option>
            <option value="ewallet">E-Wallet</option>
          </select>
        </label>
      </div>

      <!-- Pilihan Bank -->
      <div id="bank-options" class="hidden">
        <label for="bank">Pilih Bank:</label>
          <select id="bank" name="bank">
            <option value="">Pilih Bank</option>
            <option value="BCA">Bank BCA</option>
            <option value="BNI">Bank BNI</option>
            <option value="BRI">Bank BRI</option>
            <option value="Mandiri">Bank Mandiri</option>
          </select>
        <div class="form-group">
          <label for="norek">Nomor Rekening:</label>
          <input type="text" id="norek" name="norek" placeholder="Masukkan nomor rekening">
        </div>
      </div>

      <!-- Pilihan E-Wallet -->
      <div id="ewallet-options" class="hidden">
        <label>Pilih E-Wallet:</label>
          <select name="ewallet" required>
            <option value="dana">Dana</option>
            <option value="gopay">GoPay</option>
          </select>
          <div class="form-group">
            <label for="notel">Nomor Telepon:</label>
            <input type="text" id="notel" name="notel" placeholder="Masukkan nomor telepon">
        </div>
      </div>

      <!-- Tombol Konfirmasi -->
      <button type="submit">Konfirmasi & Bayar</button>
      <!-- Tombol Kembali -->
      <button type="button" class="back-button" onclick="goBack()">Kembali</button>
    </form>
  </div>
</body>
</html>
