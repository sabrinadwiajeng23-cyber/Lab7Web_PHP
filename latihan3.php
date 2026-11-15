<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 3 PHP</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Latihan 3 - Perulangan dan Array</h1>
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
?>
<h3>Daftar Mahasiswa</h3>
<ol>
<?php foreach ($mahasiswa as $nama): ?>
  <li><?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?></li>
<?php endforeach; ?>
</ol>
</main></body></html>
