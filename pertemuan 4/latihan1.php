<?php
$brushPrice = 5;
$counter = 10;
$daftarHarga = [];

while ($counter <= 100) {
    $daftarHarga[] = [
        "quantity" => $counter,
        "price" => $brushPrice * $counter,
    ];
    $counter += 10;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Perulangan While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 4 &mdash; Latihan 1</p>
            <h1>Tabel Harga Kuas</h1>
            <p class="intro">Harga satu kuas adalah $<?php echo $brushPrice; ?>. Baris tabel dibuat dengan perulangan <code>while</code>.</p>

            <div class="table-scroll">
                <table>
                    <thead><tr><th>Quantity</th><th>Price</th></tr></thead>
                    <tbody>
                        <?php foreach ($daftarHarga as $item): ?>
                            <tr>
                                <td><?php echo $item["quantity"]; ?></td>
                                <td>$<?php echo $item["price"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
