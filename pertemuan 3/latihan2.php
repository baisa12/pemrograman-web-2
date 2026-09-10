<?php
$totalBeliInput = $_POST["total_beli"] ?? "";
$totalBeli = null;
$persenDiskon = null;
$nilaiDiskon = null;
$pembayaran = null;
$pesanError = "";

if (($_SERVER["REQUEST_METHOD"] ?? "GET") === "POST") {
    $nilaiInput = filter_var($totalBeliInput, FILTER_VALIDATE_FLOAT);

    if ($totalBeliInput === "" || $nilaiInput === false || $nilaiInput < 0) {
        $pesanError = "Masukkan besar pembelian berupa angka nol atau lebih.";
    } else {
        $totalBeli = (float) $nilaiInput;

        if ($totalBeli >= 200000) {
            $persenDiskon = 10;
        } elseif ($totalBeli >= 100000) {
            $persenDiskon = 5;
        } else {
            $persenDiskon = 1;
        }

        $nilaiDiskon = ($persenDiskon / 100) * $totalBeli;
        $pembayaran = $totalBeli - $nilaiDiskon;
    }
}

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
    <title>Latihan 2 - Diskon Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 3 &mdash; Latihan 2</p>
            <h1>Menentukan Diskon</h1>
            <p class="intro">Diskon ditentukan dengan struktur <code>if...elseif...else</code>: 10% untuk pembelian minimal Rp200.000, 5% untuk minimal Rp100.000, dan 1% untuk nilai di bawahnya.</p>

            <form method="post" action="" class="form-grid">
                <label for="total_beli">Besar pembelian</label>
                <input
                    id="total_beli"
                    name="total_beli"
                    type="number"
                    min="0"
                    step="any"
                    placeholder="Contoh: 250000"
                    value="<?php echo htmlspecialchars((string) $totalBeliInput, ENT_QUOTES, "UTF-8"); ?>"
                    required
                >
                <button type="submit">Tentukan Diskon</button>
            </form>

            <?php if ($pesanError !== ""): ?>
                <p class="result error"><?php echo $pesanError; ?></p>
            <?php elseif ($pembayaran !== null): ?>
                <div class="summary">
                    <div>
                        <span>Total pembelian</span>
                        <strong><?php echo rupiah($totalBeli); ?></strong>
                    </div>
                    <div>
                        <span>Diskon (<?php echo $persenDiskon; ?>%)</span>
                        <strong><?php echo rupiah($nilaiDiskon); ?></strong>
                    </div>
                    <div>
                        <span>Pembayaran</span>
                        <strong><?php echo rupiah($pembayaran); ?></strong>
                    </div>
                </div>
            <?php endif; ?>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
