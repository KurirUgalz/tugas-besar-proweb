<?php
session_start();

// Cek login
if (!isset($_SESSION["user"]) || !isset($_SESSION["email"])) {
    header("Location: ../../3 - halamanlogin/login.php");
    exit();
}

// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";
$conn = mysqli_connect($host, $user, $pass, $db);

// Ambil data user dari database
$email = $_SESSION["email"];
$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $query);
$userData = mysqli_fetch_assoc($result);

// Notif
$notif = "";

// Proses update data jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaBaru = mysqli_real_escape_string($conn, $_POST['editNama']);
    $emailBaru = mysqli_real_escape_string($conn, $_POST['editEmail']);

    // Proses upload foto jika ada file baru
    $fotoBaru = $userData['foto'];
    if (isset($_FILES['editFoto']) && $_FILES['editFoto']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['editFoto']['name'], PATHINFO_EXTENSION);
        $namaFileBaru = uniqid('user_') . '.' . $ext;
        $uploadDir = '../../6 - fotoprofile/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        $uploadPath = $uploadDir . $namaFileBaru;
        if (move_uploaded_file($_FILES['editFoto']['tmp_name'], $uploadPath)) {
            // Hapus foto lama jika ada dan bukan default
            if ($userData['foto'] && file_exists($uploadDir . $userData['foto'])) {
                @unlink($uploadDir . $userData['foto']);
            }
            $fotoBaru = $namaFileBaru;
        } else {
            $notif = "Gagal upload foto!";
        }
    }

    // Cek jika email diubah dan sudah dipakai user lain
    if ($emailBaru !== $userData['email']) {
        $cekEmail = mysqli_query($conn, "SELECT id FROM users WHERE email='$emailBaru' AND email != '$email'");
        if (mysqli_num_rows($cekEmail) > 0) {
            $notif = "Email sudah digunakan user lain!";
        } else {
            // Update data
            $update = mysqli_query($conn, "UPDATE users SET nama='$namaBaru', email='$emailBaru', foto='$fotoBaru' WHERE email='$email'");
            if ($update) {
                $_SESSION['user'] = $namaBaru;
                $_SESSION['email'] = $emailBaru;
                $notif = "Data berhasil diupdate!";
                $email = $emailBaru;
                $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
                $result = mysqli_query($conn, $query);
                $userData = mysqli_fetch_assoc($result);
            } else {
                $notif = "Gagal update data!";
            }
        }
    } else {
        // Update data tanpa ganti email
        $update = mysqli_query($conn, "UPDATE users SET nama='$namaBaru', foto='$fotoBaru' WHERE email='$email'");
        if ($update) {
            $_SESSION['user'] = $namaBaru;
            $notif = "Data berhasil diupdate!";
            $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($conn, $query);
            $userData = mysqli_fetch_assoc($result);
        } else {
            $notif = "Gagal update data!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Akun</title>
  <link rel="stylesheet" href="gayadetailakun.php">
</head>
<body>
  <div class="container" style="max-width:420px;margin:48px auto 0 auto;background:#fff;border-radius:18px;box-shadow:0 4px 24px rgba(30,66,45,0.09);padding:36px 32px 28px 32px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;">
      <a href="../../2 - halamanberanda/beranda.php" class="back-btn" style="text-decoration:none;color:#27ae60;font-weight:600;">← Beranda</a>
      <a href="../halamanakun.php" class="back-btn" style="text-decoration:none;color:#27ae60;font-weight:600;">← Kembali ke Akun</a>
    </div>
    <h1 style="text-align:center;margin-bottom:18px;">Detail Akun</h1>
    <div class="card">
      <form id="editForm" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        <?php if ($notif) echo '<div style="color:green;text-align:center;margin-bottom:10px;">'.$notif.'</div>'; ?>
        <div style="text-align:center;margin-bottom:18px;">
          <label for="editFoto">
            <img src="<?php
              $fotoDir = '../../6 - fotoprofile/';
              $foto = ($userData['foto'] && file_exists($fotoDir . $userData['foto'])) ? $fotoDir . $userData['foto'] : '../../1 - halamanakun/avatar.jpg';
              echo $foto;
            ?>" alt="Foto Profil" class="profile-img" id="avatarPreview" style="width:120px;height:120px;border-radius:50%;object-fit:cover;cursor:pointer;">
          </label><br>
          <input type="file" name="editFoto" id="editFoto" accept="image/*" style="margin-top:10px;">
        </div>
        <label>Nama:<br>
          <input type="text" name="editNama" id="editNama" class="input-edit" value="<?php echo htmlspecialchars($userData["nama"]); ?>" required>
        </label><br>
        <label>Email:<br>
          <input type="email" name="editEmail" id="editEmail" class="input-edit" value="<?php echo htmlspecialchars($userData["email"]); ?>" required>
        </label><br>
        <div style="text-align:center; margin-top:20px;">
          <button type="submit" class="edit-btn">Simpan</button>
          <button type="button" onclick="window.location.href='../halamanakun.php'" class="cancel-btn" style="margin-left:10px;">Batal</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    // Preview foto sebelum upload
    document.getElementById('editFoto').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          document.getElementById('avatarPreview').src = evt.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>