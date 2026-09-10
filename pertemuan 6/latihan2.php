<?php
$x = ["one", "two", "three"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Foreach Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 6 &mdash; Latihan 2</p>
            <h1>Menampilkan Isi Array</h1>
            <p class="intro">Perulangan <code>foreach</code> mengambil setiap nilai array secara berurutan.</p>
            <ol class="value-list">
                <?php foreach ($x as $value): ?>
                    <li><?php echo $value; ?></li>
                <?php endforeach; ?>
            </ol>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
