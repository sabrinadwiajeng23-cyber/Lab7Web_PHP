<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 10) {
        $error[] = "NIM harus terdiri dari 10 angka.";
    }
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Mini Project Data Mahasiswa</title><link rel="stylesheet" href="style.css"></head>
<body><main class="container">
<nav><a href="index.php">← Menu</a></nav>
<h1>Formulir Data Mahasiswa</h1>
<p>Isi semua data berikut. NIM pada contoh ini ditetapkan harus 10 digit angka.</p>

<?php if ($error): ?>
  <div class="error">
    <strong>Data belum bisa dikirim:</strong>
    <ul>
      <?php foreach ($error as $pesan): ?>
        <li><?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<form method="POST" action="">
  <label>Nama
    <input type="text" name="nama" required value="<?= htmlspecialchars($_POST["nama"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <label>NIM (10 angka)
    <input type="text" name="nim" inputmode="numeric" maxlength="10" required value="<?= htmlspecialchars($_POST["nim"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <label>Program Studi
    <input type="text" name="prodi" required value="<?= htmlspecialchars($_POST["prodi"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <label>Semester (1–14)
    <input type="number" name="semester" min="1" max="14" step="1" required value="<?= htmlspecialchars($_POST["semester"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <label>Email
    <input type="email" name="email" required value="<?= htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  </label>
  <div>
    <button type="submit">Kirim Data</button>
    <button class="secondary" type="reset">Reset</button>
  </div>
</form>

<?php if ($data !== null): ?>
  <div class="result">
    <h2>Data Mahasiswa Berhasil Diterima</h2>
    Nama: <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?><br>
    NIM: <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?><br>
    Program Studi: <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?><br>
    Semester: <?= $data["semester"] ?><br>
    Email: <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?>
  </div>
<?php endif; ?>
</main></body></html>
