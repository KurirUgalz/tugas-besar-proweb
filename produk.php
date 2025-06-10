<?php
include 'koneksi.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h3>" . $row['nama_produk'] . "</h3>";
    echo "<img src='images/" . $row['gambar'] . "' width='150' /><br>";
    echo "Harga: Rp" . $row['harga'] . "<br>";
    echo "<p>" . $row['deskripsi'] . "</p>";
    echo "</div><hr>";
}
?>