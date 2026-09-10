<?php
$bilanganGanjil = [];

for ($i = 1; $i < 11; $i++) {
    if ($i % 2 === 0) {
        continue;
    }

    $bilanganGanjil[] = $i;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Continue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Latihan 4</p>
            <h1>Bilangan Ganjil</h1>
            <p class="intro">Ketika bilangan genap ditemukan, perintah <code>continue</code> melewati iterasi tersebut.</p>
            <div class="number-grid">
                <?php foreach ($bilanganGanjil as $nilai): ?>
                    <span><?php echo $nilai; ?></span>
                <?php endforeach; ?>
            </div>
            <p class="note"><strong>Perbedaannya:</strong> <code>break</code> menghentikan seluruh pengulangan, sedangkan <code>continue</code> hanya melewati iterasi saat ini dan melanjutkan ke iterasi berikutnya.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
