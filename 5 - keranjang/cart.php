<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_online");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT cart.*, produk.nama, produk.harga, produk.gambar 
                               FROM cart 
                               JOIN produk ON cart.produk_id = produk.id 
                               WHERE cart.user_id = '$user_id'");
$total = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Keranjang Belanja - Modern UI</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style>
    /* Reset & base */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      font-family: 'Georgia', serif; /* A classic serif font for a vintage look */
      margin: 0;
      background: #f9f7f2; /* Light beige background */
      color: #4e3e28; /* Dark brown color for text */
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    h2 {
      margin: 0;
      padding: 20px 0 10px 0;
      text-align: center;
      font-size: 2.5rem; /* Smaller font size for a classic feel */
      font-weight: 400; /* Lighter weight for a softer appearance */
      letter-spacing: 1.2px;
      color: #8a6f3d; /* A muted golden color */
    }

    /* Page container for main content */
    .page-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
      gap: 24px;
      flex: 1 1 auto;
      max-width: 1280px;
      margin: 0 auto;
    }

    /* Cart Items Container */
    .cart-items {
      flex: 1 1 700px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    /* Single Cart Item Card */
    .cart-card {
      display: grid;
      grid-template-columns: 96px 1fr 140px 140px 120px 48px;
      grid-template-areas:
        "img name price qty subtotal action";
      background: #ffffff;
      border: 1px solid #d8c7b0;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.08);
      padding: 18px 24px;
      align-items: center;
      transition: box-shadow 0.3s ease;
    }
    .cart-card:hover {
      box-shadow: 0 12px 28px rgb(0 0 0 / 0.15);
    }

    .cart-card img {
      grid-area: img;
      width: 80px;
      height: 80px;
      border-radius: 12px;
      object-fit: cover;
      box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
      transition: transform 0.3s ease;
    }
    .cart-card img:hover {
      transform: scale(1.1);
    }

    .cart-product-name {
      grid-area: name;
      font-weight: 700;
      font-size: 1.1rem;
      color: #222;
      padding-left: 20px;
    }
    /* Price */
    .cart-price {
      grid-area: price;
      font-weight: 600;
      font-size: 1rem;
      color: #0984e3;
      text-align: center;
    }

    /* Quantity container */
    .cart-qty {
      grid-area: qty;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }
    .qty-btn {
      background: #00b894;
      border: none;
      color: white;
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 22px;
      line-height: 1;
      cursor: pointer;
      user-select: none;
      box-shadow: 0 4px 8px rgb(0 184 148 / 0.3);
      transition: background-color 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .qty-btn:disabled {
      background: #a2d6cc;
      cursor: not-allowed;
      box-shadow: none;
    }
    .qty-btn:hover:not(:disabled) {
      background: #00a07a;
    }
    .qty-num {
      font-weight: 700;
      font-size: 1.1rem;
      min-width: 28px;
      text-align: center;
      user-select: none;
    }

    /* Subtotal */
    .cart-subtotal {
      grid-area: subtotal;
      font-weight: 700;
      font-size: 1rem;
      color: #636e72;
      text-align: center;
    }

    /* Action (Delete) */
    .cart-action {
      grid-area: action;
      display: flex;
      justify-content: center;
    }
    .delete-btn {
      background: #ff6b6b;
      border: none;
      color: white;
      padding: 8px 12px;
      border-radius: 14px;
      font-size: 20px;
      cursor: pointer;
      user-select: none;
      box-shadow: 0 4px 8px rgb(255 107 107 / 0.4);
      transition: background-color 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .delete-btn:hover {
      background: #d64545;
    }

    /* Empty cart message */
    .empty-message {
      font-size: 1.5rem;
      text-align: center;
      color: #636e72;
      margin-top: 40px;
      width: 100%;
      user-select: none;
    }

    /* Sidebar summary */
    .cart-summary {
      flex: 0 0 280px;
      background: white;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgb(0 0 0 / 0.1);
      padding: 28px 36px;
      display: flex;
      flex-direction: column;
      gap: 32px;
      position: sticky;
      top: 24px;
      height: fit-content;
    }

    .summary-title {
      font-weight: 700;
      font-size: 1.7rem;
      text-align: center;
      color: #2d3436;
      user-select: none;
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      font-weight: 600;
      font-size: 1.1rem;
      color: #0984e3;
      user-select: none;
    }

    .summary-total {
      font-weight: 800;
      font-size: 1.5rem;
      color: #00b894;
      user-select: none;
    }

    .checkout-btn {
      padding: 14px 0;
      font-size: 1.3rem;
      font-weight: 700;
      color: white;
      background-color: #0984e3;
      border: none;
      border-radius: 14px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease, transform 0.2s ease;
      user-select: none;
      box-shadow: 0 6px 16px rgb(9 132 227 / 0.5);
    }
    .checkout-btn:hover {
      background-color: #0652dd;
      transform: translateY(-3px);
      box-shadow: 0 10px 24px rgb(6 82 221 / 0.7);
    }

    /* Back button container */
    .back-btn {
      text-align: center;
      margin: 30px auto 40px auto;
    }
    .back-btn button {
      padding: 12px 28px;
      font-size: 1.1rem;
      color: white;
      background-color: #0984e3;
      border: none;
      border-radius: 14px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
      user-select: none;
      box-shadow: 0 6px 18px rgb(9 132 227 / 0.6);
    }
    .back-btn button:hover {
      background-color: #0652dd;
      transform: translateY(-3px);
      box-shadow: 0 10px 24px rgb(6 82 221 / 0.8);
    }

    /* Responsive design */
    @media (max-width: 991px) {
      .page-container {
        flex-direction: column;
        align-items: center;
      }
      .cart-items,
      .cart-summary {
        flex: 1 1 100%;
        max-width: 480px;
      }
      .cart-summary {
        position: relative;
        top: auto;
        margin-top: 30px;
        padding: 24px 28px;
      }
    }
    @media (max-width: 480px) {
      .cart-card {
        grid-template-columns: 80px 1fr 80px 80px 80px 40px;
        padding: 12px 16px;
        grid-template-areas:
          "img name price price price action";
      }
      .cart-qty,
      .cart-subtotal {
        display: none;
      }
      .cart-price {
        grid-column: span 2;
      }
      .cart-product-name {
        padding-left: 12px;
        font-size: 1rem;
      }
      .qty-btn {
        padding: 5px 8px;
        font-size: 18px;
      }
      .delete-btn {
        font-size: 18px;
        padding: 6px 10px;
      }
    }
  </style>
</head>
<body>
  <h2>Keranjang Belanja</h2>

<?php if (mysqli_num_rows($result) == 0): ?>
  <p class="empty-message">Keranjang kosong.</p>
<?php else: ?>

  <div class="page-container">
    <div class="cart-items">

      <?php while ($row = mysqli_fetch_assoc($result)):
        $subtotal = $row['harga'] * $row['qty'];
        $total += $subtotal;
      ?>

      <div class="cart-card" aria-label="Produk <?= htmlspecialchars($row['nama']) ?> di keranjang">
        <img src="../4 - halamantoko/<?= htmlspecialchars($row['gambar']) ?>" alt="Gambar produk <?= htmlspecialchars($row['nama']) ?>" loading="lazy" />
        <div class="cart-product-name"><?= htmlspecialchars($row['nama']) ?></div>

        <div class="cart-price" aria-label="Harga produk">Rp<?= number_format($row['harga']) ?></div>

        <div class="cart-qty" role="group" aria-label="Kontrol kuantitas produk">
          <form action="update_qty.php" method="post" style="display:inline;">
            <input type="hidden" name="cart_id" value="<?= $row['id'] ?>">
            <input type="hidden" name="action" value="kurang">
            <button type="submit" class="qty-btn" aria-label="Kurangi jumlah produk <?= htmlspecialchars($row['nama']) ?>" <?php if($row['qty'] <= 1) echo 'disabled'; ?>>
              <span class="material-icons" aria-hidden="true">remove</span>
            </button>
          </form>
          <div class="qty-num" aria-live="polite" aria-atomic="true"><?= $row['qty'] ?></div>
          <form action="update_qty.php" method="post" style="display:inline;">
            <input type="hidden" name="cart_id" value="<?= $row['id'] ?>">
            <input type="hidden" name="action" value="tambah">
            <button type="submit" class="qty-btn" aria-label="Tambah jumlah produk <?= htmlspecialchars($row['nama']) ?>">
              <span class="material-icons" aria-hidden="true">add</span>
            </button>
          </form>
        </div>

        <div class="cart-subtotal" aria-label="Subtotal produk">Rp<?= number_format($subtotal) ?></div>

        <div class="cart-action">
          <form action="hapus_produk.php" method="post" onsubmit="return confirm('Yakin ingin hapus produk ini dari keranjang?');">
            <input type="hidden" name="cart_id" value="<?= $row['id'] ?>">
            <button type="submit" class="delete-btn" aria-label="Hapus produk <?= htmlspecialchars($row['nama']) ?>">
              <span class="material-icons" aria-hidden="true">delete</span>
            </button>
          </form>
        </div>
      </div>

      <?php endwhile; ?>

    </div>

    <aside class="cart-summary" aria-label="Ringkasan pesanan">
      <h3 class="summary-title">Total Belanja</h3>
      <div class="summary-row">
        <span>Total:</span>
        <span class="summary-total">Rp<?= number_format($total) ?></span>
      </div>
      <form action="checkout.php" method="post">
        <button type="submit" class="checkout-btn" aria-label="Lanjut ke proses pembayaran">Checkout</button>
      </form>
    </aside>
  </div>

<?php endif; ?>

  <div class="back-btn">
    <button onclick="window.history.back()" aria-label="Kembali ke halaman sebelumnya">Kembali ke Halaman Sebelumnya</button>
  </div>

</body>
</html>

