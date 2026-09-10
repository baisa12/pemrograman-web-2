<?php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$jumlahA = count($a);

$b["buah"] = "semangka";
$b["sayur"] = "wortel";
$b["daging"] = "ayam";
$b["utama"] = "nasi";
$jumlahB = sizeof($b);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Count dan Sizeof</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 6 &mdash; Latihan 1</p>
            <h1>Menghitung Elemen Array</h1>
            <p class="intro"><code>count()</code> dan <code>sizeof()</code> memiliki fungsi yang sama, yaitu menghitung jumlah elemen array.</p>

            <div class="array-panels">
                <section class="panel">
                    <h2>Array numerik $a</h2>
                    <p><?php echo implode(", ", $a); ?></p>
                    <span class="count">Jumlah: <?php echo $jumlahA; ?></span>
                </section>
                <section class="panel">
                    <h2>Array asosiatif $b</h2>
                    <p><?php echo implode(", ", $b); ?></p>
                    <span class="count">Jumlah: <?php echo $jumlahB; ?></span>
                </section>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
