<!DOCTYPE html>
<html lang="en">
<head>
  <title>Womens Collection | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="blouses.php" />
  <script type="text/javascript" src="blouses.js" defer></script>
</head>
<body>
  <header>
     <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <h1>Blouses Collection</h1>
    <p style="color: #5e7c5a;"> Women Catalogue</p>
    <div style="position:absolute;top:32px;right:40px;">
      <button id="cartBtn" style="background:none;border:none;cursor:pointer;position:relative;">
        🛒
        <span id="cartCount" style="background:#5e7c5a;color:#fff;border-radius:50%;padding:2px 8px;font-size:13px;position:absolute;top:-10px;right:-16px;">0</span>
      </button>
    </div>
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
    Selamat datang di halaman <span style="color:#1c2b1a;">Blouses</span> JAWS Store! Temukan Blouses favoritmu di sini.
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
            <span>Broket Blouse</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="hard" onchange="filterProducts('hard'); toggleDropdown()">
            <span>Ruffle Blouse</span>
          </label>
        </div>
      </div>
    </div>

    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="soft">
        <img src="../blouses/blouses/Broketblouse/blousebroket1.jpeg" alt="Babify Summer - Broket" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Babify Summer - Broket', 'Rp 399.000', 'Blouse brokat dengan desain summer yang elegan.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Babify Summer - Broket</h3>
          <p class="product-price">Rp 399.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Babify Summer - Broket', 349000, '../blouses/blouses/Broketblouse/blousebroket1.jpeg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="soft">
        <img src="../blouses/blouses/Broketblouse/blousebroket2.jpg" alt="Aurora Winter - Broket" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Aurora Winter - Broket', 'Rp 349.000', 'Blouse brokat Aurora untuk musim dingin.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Aurora Winter - Broket</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Aurora Winter - Broket', 349000, '../blouses/blouses/Broketblouse/blousebroket2.jpg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="soft">
        <img src="../blouses/blouses/Broketblouse/blousebroket3.jpeg" alt="London Butterfly - Broket" class="product-image" style="cursor:pointer"
          onclick="showDescModal('London Butterfly - Broket', 'Rp 349.000', 'Blouse brokat motif kupu-kupu khas London.', this.src)">
        <div class="product-info">
          <h3 class="product-title">London Butterfly - Broket</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('London Butterfly - Broket', 349000, '../blouses/blouses/Broketblouse/blousebroket3.jpeg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../blouses/blouses/Ruffleblouse/Ruffleblouse1.jpg" alt="Wooden Warm - Ruffle" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Wooden Warm - Ruffle', 'Rp 309.000', 'Blouse ruffle warna kayu yang hangat.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Wooden Warm - Ruffle</h3>
          <p class="product-price">Rp 309.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Wooden Warm - Ruffle', 349000, '../blouses/blouses/Ruffleblouse/Ruffleblouse1.jpg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../blouses/blouses/Ruffleblouse/Ruffleblouse2.jpg" alt="Ocean Deep - Ruffle" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Ocean Deep - Ruffle', 'Rp 349.000', 'Blouse ruffle biru laut yang elegan.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Ocean Deep - Ruffle</h3>
          <p class="product-price">Rp 349.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Ocean Deep - Ruffle', 349000, '../blouses/blouses/Ruffleblouse/Ruffleblouse2.jpg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
            🛒
          </button>
        </div>
      </div>
      <div class="product-card" data-category="hard">
        <img src="../blouses/blouses/Ruffleblouse/Ruffleblouse3.jpg" alt="Apple Forest - Ruffle" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Apple Forest - Ruffle', 'Rp 369.000', 'Blouse ruffle hijau segar seperti hutan apel.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Apple Forest - Ruffle</h3>
          <p class="product-price">Rp 369.000</p>
          <button class="add-to-cart-btn" onclick="addToCart('Apple Forest - Ruffle', 349000, '../blouses/blouses/Ruffleblouse/Ruffleblouse3.jpg')" 
          style="position: absolute; bottom: 18px; right: 18px;"
          title="Tambah ke Keranjang">
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