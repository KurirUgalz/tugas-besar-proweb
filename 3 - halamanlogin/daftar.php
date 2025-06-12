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

    // Periksa apakah email sudah ada di database
    $email_check_query = "SELECT * FROM users WHERE email = '$email'";
    $email_check_result = mysqli_query($conn, $email_check_query);

    if (mysqli_num_rows($email_check_result) > 0) {
        $error = "Email sudah terdaftar!";
    } elseif ($password !== $repeat_password) {
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
            $error = "Terjadi kesalahan saat mendaftar!";
        }
    }
}
?>