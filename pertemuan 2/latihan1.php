<?php
$a = 1;
$b = 2;

// Operator titik (.) menggabungkan nilai 1 dan 2 menjadi string "12".
$c = $a . $b;

// String numerik "12" dapat digunakan dalam operasi penjumlahan.
$d = $c + 1;

$e = "Number";
$f = $e . $d;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Operator PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 2</p>
            <h1>Latihan 1</h1>
            <p>Penggabungan string dan operasi penjumlahan.</p>

            <table>
                <thead>
                    <tr>
                        <th>Variabel</th>
                        <th>Operasi</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>$c</code></td>
                        <td><code>$a . $b</code></td>
                        <td><?php echo $c; ?></td>
                    </tr>
                    <tr>
                        <td><code>$d</code></td>
                        <td><code>$c + 1</code></td>
                        <td><?php echo $d; ?></td>
                    </tr>
                    <tr>
                        <td><code>$f</code></td>
                        <td><code>$e . $d</code></td>
                        <td><?php echo $f; ?></td>
                    </tr>
                </tbody>
            </table>

            <p class="note">Keluaran utama sesuai slide: <strong><?php echo $d; ?></strong> dan <strong><?php echo $f; ?></strong>.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
