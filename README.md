## Nama  : Sabrina Dwi Ajeng
## Nim   : 312510308
## Kelas : I253C

## Tujuan
Praktikum ini bertujuan memahami dasar PHP sebagai bahasa pemrograman server-side, mulai dari variabel, operator, percabangan, perulangan, array, function, pemrosesan form GET dan POST, validasi input, sampai pengolahan data mahasiswa.

## Perangkat
- XAMPP (Apache dan PHP) atau Laragon
- Visual Studio Code
- Browser (Chrome, Edge, Firefox, atau lainnya)

## Cara menjalankan
1. Instal dan buka XAMPP.
2. Jalankan **Apache** pada XAMPP Control Panel.
3. Salin folder `Lab7Web_PHP` ke dalam folder `C:\xampp\htdocs\`.
4. Buka browser.
5. Akses `http://localhost/Lab7Web_PHP/`.
6. Pilih latihan dari halaman menu.

> File PHP harus dibuka melalui `localhost`, bukan dengan klik dua kali file di File Explorer.

## Struktur folder
```text
Lab7Web_PHP/
├── index.php
├── style.css
├── latihan1.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── latihan5.php
├── latihan6.php
├── latihan7.php
├── mini_project.php
├── eksperimen.php
└── README.md
```

## Ringkasan hasil
- Latihan 1: PHP menampilkan pesan dan waktu server.
- Latihan 2: PHP menghitung nilai akhir dan menentukan predikat.
- Latihan 3: Array mahasiswa ditampilkan menggunakan `foreach`.
- Latihan 4: Function menghitung diskon dan luas persegi panjang.
- Latihan 5: Form GET mengirim kata kunci melalui URL.
- Latihan 6: Form POST menerima nama dan program studi.
- Latihan 7: PHP menghitung subtotal transaksi dan memvalidasi input.
- Mini project: Form data mahasiswa dengan validasi nama, NIM 10 digit, program studi, semester 1–14, dan email.
- Eksperimen mandiri: Perhitungan rata-rata, pencarian nama, format Rupiah, validasi NIM, dan penjelasan reset.

## Contoh pengujian
### Input valid
1. Mini project: Nama `Sabrina`, NIM `1234567890`, Prodi `Teknik Informatika`, Semester `3`, Email `sabrina@example.com`. Data diterima jika seluruh ketentuan terpenuhi.
2. Latihan 7: Barang `Buku`, harga `15000`, jumlah `2`. Subtotal yang ditampilkan adalah Rp30.000.

### Input tidak valid
1. Mini project: Semester `15`. Sistem menampilkan pesan bahwa semester harus 1–14.
2. Mini project: NIM `12AB` atau kurang dari 10 digit. Sistem menampilkan pesan bahwa NIM harus terdiri dari 10 angka.
3. Latihan 7: Jumlah `0` atau harga negatif. Sistem menolak data.

## Jawaban pertanyaan evaluasi
1. **Apa perbedaan client-side dan server-side?**  
   Client-side diproses di perangkat pengguna, biasanya melalui browser. Server-side diproses di server, lalu hasilnya dikirim ke browser. PHP termasuk server-side.

2. **Mengapa file PHP harus dijalankan melalui web server?**  
   Karena kode PHP perlu diproses oleh interpreter PHP di server. Jika file dibuka langsung, browser tidak menjalankan kode PHP tersebut.

3. **Apa fungsi tanda `$` pada variabel PHP?**  
   Tanda `$` digunakan di depan nama variabel, contohnya `$nama` atau `$nilai`.

4. **Apa perbedaan GET dan POST?**  
   GET mengirim data melalui URL sehingga data terlihat di alamat browser. POST mengirim data melalui request body sehingga tidak ditampilkan pada URL. POST lebih sesuai untuk data form, tetapi bukan berarti otomatis terenkripsi; gunakan HTTPS untuk keamanan.

5. **Mengapa input perlu divalidasi di server?**  
   Karena validasi browser dapat dilewati atau dimanipulasi. Validasi server memastikan data yang diterima memenuhi aturan aplikasi.

6. **Apa fungsi `htmlspecialchars()`?**  
   Mengubah karakter khusus HTML menjadi bentuk aman saat ditampilkan, sehingga input pengguna tidak ditafsirkan sebagai tag atau script HTML.

7. **Apa manfaat function dalam PHP?**  
   Function membuat kode lebih terstruktur, dapat digunakan berulang, mengurangi pengulangan kode, dan lebih mudah dirawat.

## Catatan pengumpulan
- Jalankan setiap file dan ambil screenshot hasilnya di browser.
- Ambil screenshot untuk contoh input valid dan tidak valid pada mini project.
- Pastikan Apache aktif dan semua file berada di dalam folder `htdocs/Lab7Web_PHP`.
- Commit folder proyek ke repository GitHub, lalu kumpulkan URL repository sesuai arahan dosen.
