<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 5 PHP</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Latihan 5 - Memproses Form GET</h1>
<form method="GET" action="">
  <label for="kata">Kata kunci:</label>
  <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($_GET["kata"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  <button type="submit">Cari</button>
</form>
<?php if (isset($_GET["kata"])): ?>
  <div class="result">Kata kunci: <?= htmlspecialchars(trim($_GET["kata"]), ENT_QUOTES, "UTF-8") ?></div>
<?php endif; ?>
<p>Perhatikan URL setelah tombol Cari ditekan. Nilai form GET terlihat pada bagian query URL.</p>
</main></body></html>
