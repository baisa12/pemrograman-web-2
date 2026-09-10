<?php
// Nama peralatan.
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// Harga satuan peralatan.
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// Jumlah peralatan.
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// Total harga setiap jenis peralatan.
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// Grand total, diskon, dan jumlah pembayaran.
$tharga = $th1 + $th2 + $th3 + $th4;
$diskon = 5;
$tdiskon = ($diskon * $tharga) / 100;
$tdibayar = $tharga - $tdiskon;

function rupiah(float $nilai): string
{
    return "Rp" . number_format($nilai, 0, ",", ".");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peralatan yang Dibeli</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container container-wide">
        <section class="card">
            <p class="eyebrow">Contoh Perhitungan dengan PHP</p>
            <h1>Daftar Pemesanan Peralatan Kantor</h1>

            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Peralatan</th>
                            <th class="number">Jumlah</th>
                            <th class="number">Harga Satuan</th>
                            <th class="number">Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $brg1; ?></td>
                            <td class="number"><?php echo $jmlbrg1; ?></td>
                            <td class="number"><?php echo rupiah($harga1); ?></td>
                            <td class="number"><?php echo rupiah($th1); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $brg2; ?></td>
                            <td class="number"><?php echo $jmlbrg2; ?></td>
                            <td class="number"><?php echo rupiah($harga2); ?></td>
                            <td class="number"><?php echo rupiah($th2); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $brg3; ?></td>
                            <td class="number"><?php echo $jmlbrg3; ?></td>
                            <td class="number"><?php echo rupiah($harga3); ?></td>
                            <td class="number"><?php echo rupiah($th3); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $brg4; ?></td>
                            <td class="number"><?php echo $jmlbrg4; ?></td>
                            <td class="number"><?php echo rupiah($harga4); ?></td>
                            <td class="number"><?php echo rupiah($th4); ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Harga</th>
                            <td class="number"><?php echo rupiah($tharga); ?></td>
                        </tr>
                        <tr>
                            <th colspan="3">Diskon (<?php echo $diskon; ?>%)</th>
                            <td class="number">- <?php echo rupiah($tdiskon); ?></td>
                        </tr>
                        <tr class="grand-total">
                            <th colspan="3">Jumlah yang Harus Dibayar</th>
                            <td class="number"><?php echo rupiah($tdibayar); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
