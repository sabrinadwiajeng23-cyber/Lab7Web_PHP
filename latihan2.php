<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 2 PHP</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Latihan 2 - Variabel, Operator, dan Percabangan</h1>
<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}
?>
<div class="result">
  Nama: <?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?><br>
  Nilai tugas: <?= $tugas ?><br>
  Nilai UTS: <?= $uts ?><br>
  Nilai UAS: <?= $uas ?><br>
  Nilai akhir: <?= number_format($nilaiAkhir, 2, ",", ".") ?><br>
  Predikat: <?= $predikat ?>
</div>
<p>Ubah nilai pada variabel <code>$tugas</code>, <code>$uts</code>, dan <code>$uas</code> untuk mencoba kombinasi lain.</p>
</main></body></html>
