<!DOCTYPE html>
<html lang="en">
<head>
  <title>Womens Collection | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="jackets.php" />
  <script type="text/javascript" src="jackets.js" defer></script>
</head>
<body>
  <header>
    <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <h1>Jackets Collection</h1>
    <p style="color: #5e7c5a;"> Women Catalogue</p>
  </header>
  <nav class="shop-nav" style="background: #eaf4ea; border-bottom: 1.5px solid #a3b18a; box-shadow: 0 2px 8px rgba(91,106,77,0.04);">
      <ul class="shop-nav">
        <li><a href="../jackets/halamanjacketwoman.php" class="shop-nav-link">Jackets</a></li>
        <li><a href="../dresses/halamandresses.php" class="shop-nav-link">Dress</a></li>
        <li><a href="../blouses/halamanblouses.php" class="shop-nav-link">Blouses</a></li>
        <li><a href="../skirts/halamanskirts.php" class="shop-nav-link">Skirts</a></li>
        <!-- Tambahkan menu lain sesuai kebutuhan -->
      </ul>
    </nav>
    <div style="text-align:center;margin:28px 0 12px 0;font-size:1.25rem;color:#5e7c5a;font-weight:600;letter-spacing:1px;">
    Selamat datang di halaman <span style="color:#1c2b1a;">Jackets</span> JAWS Store! Temukan Jacket favoritmu di sini.
  </div>
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
            <input type="radio" name="kategori" value="90s" onchange="filterProducts('90s'); toggleDropdown()">
            <span>90s</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="Coat" onchange="filterProducts('Coat'); toggleDropdown()">
            <span>Coat</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="Funnel" onchange="filterProducts('Funnel'); toggleDropdown()">
            <span>Funnel Neck</span>
          </label>
        </div>
      </div>
    </div>

    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="90s">
        <img src="../jackets/jacket/90s-1.jpeg" alt="90s" class="product-image" style="cursor:pointer"
          onclick="showDescModal('90s - Denim Blue', 'Rp 399.000', 'Jaket denim biru gaya 90an, bahan nyaman dan stylish.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">90s - Denim Blue</h3>
          <p class="product-price">Rp 399.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="58"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="90s">
        <img src="../jackets/jacket/90s-2.jpeg" alt="90s" class="product-image" style="cursor:pointer"
          onclick="showDescModal('90s - Top Brown', 'Rp 459.000', 'Jaket top coklat gaya 90an, bahan nyaman dan stylish.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">90s - Top Brown</h3>
          <p class="product-price">Rp 459.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="59"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>
      <div class="product-card" data-category="90s">
        <img src="../jackets/jacket/90s-3.jpeg" alt="90s" class="product-image" style="cursor:pointer"
          onclick="showDescModal('90s - Grey', 'Rp 599.000', 'Jaket cokelat gaya 90an, bahan nyaman dan stylish.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">90s - Brown</h3>
          <p class="product-price">Rp 599.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="60"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>
      <!-- 3 Coat Products -->
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-1.jpeg" alt="Coat" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Coat - Black', 'Rp 629.000', 'Coat warna hitam, elegan dan hangat.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Coat - Black</h3>
          <p class="product-price">Rp 629.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="61"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-2.jpeg" alt="Coat" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Coat - Brown', 'Rp 649.000', 'Coat warna coklat, elegan dan hangat.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Coat - Brown</h3>
          <p class="product-price">Rp 649.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="62"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-3.jpeg" alt="Coat" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Coat - Beige', 'Rp 659.000', 'Coat warna beige, elegan dan hangat.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Coat - Beige</h3>
          <p class="product-price">Rp 659.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="63"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>
      <!-- 3 Funnel Neck Products -->
      <div class="product-card" data-category="Funnel">
        <img src="../jackets/jacket/funnelneck-1.jpg" alt="Funnel Neck" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Funnel Neck - Black', 'Rp 679.000', 'Jaket funnel neck warna hitam, simple dan trendy.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Funnel Neck - Black</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="64"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Funnel">
        <img src="../jackets/jacket/funnelneck-2.jpg" alt="Funnel Neck" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Funnel Neck - Brown', 'Rp 679.000', 'Jaket funnel neck warna coklat, simple dan trendy.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Funnel Neck - Brown</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="65"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>
      
      <div class="product-card" data-category="Funnel">
        <img src="../jackets/jacket/funnelneck-3.jpeg" alt="Funnel Neck" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Funnel Neck - Black V Series', 'Rp 679.000', 'Jaket funnel neck hitam V Series, simple dan trendy.', this.src)" />
        <div class="product-info">
          <h3 class="product-title">Funnel Neck - Black V Series</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="66"> <!-- ID produk dari database -->
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