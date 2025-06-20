<?php
session_start();
if (isset($_SESSION['user_id'])) {
    
} else {
    echo "Anda belum login.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>JAWS STORE</title>
  <link rel="stylesheet" href="gayaberanda.php" />
  <script type="text/javascript" src="beranda.js" defer></script>
</head>
<body>
  <header>
    <div class="nav-search">
      <input type="text" id="search" placeholder="Pencarian produk...">
      <div id="search-result"></div>
    </div>
    <img src="logostore.png" alt="JAWS STORE">
    <div class="header-right">
      <div class="nav-auth">
        <?php if (isset($_SESSION['user'])): ?>
          <a href="../1 - halamanakun/halamanakun.php" class="user-link">
            Halo, <?= htmlspecialchars($_SESSION['user']) ?>
          </a>
        <?php else: ?>
          <a href="../3 - halamanlogin/login.php" class="login-link">Login</a>
          <a href="../3 - halamanlogin/daftar.php" class="register-link">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <nav>
    <div class="nav-left">
      <div>
        <span>SHOES</span>
        <div class="dropdown">
          <a href="../4 - halamantoko/halamanshoes/loafers/halamanloafers.php">Loafers</a>
          <a href="../4 - halamantoko/halamanshoes/boots/halamanboots.php">Boots</a>
          <a href="../4 - halamantoko/halamanshoes/sandals/halamansandals.php">Sandals</a>
        </div>
      </div>
      <div>
        <span>WOMEN COLLECTION</span>
        <div class="dropdown">
          <a href="../4 - halamantoko/halamanwomen/dresses/halamandresses.php">Dresses</a>
          <a href="../4 - halamantoko/halamanwomen/blouses/halamanblouses.php">Blouses</a>
          <a href="../4 - halamantoko/halamanwomen/skirts/halamanskirts.php">Skirts</a>
          <a href="../4 - halamantoko/halamanwomen/jackets/halamanjacketwoman.php">Jackets</a>
        </div>
      </div>
      <div>
        <span>MEN COLLECTION</span>
        <div class="dropdown">
          <a href="../4 - halamantoko/halamanmen/shirts/halamanshirts.php">Shirts</a>
          <a href="../4 - halamantoko/halamanmen/suits/halamansuits.php">Suits</a>
          <a href="../4 - halamantoko/halamanmen/jackets/halamanjacketman.php">Jackets</a>
          <a href="../4 - halamantoko/halamanmen/trousers/halamantrousers.php">Trousers</a>
        </div>
      </div>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-img-wrapper">
        <img src="1depan.jpg" alt="Couple Fashion" class="hero-img active" id="img1">
        <img src="2depan.png" alt="Fashion 2" class="hero-img" id="img2">
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <h3>TENTANG KAMI</h3>
      <p>JAWS adalah merek lokal Indonesia yang telah berkiprah di industri fashion sejak tahun 2025. Kami menghadirkan koleksi produk yang mencakup tas, sepatu, dan pakaian dengan tema vintage yang unik, serta berbagai aksesoris berkualitas tinggi. Dengan desain yang memadukan gaya klasik dan modern, JAWS siap memberikan sentuhan istimewa pada penampilan Anda.</p>
    </div>
  </footer>

</body>
</html>
