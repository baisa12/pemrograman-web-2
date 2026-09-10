<?php
$usiaKaryawan = [
    "Lisa" => 28,
    "Jack" => 16,
    "Ryan" => 35,
    "Rachel" => 46,
    "Grace" => 34,
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Array Asosiatif</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 6 &mdash; Latihan 3</p>
            <h1>Usia Karyawan</h1>
            <p class="intro">Nama menjadi key dan usia menjadi value pada array asosiatif.</p>
            <ul class="employee-list">
                <?php foreach ($usiaKaryawan as $nama => $umur): ?>
                    <li>
                        <span>Nama Karyawan: <strong><?php echo $nama; ?></strong></span>
                        <span>Usia: <?php echo $umur; ?> th</span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
