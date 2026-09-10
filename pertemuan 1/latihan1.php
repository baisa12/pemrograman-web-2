<?php
$A = 123; // Variabel global

function test(): void
{
    $A = "Test"; // Variabel lokal
    echo "Nilai A dalam fungsi = $A<br>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Scope Variabel</title>
</head>
<body>
    <h1>Latihan 1</h1>
    <?php
    test();
    echo "Nilai A luar fungsi = $A";
    ?>

    <p><a href="index.php">Kembali ke daftar latihan</a></p>
</body>
</html>
