<?php
date_default_timezone_set("Asia/Jakarta");

$tanggal = date("d-F-Y");
$jam = date("h:i:s A");
$tanggalMesin = date("Y-m-d");
$jamMesin = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Tanggal dan Waktu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 9 &mdash; Latihan 4</p>
            <h1>Fungsi date()</h1>
            <p class="intro">Tanggal dan waktu berikut diambil dari server menggunakan fungsi built-in <code>date()</code>.</p>

            <div class="clock">
                <span>Sekarang tanggal</span>
                <strong><time datetime="<?php echo $tanggalMesin; ?>"><?php echo $tanggal; ?></time></strong>
                <span>dan jam</span>
                <time datetime="<?php echo $jamMesin; ?>"><?php echo $jam; ?></time>
            </div>

            <p class="note">Zona waktu yang digunakan: <strong>Asia/Jakarta</strong>. Muat ulang halaman untuk memperbarui waktu.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
