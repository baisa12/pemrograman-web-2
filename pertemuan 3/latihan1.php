<?php
$ball = $_GET["warna"] ?? "purple";

// Semua variabel diinisialisasi agar tidak menghasilkan peringatan pada PHP 8.
$redbox = "";
$yellowbox = "";
$bluebox = "";
$greenbox = "";
$purplebox = "";
$colorlessbox = "";

if ($ball === "red") {
    $redbox = $ball;
} elseif ($ball === "yellow") {
    $yellowbox = $ball;
} elseif ($ball === "blue") {
    $bluebox = $ball;
} elseif ($ball === "green") {
    $greenbox = $ball;
} elseif ($ball === "purple") {
    $purplebox = $ball;
} else {
    $colorlessbox = $ball;
}

$boxes = [
    "red" => ["label" => "Red box", "value" => $redbox],
    "yellow" => ["label" => "Yellow box", "value" => $yellowbox],
    "blue" => ["label" => "Blue box", "value" => $bluebox],
    "green" => ["label" => "Green box", "value" => $greenbox],
    "purple" => ["label" => "Purple box", "value" => $purplebox],
    "colorless" => ["label" => "Colorless box", "value" => $colorlessbox],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Seleksi Warna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 3 &mdash; Latihan 1</p>
            <h1>Seleksi Warna Bola</h1>
            <p class="intro">Pilih warna untuk melihat kotak yang menerima bola menggunakan percabangan <code>if...elseif...else</code>.</p>

            <form method="get" action="" class="form-grid">
                <label for="warna">Warna bola</label>
                <select id="warna" name="warna">
                    <?php foreach (["red", "yellow", "blue", "green", "purple", "orange"] as $warna): ?>
                        <option value="<?php echo $warna; ?>" <?php echo $ball === $warna ? "selected" : ""; ?>>
                            <?php echo ucfirst($warna); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Pindahkan Bola</button>
            </form>

            <div class="box-grid">
                <?php foreach ($boxes as $warnaKotak => $box): ?>
                    <div class="color-box <?php echo $box["value"] !== "" ? "active" : ""; ?>">
                        <strong><?php echo $box["label"]; ?></strong>
                        <?php if ($box["value"] !== ""): ?>
                            <span class="ball <?php echo $warnaKotak; ?>" aria-label="Bola <?php echo htmlspecialchars($box["value"], ENT_QUOTES, "UTF-8"); ?>"></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <ul class="output-list" aria-label="Nilai variabel kotak">
                <?php foreach ($boxes as $box): ?>
                    <li>
                        <span><?php echo strtolower($box["label"]); ?>:</span>
                        <strong><?php echo htmlspecialchars($box["value"], ENT_QUOTES, "UTF-8"); ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
