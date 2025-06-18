<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shoes Catalogue | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="boots.php">
  <script type="text/javascript" src="boots.js" defer></script>
</head>
<body>
  <header>
    <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <h1>Shoes Catalogue</h1>
    <p style="color: #5e7c5a;"> Shoes Catalogue</p>
  </header>
   <nav class="shop-nav" style="background: #eaf4ea; border-bottom: 1.5px solid #a3b18a; box-shadow: 0 2px 8px rgba(91,106,77,0.04);">
    <ul class="shop-nav">
      <li><a href="../loafers/halamanloafers.php" class="shop-nav-link">Loafers</a></li>
      <li><a href="../boots/halamanboots.php" class="shop-nav-link">Boots</a></li>
      <li><a href="../sandals/halamansandals.php" class="shop-nav-link">Sandals</a></li>
      <!-- Tambahkan menu lain sesuai kebutuhan -->
    </ul>
  </nav>
  <!-- Setelah </nav> -->
  <div style="text-align:center;margin:28px 0 12px 0;font-size:1.25rem;color:#5e7c5a;font-weight:600;letter-spacing:1px;">
    Selamat datang di halaman <span style="color:#1c2b1a;">Boots</span> JAWS Store! Temukan Boots favoritmu di sini.
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
            <span>Man Boots</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="hard" onchange="filterProducts('hard'); toggleDropdown()">
            <span>Woman Boots</span>
          </label>
        </div>
      </div>
    </div>

    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="soft">
        <img src="../boots/boots/Manboots/Man1.jpg" alt="Man Boots 1" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Man Boots 1', 'Rp 399.000', 'Boots pria bahan premium, nyaman dan stylish.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Man Boots 1</h3>
          <p class="product-price">Rp 399.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="28"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="soft">
        <img src="../boots/boots/Manboots/Man2.jpg" alt="Man Boots 2" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Man Boots 2', 'Rp 349.000', 'Boots pria warna coklat, cocok untuk segala aktivitas.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Man Boots 2</h3>
          <p class="product-price">Rp 349.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="29"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="soft">
        <img src="../boots/boots/Manboots/Man3.jpg" alt="Man Boots 3" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Man Boots 3', 'Rp 349.000', 'Boots pria hitam klasik, tahan lama dan elegan.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Man Boots 3</h3>
          <p class="product-price">Rp 349.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="30"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../boots/boots/Womanboots/Woman1.jpg" alt="Woman Boots 1" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Woman Boots 1', 'Rp 309.000', 'Boots wanita bahan lembut, desain modern.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Woman Boots 1</h3>
          <p class="product-price">Rp 309.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="31"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../boots/boots/Womanboots/Woman2.jpg" alt="Woman Boots 2" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Woman Boots 2', 'Rp 349.000', 'Boots wanita warna krem, ringan dan nyaman.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Woman Boots 2</h3>
          <p class="product-price">Rp 349.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="32"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../boots/boots/Womanboots/Woman3.jpg" alt="Woman Boots 3" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Woman Boots 3', 'Rp 369.000', 'Boots wanita hitam elegan, cocok untuk segala acara.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Woman Boots 3</h3>
          <p class="product-price">Rp 369.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="33"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
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