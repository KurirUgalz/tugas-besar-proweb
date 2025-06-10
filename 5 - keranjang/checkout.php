<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}
if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
</head>
<body>
  <h2>Checkout</h2>
  <form action="proses_checkout.php" method="post">
    <label>Alamat Pengiriman:<br>
      <textarea name="alamat" required rows="3" cols="40"></textarea>
    </label><br><br>
    <label>Pilih Metode Pembayaran:<br>
      <select name="pembayaran" required>
        <option value="transfer">Transfer Bank</option>
        <option value="cod">COD (Bayar di Tempat)</option>
        <option value="ewallet">E-Wallet</option>
      </select>
    </label><br><br>
    <button type="submit">Konfirmasi & Bayar</button>
  </form>
</body>
</html>