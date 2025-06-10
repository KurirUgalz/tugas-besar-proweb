<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";
$conn = mysqli_connect($host, $user, $pass, $db);

session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat-password"];

    if ($password !== $repeat_password) {
        $error = "Password tidak sama!";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$hash')";
        if (mysqli_query($conn, $query)) {
            // Menyimpan data ke session
            $_SESSION['user'] = $nama;
            $_SESSION['email'] = $email;

            header("Location: login.php?success=1");
            mysqli_close($conn);
            exit();
        } else {
            $error = "Email sudah terdaftar atau terjadi kesalahan!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="wrapper">
    <h1>Daftar</h1>
    <p id="error-message" style="color: red;"><?php echo $error; ?></p>
    <form id="form" method="POST" action="">
      <div>
        <label for="nama-input">
          <!-- ikon -->
        </label>
        <input type="text" name="nama" id="nama-input" placeholder="Nama Lengkap" required />
      </div>
      <div>
        <label for="email-input">
          <span>@</span>
        </label>
        <input type="email" name="email" id="email-input" placeholder="Email" required />
      </div>
      <div>
        <label for="password-input">
          <!-- ikon -->
        </label>
        <input type="password" name="password" id="password-input" placeholder="Sandi" required />
      </div>
      <div>
        <label for="repeat-password-input">
          <!-- ikon -->
        </label>
        <input
          type="password"
          name="repeat-password"
          id="repeat-password-input"
          placeholder="Ulangi Sandi"
          required
        />
      </div>
      <button type="submit">Daftar</button>
    </form>
    <p>
      Sudah punya akun? <a href="login.php">Masuk</a>
    </p>
  </div>
</body>
</html>