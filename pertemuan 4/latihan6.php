<?php
$batas = 10;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Lanjutan - Tabel Perkalian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Tugas Lanjutan</p>
            <h1>Tabel Perkalian 1&ndash;10</h1>
            <p class="intro">Tabel dibentuk menggunakan dua perulangan <code>for</code> yang bersarang.</p>

            <div class="table-scroll">
                <table aria-label="Tabel perkalian 1 sampai 10">
                    <thead>
                        <tr>
                            <th>&times;</th>
                            <?php for ($kolom = 1; $kolom <= $batas; $kolom++): ?>
                                <th><?php echo $kolom; ?></th>
                            <?php endfor; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($baris = 1; $baris <= $batas; $baris++): ?>
                            <tr>
                                <th><?php echo $baris; ?></th>
                                <?php for ($kolom = 1; $kolom <= $batas; $kolom++): ?>
                                    <td><?php echo $baris * $kolom; ?></td>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
