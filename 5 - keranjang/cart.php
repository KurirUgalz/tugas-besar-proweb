<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_produk'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $qty = $_POST['qty'];

    // Inisialisasi keranjang jika belum ada
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    // Periksa apakah produk sudah ada di keranjang
    if (isset($_SESSION['cart'][$id])) {
        // Jika produk sudah ada, tambahkan jumlahnya
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        // Jika produk belum ada, tambahkan sebagai entri baru
        $_SESSION['cart'][$id] = [
            'nama' => $nama,
            'harga' => $harga,
            'gambar' => $gambar,
            'qty' => $qty
        ];
    }

    // Redirect kembali ke halaman produk
    header("Location: ../../../4 - halamantoko/halamanmen/jackets/halamanjacketman.php");
    exit();
}
$cart = $_SESSION['cart'] ?? [];
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
    <table border="1" cellpadding="8">
      <tr>
        <th>Produk</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Subtotal</th>
        <th>Aksi</th>
      </tr>
      <?php $total = 0; foreach ($cart as $id => $item): 
        $subtotal = $item['harga'] * $item['qty'];
        $total += $subtotal;
      ?>
      <tr>
        <td><?= htmlspecialchars($item['nama']) ?></td>
        <td><img src="<?= htmlspecialchars($item['gambar']) ?>" alt="gambar" style="width:60px;height:60px;object-fit:cover;"></td>
        <td>Rp<?= number_format($item['harga']) ?></td>
        <td><?= $item['qty'] ?></td>
        <td>Rp<?= number_format($subtotal) ?></td>
        <td>
          <form action="hapus_produk.php" method="post" style="display:inline;">
            <input type="hidden" name="id_produk" value="<?= $id ?>">
            <button type="submit" style="background:red;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;">Hapus</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
      <tr><td colspan="4"><b>Total</b></td><td><b>Rp<?= number_format($total) ?></b></td><td></td></tr>
    </table>
    <form action="proses_checkout.php" method="post">
      <button type="submit">Checkout</button>
    </form>
  <?php endif; ?>
</body>
</html>