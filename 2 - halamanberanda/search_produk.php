<?php
include '../koneksi.php';

$hasil = [];
$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

if ($keyword !== '') {
    $conn = mysqli_connect("localhost", "root", "", "toko_online");
    $like = "%$keyword%";
    $stmt = mysqli_prepare($conn, "SELECT * FROM produk WHERE nama LIKE ? OR deskripsi LIKE ? LIMIT 5");
    mysqli_stmt_bind_param($stmt, "ss", $like, $like);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        $hasil[] = $row;
    }
}
if (!empty($hasil)) {
    foreach ($hasil as $item) {
        $gambar = !empty($item['gambar']) ? htmlspecialchars($item['gambar']) : 'default.jpg';
        echo '<div class="search-card" style="display:flex;align-items:center;padding:8px 0;border-bottom:1px solid #eee;cursor:pointer;">';
        echo '<img src="../4 - halamantoko/' . $gambar . '" alt="' . htmlspecialchars($item['nama']) . '" style="width:50px;height:50px;object-fit:cover;margin-right:12px;border-radius:6px;">';
        echo '<div>';
        echo '<span style="color:#888;">' . htmlspecialchars($item['nama']) . '</span><br>';
        echo '<span style="color:#888;">Rp' . number_format($item['harga']) . '</span><br>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<div style="padding:8px;color:#888;">Tidak ada produk ditemukan.</div>';
}