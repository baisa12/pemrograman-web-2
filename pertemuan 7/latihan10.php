<?php
$tipe = ["1.10", 5.0, 1.13];
$stringLimaDitemukan = in_array("5.0", $tipe, true);
$bilanganSatuKomaTigaBelasDitemukan = in_array(1.13, $tipe, true);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 10 - In Array Strict</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 7 &mdash; Latihan 10</p>
            <h1>in_array() dengan Tipe Data</h1>
            <p class="intro">Argumen ketiga <code>true</code> membuat pencarian membandingkan nilai sekaligus tipe datanya.</p>

            <table>
                <thead>
                    <tr><th>Nilai yang Dicari</th><th>Tipe</th><th>Hasil</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>"5.0"</td>
                        <td>string</td>
                        <td class="<?php echo $stringLimaDitemukan ? "true" : "false"; ?>">
                            <?php echo $stringLimaDitemukan ? "Ditemukan" : "Tidak ditemukan"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>1.13</td>
                        <td>float</td>
                        <td class="<?php echo $bilanganSatuKomaTigaBelasDitemukan ? "true" : "false"; ?>">
                            <?php echo $bilanganSatuKomaTigaBelasDitemukan ? "Ditemukan" : "Tidak ditemukan"; ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p class="result">Array berisi string <code>"1.10"</code>, float <code>5.0</code>, dan float <code>1.13</code>. Karena mode strict aktif, string <code>"5.0"</code> tidak sama dengan float <code>5.0</code>.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
