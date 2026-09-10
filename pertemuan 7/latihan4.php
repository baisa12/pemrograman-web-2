<?php
$var = [1, 2, 3, 4, 5, 6, 7];
$merupakanArray = is_array($var);
$status = $merupakanArray ? "merupakan array" : "bukan merupakan array";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Is Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 7 &mdash; Latihan 4</p>
            <h1>Penggunaan is_array()</h1>
            <p class="intro">Fungsi <code>is_array()</code> memeriksa apakah nilai dalam sebuah variabel bertipe array.</p>
            <pre class="array-view">$var = array(<?php echo implode(", ", $var); ?>);</pre>
            <p class="result <?php echo $merupakanArray ? "success" : "failed"; ?>">
                Variabel <code>$var</code> <strong><?php echo $status; ?></strong>.
            </p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
