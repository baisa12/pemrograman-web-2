<?php
$var = ["18", "11", "2010"];
$tanggal = join("/", $var);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 8 - Join</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 7 &mdash; Latihan 8</p>
            <h1>Penggunaan join()</h1>
            <p class="intro"><code>join()</code> menggabungkan elemen array menjadi string dengan karakter pemisah. Fungsi ini identik dengan <code>implode()</code>.</p>
            <pre class="array-view">[<?php echo implode(", ", $var); ?>]</pre>
            <div class="date-display"><?php echo $tanggal; ?></div>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
