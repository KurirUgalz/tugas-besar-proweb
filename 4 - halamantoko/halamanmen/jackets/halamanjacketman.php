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
    <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <p style="color: #5e7c5a;">Man Collection</p>
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
        <img src="../jackets/jacket/leather-1.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Brown', 'Rp 399.000', 'Jaket kulit warna Cokelat, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Brown</h3>
          <p class="product-price">Rp 399.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="1"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Leather">
        <img src="../jackets/jacket/leather-2.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Black', 'Rp 459.000', 'Jaket kulit warna Hitam, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Black</h3>
          <p class="product-price">Rp 459.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="2"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Leather">
        <img src="../jackets/jacket/leather-3.jpg" alt="Leather" class="product-image" onclick="showDescModal('Leather - Black Buttons', 'Rp 599.000', 'Jaket kulit warna Hitam dengan Kancing, bahan nyaman dan stylish.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Leather - Black Buttons</h3>
          <p class="product-price">Rp 599.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="3"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
  
        </div>
      </div>
      <!-- Coat Products -->
      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-1.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Black', 'Rp 629.000', 'Coat elegan warna Hitam, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Black</h3>
          <p class="product-price">Rp 629.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="4"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-2.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Brown', 'Rp 649.000', 'Coat elegan warna Cokelat, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Brown</h3>
          <p class="product-price">Rp 649.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="5"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Coat">
        <img src="../jackets/jacket/coat-3.jpg" alt="Coat" class="product-image" onclick="showDescModal('Coat - Grey', 'Rp 659.000', 'Coat elegan warna Abu - Abu, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Coat - Grey</h3>
          <p class="product-price">Rp 659.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="6"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <!-- Denim Products -->
      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-1.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Blue', 'Rp 679.000', 'Jaket denim warna Biru Terang, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Denim - Blue</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="7"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-2.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Black', 'Rp 679.000', 'Jaket denim warna Hitam, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Denim - Black</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="8"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
        </div>
      </div>

      <div class="product-card" data-category="Denim">
        <img src="../jackets/jacket/denim-3.jpg" alt="Denim" class="product-image" onclick="showDescModal('Denim - Grey', 'Rp 679.000', 'Jaket denim warna Abu - Abu, bahan berkualitas tinggi.', this.src)" style="cursor:pointer;" />
        <div class="product-info">
          <h3 class="product-title">Denim - Grey</h3>
          <p class="product-price">Rp 679.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="9"> <!-- ID produk dari database -->
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
      <img id="modalImg" src="" alt="" style="width:100%;max-width:320px;display:block;margin:auto;border-radius:12px;">
      <h2 id="modalTitle"></h2>
      <p id="modalDesc"></p>
      <p id="modalPrice" style="font-weight:bold;color:#5e7c5a;"></p>

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