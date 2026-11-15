<?php
function formatRupiah($angka) {
    return "Rp" . number_format((float)$angka, 0, ",", ".");
}
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar"];
$hasilCari = null;
if (isset($_GET["cari"])) {
    $kata = trim($_GET["cari"]);
    foreach ($daftarNama as $nama) {
        if (stripos($nama, $kata) !== false) {
            $hasilCari[] = $nama;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen Mandiri</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Eksperimen Mandiri</h1>
<h2>1. Menghitung nilai rata-rata</h2>
<?php
$tugas = 80; $uts = 85; $uas = 90;
$rataRata = ($tugas + $uts + $uas) / 3;
?>
<p>Tugas: <?= $tugas ?>, UTS: <?= $uts ?>, UAS: <?= $uas ?>.</p>
<p>Nilai rata-rata: <strong><?= number_format($rataRata, 2, ",", ".") ?></strong></p>

<h2>2. Mencari nama dari array menggunakan GET</h2>
<form method="GET">
  <label>Nama yang dicari
    <input name="cari" value="<?= htmlspecialchars($_GET["cari"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <button type="submit">Cari Nama</button>
</form>
<?php if (isset($_GET["cari"])): ?>
  <p>Hasil pencarian:</p>
  <?php if (!empty($hasilCari)): ?>
    <ul><?php foreach ($hasilCari as $nama): ?><li><?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?></li><?php endforeach; ?></ul>
  <?php else: ?>
    <p class="error">Nama tidak ditemukan.</p>
  <?php endif; ?>
<?php endif; ?>

<h2>3. Function format Rupiah</h2>
<p>Contoh harga 125000: <strong><?= formatRupiah(125000) ?></strong></p>

<h2>4. Validasi NIM</h2>
<p>Ketentuan contoh: NIM harus tepat 10 digit angka.</p>
<form method="POST">
  <label>Masukkan NIM
    <input name="nim_uji" inputmode="numeric" maxlength="10" required>
  </label>
  <button type="submit">Periksa NIM</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nimUji = trim($_POST["nim_uji"] ?? "");
    if (ctype_digit($nimUji) && strlen($nimUji) === 10) {
        echo '<p class="result">NIM valid.</p>';
    } else {
        echo '<p class="error">NIM tidak valid. Masukkan tepat 10 angka.</p>';
    }
}
?>
<h2>5. Tombol reset</h2>
<p>Tombol Reset mengosongkan atau mengembalikan nilai input form di browser. Reset tidak mengirim data ke server dan tidak menghapus data yang sudah diproses atau disimpan di server.</p>
</main></body></html>
