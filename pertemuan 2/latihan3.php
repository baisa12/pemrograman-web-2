<?php
$nilai1Input = $_POST["nilai1"] ?? "";
$nilai2Input = $_POST["nilai2"] ?? "";
$operator = $_POST["operator"] ?? "+";
$hasil = null;
$pesanError = "";

if (($_SERVER["REQUEST_METHOD"] ?? "GET") === "POST") {
    $nilai1 = filter_var($nilai1Input, FILTER_VALIDATE_FLOAT);
    $nilai2 = filter_var($nilai2Input, FILTER_VALIDATE_FLOAT);
    $operatorValid = ["+", "-", "*", "/"];

    if ($nilai1 === false || $nilai2 === false) {
        $pesanError = "Masukkan Nilai I dan Nilai II berupa angka.";
    } elseif (!in_array($operator, $operatorValid, true)) {
        $pesanError = "Operator yang dipilih tidak valid.";
    } else {
        switch ($operator) {
            case "+":
                $hasil = $nilai1 + $nilai2;
                break;
            case "-":
                $hasil = $nilai1 - $nilai2;
                break;
            case "*":
                $hasil = $nilai1 * $nilai2;
                break;
            case "/":
                if ($nilai2 == 0) {
                    $pesanError = "Nilai II tidak boleh nol untuk operasi pembagian.";
                } else {
                    $hasil = $nilai1 / $nilai2;
                }
                break;
        }
    }
}

function tampilkanAngka(float $nilai): string
{
    return rtrim(rtrim(number_format($nilai, 10, ".", ""), "0"), ".");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card calculator">
            <div class="calculator-title">
                <span>Kalkulator</span>
                <strong>Sederhana</strong>
            </div>

            <p class="welcome">Selamat Mencoba</p>

            <form method="post" action="">
                <div class="calculator-grid">
                    <label for="nilai1">Nilai I</label>
                    <span class="operator-label">Operator</span>
                    <label for="nilai2">Nilai II</label>

                    <input
                        id="nilai1"
                        name="nilai1"
                        type="number"
                        step="any"
                        value="<?php echo htmlspecialchars((string) $nilai1Input, ENT_QUOTES, "UTF-8"); ?>"
                        required
                    >

                    <select name="operator" aria-label="Operator perhitungan">
                        <?php foreach (["+", "-", "*", "/"] as $pilihan): ?>
                            <option value="<?php echo $pilihan; ?>" <?php echo $operator === $pilihan ? "selected" : ""; ?>>
                                <?php echo $pilihan; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input
                        id="nilai2"
                        name="nilai2"
                        type="number"
                        step="any"
                        value="<?php echo htmlspecialchars((string) $nilai2Input, ENT_QUOTES, "UTF-8"); ?>"
                        required
                    >
                </div>

                <button type="submit">Hitung</button>
            </form>

            <?php if ($pesanError !== ""): ?>
                <p class="result error"><?php echo $pesanError; ?></p>
            <?php elseif ($hasil !== null): ?>
                <p class="result">
                    Hasil: <strong><?php echo tampilkanAngka($hasil); ?></strong>
                </p>
            <?php endif; ?>

            <p class="credit">Pemrograman Web 2 &mdash; Pertemuan 2</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
