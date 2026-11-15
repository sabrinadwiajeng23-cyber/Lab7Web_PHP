<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 4 PHP</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Latihan 4 - Membuat Function</h1>
<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
$hargaAkhir = hitungDiskon(150000, 10);
$luas = luasPersegiPanjang(8, 5);
?>
<div class="result">
  Harga awal: Rp150.000<br>
  Diskon: 10%<br>
  Harga setelah diskon: Rp<?= number_format($hargaAkhir, 0, ",", ".") ?><br><br>
  Luas persegi panjang (8 × 5): <?= $luas ?> satuan luas
</div>
</main></body></html>
