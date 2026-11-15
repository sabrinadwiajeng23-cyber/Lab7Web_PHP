<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 7 PHP</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Latihan 7 - Pengolahan Data Sederhana</h1>
<form method="POST">
  <label>Nama barang <input name="barang" required value="<?= htmlspecialchars($_POST["barang"] ?? "", ENT_QUOTES, "UTF-8") ?>"></label>
  <label>Harga <input name="harga" type="number" min="0" step="0.01" required value="<?= htmlspecialchars($_POST["harga"] ?? "", ENT_QUOTES, "UTF-8") ?>"></label>
  <label>Jumlah <input name="jumlah" type="number" min="1" step="1" required value="<?= htmlspecialchars($_POST["jumlah"] ?? "", ENT_QUOTES, "UTF-8") ?>"></label>
  <button type="submit">Hitung</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";
    if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        echo '<div class="error">Periksa kembali nama barang, harga, dan jumlah. Harga tidak boleh negatif dan jumlah minimal 1.</div>';
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
        echo '<div class="result"><h3>Ringkasan Transaksi</h3>';
        echo 'Barang: ' . htmlspecialchars($barang, ENT_QUOTES, "UTF-8") . '<br>';
        echo 'Harga satuan: Rp' . number_format($harga, 0, ",", ".") . '<br>';
        echo 'Jumlah: ' . $jumlah . '<br>';
        echo 'Subtotal: Rp' . number_format($subtotal, 0, ",", ".");
        echo '</div>';
    }
}
?>
</main></body></html>
