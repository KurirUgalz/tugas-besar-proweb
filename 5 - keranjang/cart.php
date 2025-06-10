<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}
$cart = $_SESSION['cart'] ?? [];
$conn = mysqli_connect("localhost", "root", "", "toko_online");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Keranjang Belanja</title>
</head>
<body>
  <h2>Keranjang Belanja</h2>
  <?php if (empty($cart)): ?>
    <p>Keranjang kosong.</p>
  <?php else: ?>
    <form action="checkout.php" method="post">
      <table border="1" cellpadding="8">
        <tr>
          <th>Produk</th>
          <th>Gambar</th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Subtotal</th>
        </tr>
        <?php $total = 0; foreach ($cart as $id => $item): 
          // Ambil data produk dari database
          $q = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id' LIMIT 1");
          $produk = mysqli_fetch_assoc($q);
          $nama = $produk['nama'] ?? $item['nama'];
          $harga = $produk['harga'] ?? $item['harga'];
          $gambar = $produk['gambar'] ?? '';
          $deskripsi = $produk['Deskripsi'] ?? '';
          $qty = $item['qty'];
          $subtotal = $harga * $qty;
          $total += $subtotal;
        ?>
        <tr>
          <td><?= htmlspecialchars($nama) ?></td>
          <td>
            <?php if ($gambar): ?>
              <img src="<?= htmlspecialchars($gambar) ?>" alt="gambar" style="width:60px;height:60px;object-fit:cover;">
            <?php endif; ?>
          </td>
          <td><?= htmlspecialchars($deskripsi) ?></td>
          <td>Rp<?= number_format($harga) ?></td>
          <td><?= $qty ?></td>
          <td>Rp<?= number_format($subtotal) ?></td>
        </tr>
        <?php endforeach; ?>
        <tr><td colspan="5"><b>Total</b></td><td><b>Rp<?= number_format($total) ?></b></td></tr>
      </table>
      <button type="submit">Checkout</button>
    </form>
  <?php endif; ?>
</body>
</html>