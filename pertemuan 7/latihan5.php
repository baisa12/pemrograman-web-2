<?php
$program = ["Bobo", "Doraemon", "Spiderman"];
list($majalah, $komik, $film) = $program;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 7 &mdash; Latihan 5</p>
            <h1>Penggunaan list()</h1>
            <p class="intro">Fungsi <code>list()</code> mengambil setiap komponen array ke dalam variabel terpisah.</p>

            <div class="category-grid">
                <div><span>Cerpen</span><strong><?php echo $majalah; ?></strong></div>
                <div><span>Cerita Bergambar</span><strong><?php echo $komik; ?></strong></div>
                <div><span>Bioskop</span><strong><?php echo $film; ?></strong></div>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
