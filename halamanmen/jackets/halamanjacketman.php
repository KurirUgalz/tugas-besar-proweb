<html>
<html lang="en">
<head>
  <title>Man Collection | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="jackets.php" />
  <script type="text/javascript" src="jackets.js" defer></script>
</head>
<body>
  <header>
    
    <h1>Jackets Collection</h1>
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
    Selamat datang di halaman <span style="color:#1c2b1a;">Jackets</span> JAWS Store! Temukan Jacket favoritmu di sini.
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
          <div class="dropdown-title">Kategori</div>
          <label>
            <input type="radio" name="kategori" value="all" checked onchange="filterProducts('all'); toggleDropdown()">
            <span>Semua</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="Leather" onchange="filterProducts('Leather'); toggleDropdown()">
            <span>Leather</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="Coat" onchange="filterProducts('Coat'); toggleDropdown()">
            <span>Coat</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="Denim" onchange="filterProducts('Denim'); toggleDropdown()">
            <span>Denim</span>
          </label>
        </div>
      </div>
    </div>

    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="Leather">
        <img src="../jackets/jacket/leather-1.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Black', 'Rp 399.000', 'Jaket kulit warna hitam, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Black</h3>
          <p class="product-price">Rp 399.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Leather - Black', 399000, '../jackets/jacket/leather-1.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Leather">
        <img src="../jackets/jacket/leather-2.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Navy', 'Rp 459.000', 'Jaket kulit warna navy, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Navy</h3>
          <p class="product-price">Rp 459.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Leather - Navy', 459000, '../jackets/jacket/leather-2.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Leather">
        <img src="../jackets/jacket/leather-3.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Grey', 'Rp 599.000', 'Jaket kulit warna abu-abu, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Grey</h3>
          <p class="product-price">Rp 599.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Leather - Grey', 599000, '../jackets/jacket/leather-3.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <!-- Coat Products -->
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-1.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Brown', 'Rp 629.000', 'Coat elegan warna coklat, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Brown</h3>
          <p class="product-price">Rp 629.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Coat - Brown', 629000, '../jackets/jacket/coat-1.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-2.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Black', 'Rp 649.000', 'Coat elegan warna hitam, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Black</h3>
          <p class="product-price">Rp 649.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Coat - Black', 649000, '../jackets/jacket/coat-2.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-3.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Navy', 'Rp 659.000', 'Coat elegan warna navy, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Navy</h3>
          <p class="product-price">Rp 659.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Coat - Navy', 659000, '../jackets/jacket/coat-3.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <!-- Denim Products -->
      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-1.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Grey', 'Rp 679.000', 'Jaket denim warna abu-abu, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Denim - Grey</h3>
          <p class="product-price">Rp 679.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Denim - Grey', 679000, '../jackets/jacket/denim-1.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-2.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Blue', 'Rp 679.000', 'Jaket denim warna biru, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">S
          <h3 class="product-title">Denim - Blue</h3>
          <p class="product-price">Rp 679.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Denim - Blue', 679000, '../jackets/jacket/denim-2.jpg')" title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-3.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Dark', 'Rp 679.000', 'Jaket denim warna gelap, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Denim - Dark</h3>
          <p class="product-price">Rp 679.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Denim - Dark', 679000, '../jackets/jacket/denim-3.jpg')" title="Tambah ke Keranjang">
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
      <img id="modalImg" src="" alt="" style="width:100%;max-width:320px;display:block;margin:auto;border-radius:12px;">
      <h2 id="modalTitle"></h2>
      <p id="modalDesc"></p>
      <p id="modalPrice" style="font-weight:bold;color:#5e7c5a;"></p>
      <div style="margin:18px 0;">
        <button onclick="addToCartFromModal()" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Tambah ke Keranjang</button>
      </div>
    </div>
  </div>

  <!-- Modal Keranjang -->
  <div id="cartModal" class="modal" style="display:none;">
    <div class="modal-content">
      <span class="close" onclick="closeCartModal()">&times;</span>
      <h2 style="margin-bottom:18px;">Keranjang</h2>
      <div id="cartItems"></div>
      <div id="cartTotal" style="margin:10px 0;"></div>
      <button onclick="checkoutCart()" style="background:var(--primary-green);color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1rem;cursor:pointer;">Checkout</button>
    </div>
  </div>
</body>
</html>