<?php
$namaFile = __DIR__ . "/counter.dat";
$pencacah = 0;
$pesanError = "";
$berkas = fopen($namaFile, "c+");

if ($berkas === false) {
    $pesanError = "Berkas counter.dat tidak dapat dibuka untuk baca dan tulis.";
} elseif (!flock($berkas, LOCK_EX)) {
    $pesanError = "Berkas counter.dat sedang digunakan proses lain.";
    fclose($berkas);
} else {
    rewind($berkas);
    $isiBerkas = stream_get_contents($berkas);
    $pencacah = max(0, (int) trim((string) $isiBerkas)) + 1;

    ftruncate($berkas, 0);
    rewind($berkas);
    fwrite($berkas, (string) $pencacah);
    fflush($berkas);
    flock($berkas, LOCK_UN);
    fclose($berkas);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Counter Pengunjung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 5 &mdash; Latihan 4</p>
            <h1>Contoh Counter</h1>
            <p class="intro">Nilai kunjungan dibaca dari berkas, ditambah satu, lalu ditulis kembali setiap halaman dibuka.</p>

            <?php if ($pesanError !== ""): ?>
                <p class="error"><?php echo $pesanError; ?></p>
            <?php else: ?>
                <div class="counter">
                    <span>Anda pengunjung ke-</span>
                    <strong><?php echo $pencacah; ?></strong>
                </div>
            <?php endif; ?>

            <p class="note">Muat ulang halaman ini untuk menaikkan nilai pada <code>counter.dat</code>.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
