<?php
$namaFile = __DIR__ . "/test1.txt";
$barisPertama = "";
$pesanError = "";
$file = fopen($namaFile, "r");

if ($file === false) {
    $pesanError = "Berkas test1.txt tidak dapat dibuka.";
} else {
    $hasilBaca = fgets($file);
    $barisPertama = $hasilBaca === false ? "" : rtrim($hasilBaca, "\r\n");
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Membaca Satu Baris</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 5 &mdash; Latihan 2</p>
            <h1>Membaca Baris Pertama</h1>
            <p class="intro"><code>fopen()</code> membuka berkas, <code>fgets()</code> membaca satu baris, dan <code>fclose()</code> menutupnya kembali.</p>

            <?php if ($pesanError !== ""): ?>
                <p class="error"><?php echo $pesanError; ?></p>
            <?php else: ?>
                <pre class="file-output"><?php echo htmlspecialchars($barisPertama, ENT_QUOTES, "UTF-8"); ?></pre>
            <?php endif; ?>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
