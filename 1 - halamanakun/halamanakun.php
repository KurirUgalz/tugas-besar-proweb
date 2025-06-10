<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../3 - halamanlogin/login.php");
    exit();
}

// Ambil foto user dari database
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";
$conn = mysqli_connect($host, $user, $pass, $db);
$email = $_SESSION["email"];
$query = "SELECT foto FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$userFoto = mysqli_fetch_assoc($result);

// Ambil dari folder foto profile hasil upload di detailakun.php
$fotoDir = '../6 - fotoprofile/';
$fotoPath = ($userFoto['foto'] && file_exists($fotoDir . $userFoto['foto'])) ? $fotoDir . $userFoto['foto'] : 'avatar.jpg';
?>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Akun Saya - JAWS</title>
  <link rel="stylesheet" href="halAkun.php" />
  <script type="text/javascript" src="halAkun.js" defer></script>
</head>

<body>
  <header>
    <div class="logo">
      <img src="logostore.png" alt="Logo JAWS" />
    </div>
    <div class="user-short">
      <span>
        <img src="<?php echo $fotoPath; ?>" alt="Avatar" class="avatar" id="avatar-img" style="width:38px;height:38px;border-radius:50%;object-fit:cover;vertical-align:middle;margin-right:6px;">
        <strong id="shortname"><?php echo $_SESSION["user"]; ?></strong>
      </span>
      <span>🛒 Rp 0</span>
    </div>
  </header>

  <div id="notif-update">Data akun berhasil diperbarui!</div>

  <div class="container">
    <div class="avatar-wrapper">
      <img src="<?php echo $fotoPath; ?>" alt="Avatar" class="avatar" id="avatar-img" />
      <!-- Tidak ada input file di halaman ini, hanya tampil -->
    </div>
    <div class="nama" id="nama"><?php echo $_SESSION["user"]; ?></div>
    <div class="user-email" id="useremail"><?php echo $_SESSION["email"]; ?></div>
    <div class="menu-list">
      <a href="#">Pesanan</a>
      <a href="../2 - halamanberanda/beranda.php">Beranda</a>
      <a href="#">Alamat</a>
      <a href="../1 - halamanakun/halamandetailakun/detailakun.php"><span>Detail Akun</span></a>
      <a href="#">Wishlist</a>
    </div>
    <a href="logout.php" class="logout-btn">Keluar</a>
    <a href="hapus_akun.php" class="delete-link" onclick="return confirm('Yakin ingin menghapus akun? Semua data akan hilang!')">Hapus Akun</a>
  </div>
</body>
</html>