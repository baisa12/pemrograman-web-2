<?php
$i = 0;
$nilaiPerulangan = [];

do {
    $nilaiPerulangan[] = $i;
    ++$i;
} while ($i < 10);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Do While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Latihan 2</p>
            <h1>Pengulangan Do...While</h1>
            <p class="intro">Blok <code>do</code> selalu dijalankan minimal satu kali karena kondisi baru diperiksa di bagian akhir.</p>

            <div class="number-grid">
                <?php foreach ($nilaiPerulangan as $nilai): ?>
                    <span>i = <strong><?php echo $nilai; ?></strong></span>
                <?php endforeach; ?>
            </div>

            <p class="note">Nilai awal <code>$i</code> adalah 0 dan pengulangan berhenti setelah nilainya mencapai 10.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
