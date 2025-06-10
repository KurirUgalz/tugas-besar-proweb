<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Man Collection | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="trousers.php">
  <script type="text/javascript" src="trousers.js" defer></script>
</head>
<body>
  <header>
    <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <h1>Trousers Collection</h1>
    <p style="color: #5e7c5a;">Man Collection</p>
    <div style="position:absolute;top:32px;right:40px;">
      <button id="cartBtn" style="background:none;border:none;cursor:pointer;position:relative;">
        🛒
        <span id="cartCount" style="background:#5e7c5a;color:#fff;border-radius:50%;padding:2px 8px;font-size:13px;position:absolute;top:-10px;right:-16px;">0</span>
      </button>
    </div>
  </header>
  <nav class="shop-nav" style="background: #eaf4ea; border-bottom: 1.5px solid #a3b18a; box-shadow: 0 2px 8px rgba(91,106,77,0.04);">
      <ul class="shop-nav">
        <li><a href="../jackets/halamanjacketman.php" class="shop-nav-link">Jackets</a></li>
        <li><a href="../shirts/halamanshirts.php" class="shop-nav-link">Shirts</a></li>
        <li><a href="../suits/halamansuits.php" class="shop-nav-link">Suits</a></li>
        <li><a href="../trousers/halamantrousers.php" class="shop-nav-link">Trousers</a></li>
        <!-- Tambahkan menu lain sesuai kebutuhan -->
      </ul>
    </nav>
    <div style="text-align:center;margin:28px 0 12px 0;font-size:1.25rem;color:#5e7c5a;font-weight:600;letter-spacing:1px;">
    Selamat datang di halaman <span style="color:#1c2b1a;">Trousers</span> JAWS Store! Temukan Trouser favoritmu di sini.
  <div class="container">
    <div class="filters">
      <div class="dropdown">
        <button class="filter-btn" id="filterDropdownBtn" onclick="toggleDropdown()" aria-label="Filter">
          <svg width="22" height="22" fill="none" viewBox="0 0 20 20" style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 5h14M6 10h8M9 15h2" stroke="#5e7c5a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <svg width="16" height="16" fill="none" style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg"><path d="M4 6l4 4 4-4" stroke="#5e7c5a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div id="filterDropdown" class="dropdown-content">
          <div class="dropdown-title">Categories</div>
          <label>
            <input type="radio" name="kategori" value="all" checked onchange="filterProducts('all'); toggleDropdown()">
            <span>All</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="soft" onchange="filterProducts('soft'); toggleDropdown()">
            <span>Plain Trousers</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="hard" onchange="filterProducts('hard'); toggleDropdown()">
            <span>Pattern Trousers</span>
          </label>
        </div>
      </div>
    </div>

    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="soft">
        <img src="../trousers/trousers/plaintrousers/trousers1.jpg" alt="Plain Trouser 1" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Plain Trouser 1', 'Rp 399.000', 'Celana panjang polos bahan adem, cocok untuk formal.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Plain Trouser 1</h3>
          <p class="product-price">Rp 399.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Plain Trouser 1', 399000, '../trousers/trousers/plaintrousers/trousers1.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="soft">
        <img src="../trousers/trousers/plaintrousers/trousers2.jpg" alt="Plain Trouser 2" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Plain Trouser 2', 'Rp 349.000', 'Celana panjang polos warna netral, nyaman dipakai.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Plain Trouser 2</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Plain Trouser 2', 349000, '../trousers/trousers/plaintrousers/trousers2.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="soft">
        <img src="../trousers/trousers/plaintrousers/trousers3.jpg" alt="Plain Trouser 3" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Plain Trouser 3', 'Rp 349.000', 'Celana panjang polos dengan potongan slim fit.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Plain Trouser 3</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Plain Trouser 3', 349000, '../trousers/trousers/plaintrousers/trousers3.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../trousers/trousers/patterntrousers/trousers4.jpg" alt="Pattern Trouser 1" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Pattern Trouser 1', 'Rp 309.000', 'Celana panjang motif modern, tampil beda.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Pattern Trouser 1</h3>
          <p class="product-price">Rp 309.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Pattern Trouser 1', 309000, '../trousers/trousers/patterntrousers/trousers4.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../trousers/trousers/patterntrousers/trousers5.jpg" alt="Pattern Trouser 2" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Pattern Trouser 2', 'Rp 349.000', 'Celana panjang motif garis, stylish dan kekinian.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Pattern Trouser 2</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Pattern Trouser 2', 349000, '../trousers/trousers/patterntrousers/trousers5.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../trousers/trousers/patterntrousers/trousers6.jpg" alt="Pattern Trouser 3" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Pattern Trouser 3', 'Rp 369.000', 'Celana panjang motif floral, tampil beda di setiap kesempatan.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Pattern Trouser 3</h3>
          <p class="product-price">Rp 369.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Pattern Trouser 3', 369000, '../trousers/trousers/patterntrousers/trousers6.jpg')"
            style="position:absolute;bottom:18px;right:18px;"
          title="Tambah ke Keranjang"
          >
            🛒
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Deskripsi Produk -->
  <div id="descModal" class="modal" style="display:none;">
    <div class="modal-content">
      <span class="close" onclick="closeDescModal()">&times;</span>
      <img id="modalImg" src="" alt="" style="width:100%;max-width:320px;display:block;margin:0 auto 18px auto;border-radius:12px;">
      <h2 id="modalTitle"></h2>
      <p id="modalPrice"></p>
      <p id="modalDesc"></p>
      <button onclick="addToCartFromModal()" class="add-to-cart-btn"
        style="position:static;margin-top:18px;border-radius:12px;width:auto;height:auto;font-size:1rem;padding:8px 18px;background:var(--primary-green);color:#fff;display:flex;align-items:center;justify-content:center;">
        Tambah ke Keranjang
      </button>
    </div>
  </div>

  <!-- Modal Keranjang/Checkout -->
  <div id="cartModal" class="modal" style="display:none;">
    <div class="modal-content">
      <span class="close" onclick="closeCartModal()">&times;</span>
      <h2>Keranjang</h2>
      <div id="cartItems"></div>
      <div id="cartTotal" style="margin:18px 0;font-weight:600;"></div>
      <button onclick="checkoutCart()" style="background:var(--primary-green);color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1rem;cursor:pointer;">Checkout</button>
    </div>
  </div>
</body>
</html>