<?php
$daftarHari = ["Senin", "Selasa", "Rabu"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Latihan 5</p>
            <h1>Daftar Hari</h1>
            <p class="intro">Setiap elemen array ditampilkan menggunakan perulangan <code>foreach</code>.</p>
            <ul class="day-list">
                <?php foreach ($daftarHari as $hari): ?>
                    <li>Hari: <strong><?php echo $hari; ?></strong></li>
                <?php endforeach; ?>
            </ul>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
