<?php
$namaFile = __DIR__ . "/test1.txt";
$daftarBaris = [];
$pesanError = "";
$file = fopen($namaFile, "r");

if ($file === false) {
    $pesanError = "Berkas test1.txt tidak dapat dibuka.";
} else {
    while (($baris = fgets($file)) !== false) {
        $daftarBaris[] = rtrim($baris, "\r\n");
    }
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Membaca Seluruh Berkas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 5 &mdash; Latihan 3</p>
            <h1>Membaca Seluruh Berkas</h1>
            <p class="intro">Perulangan membaca setiap baris sampai <code>fgets()</code> mengembalikan nilai <code>false</code>.</p>

            <?php if ($pesanError !== ""): ?>
                <p class="error"><?php echo $pesanError; ?></p>
            <?php else: ?>
                <ol class="line-list">
                    <?php foreach ($daftarBaris as $baris): ?>
                        <li><?php echo htmlspecialchars($baris, ENT_QUOTES, "UTF-8"); ?></li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
