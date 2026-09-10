<?php
define("judul", "Menghitung luas lingkaran");
define("phi", 3.14);

$r = 5;
$luas = phi * $r * $r;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Konstanta</title>
</head>
<body>
    <h1><?php echo judul; ?></h1>
    <p>Jari-jari = <?php echo $r; ?></p>
    <p>Luas = <?php echo $luas; ?></p>

    <p><a href="index.php">Kembali ke daftar latihan</a></p>
</body>
</html>
