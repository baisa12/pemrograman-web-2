<?php
$bilangan = [];

for ($bil = 1; $bil < 25; $bil++) {
    $bilangan[] = $bil;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Perulangan For</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Latihan 3</p>
            <h1>Bilangan 1 sampai 24</h1>
            <p class="intro">Perulangan <code>for</code> dimulai dari 1 dan berjalan selama nilai kurang dari 25.</p>
            <div class="number-grid">
                <?php foreach ($bilangan as $nilai): ?>
                    <span><?php echo $nilai; ?></span>
                <?php endforeach; ?>
            </div>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
