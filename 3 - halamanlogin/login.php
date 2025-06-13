<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";
$conn = mysqli_connect($host, $user, $pass, $db);

$error = ""; // Variabel untuk menyimpan pesan error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            // Simpan user_id ke sesi
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user'] = $row['nama'];
            $_SESSION['email'] = $row['email'];

            header("Location: ../2 - halamanberanda/beranda.php");
            exit();
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Email tidak ditemukan.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Masuk</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .error-message {
      color: #f44336; /* Warna merah untuk pesan error */
      font-size: 0.9rem;
      margin-bottom: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <h1>Masuk</h1>
    <form method="POST" action="">
      <div>
        <label for="email-input">
          <span>@</span>
        </label>
        <input type="email" name="email" id="email-input" placeholder="Email" required />
      </div>
      <div>
        <label for="password-input">
        </label>
        <input type="password" name="password" id="password-input" placeholder="Sandi" required />
      </div>
      <!-- Tampilkan pesan error di bawah input sandi -->
      <?php if (!empty($error)): ?>
        <p class="error-message"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
      <button type="submit">Masuk</button>
    </form>
    <p>
      Tidak punya akun? <a href="daftar.php">Buat akun</a>
    </p>
  </div>
</body>
</html>