<?php
date_default_timezone_set("Asia/Jakarta");

$sekarang = getdate();
$bulan = $sekarang["month"];
$hari = $sekarang["mday"];
$tahun = $sekarang["year"];
$jam = $sekarang["hours"];

if ($jam <= 11) {
    $salam = "Selamat Pagi";
} elseif ($jam <= 15) {
    $salam = "Selamat Siang";
} elseif ($jam <= 18) {
    $salam = "Selamat Sore";
} else {
    $salam = "Selamat Malam";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - Getdate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 9 &mdash; Latihan 5</p>
            <h1>Fungsi getdate()</h1>
            <p class="intro"><code>getdate()</code> mengembalikan informasi waktu dalam bentuk array asosiatif.</p>

            <div class="welcome">
                <h2 class="greeting"><?php echo $salam; ?></h2>
                <h2>Selamat datang</h2>
                <p>Sekarang adalah tanggal <strong><?php echo "$hari $bulan $tahun"; ?></strong>.</p>

                <div class="detail-grid">
                    <div><span>Hari</span><strong><?php echo $sekarang["weekday"]; ?></strong></div>
                    <div><span>Jam (24 jam)</span><strong><?php echo str_pad((string) $jam, 2, "0", STR_PAD_LEFT); ?></strong></div>
                    <div><span>Hari ke- dalam tahun</span><strong><?php echo $sekarang["yday"] + 1; ?></strong></div>
                </div>
            </div>

            <p class="note">Salam ditentukan berdasarkan nilai elemen <code>hours</code> pada array hasil <code>getdate()</code>.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
