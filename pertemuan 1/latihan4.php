<?php
// Ini adalah komentar dalam satu baris.

/*
 * Kalau yang ini adalah komentar dalam banyak baris.
 * Komentar baru selesai setelah diakhiri dengan tanda penutup.
 */

// Inisialisasi beberapa variabel.
$namad = "Jean";
$namat = "Luc";
$namab = "Piccard";
$nilai1 = 25;
$nilai2 = 50;
$hasil = $nilai1 * $nilai2;
$a = 2;
$b = 3;
$hsl = pow($a, $b);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
    <p>Kapal Asing, silakan identifikasikan diri Anda!</p>
    <p>
        <strong>Ini adalah kapal Federasi Planet USS Enterprise.<br>
        <?php echo "Saya $namab, $namad $namat $namab, kapten kapal."; ?></strong>
    </p>

    <p><?php echo "$nilai1 x $nilai2 = $hasil"; ?></p>
    <p><?php echo "$a ^ $b = $hsl"; ?></p>

    <p><a href="index.php">Kembali ke daftar latihan</a></p>
</body>
</html>
