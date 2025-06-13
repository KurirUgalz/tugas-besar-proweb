<!DOCTYPE html>
<html lang="en">
<head>
  <title>Womens Collection | Jaws Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="skirts.php">
  <script type="text/javascript" src="skirts.js" defer></script>
</head>
<body>
  <header>
    <a href="../../../2 - halamanberanda/beranda.php" class="back-btn" title="Kembali ke Beranda">
      ← 
    </a>
    <h1>Skirts Collection</h1>
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
    Selamat datang di halaman <span style="color:#1c2b1a;">Skirts</span> JAWS Store! Temukan Skirt favoritmu di sini.
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
            <input type="radio" name="kategori" value="soft" onchange="filterProducts('soft'); toggleDropdown()">
            <span>Plain Skirts</span>
          </label>
          <label>
            <input type="radio" name="kategori" value="hard" onchange="filterProducts('hard'); toggleDropdown()">
            <span>Pattern Skirts</span>
          </label>
        </div>
      </div>
    </div>
    <div class="products-grid" id="productsGrid">
      <!-- Product Cards -->
      <div class="product-card" data-category="soft">
        <img src="../skirts/skirts/PlainSkirts/Skirts1.jpg" alt="Babify Summer" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Babify Summer - Plain', 'Rp 399.000', 'Rok polos dengan bahan nyaman dan desain summer.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Babify Summer - Plain</h3>
          <p class="product-price">Rp 399.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="67"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="soft">
        <img src="../skirts/skirts/PlainSkirts/Skirts2.jpg" alt="Aurora Winter - Plain" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Aurora Winter - Plain', 'Rp 349.000', 'Rok polos Aurora cocok untuk musim dingin.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Aurora Winter - Plain</h3>
          <p class="product-price">Rp 349.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="68"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="soft">
        <img src="../skirts/skirts/PlainSkirts/Skirts3.jpg" alt="London Butterfly - Plain" class="product-image" style="cursor:pointer"
          onclick="showDescModal('London Butterfly - Plain', 'Rp 349.000', 'Rok polos motif kupu-kupu khas London.', this.src)">
        <div class="product-info">
          <h3 class="product-title">London Butterfly - Plain</h3>
          <p class="product-price">Rp 349.000</p>
           <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="69"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../skirts/skirts/PatternSkirts/Skirts4.jpg" alt="Wooden Warm - Pattern" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Wooden Warm - Pattern', 'Rp 309.000', 'Rok motif kayu yang hangat dan unik.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Wooden Warm - Pattern</h3>
          <p class="product-price">Rp 309.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="70"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../skirts/skirts/PatternSkirts/Skirts5.jpg" alt="Ocean Deep - Pattern" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Ocean Deep - Pattern', 'Rp 349.000', 'Rok motif biru laut yang elegan.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Ocean Deep - Pattern</h3>
          <p class="product-price">Rp 349.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="71"> <!-- ID produk dari database -->
          <button type="submit" style="padding:10px 24px;background:#5e7c5a;color:#fff;border:none;border-radius:8px;cursor:pointer;">Checkout</button>
          </form>
        </div>
      </div>

      <div class="product-card" data-category="hard">
        <img src="../skirts/skirts/PatternSkirts/Skirts6.jpg" alt="Apple Forest - Pattern" class="product-image" style="cursor:pointer"
          onclick="showDescModal('Apple Forest - Pattern', 'Rp 369.000', 'Rok motif hutan apel yang segar.', this.src)">
        <div class="product-info">
          <h3 class="product-title">Apple Forest - Pattern</h3>
          <p class="product-price">Rp 369.000</p>
          <form action="/tubes/tugas-besar-proweb/5 - keranjang/add_to_cart.php" method="post">
          <input type="hidden" name="produk_id" value="72"> <!-- ID produk dari database -->
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