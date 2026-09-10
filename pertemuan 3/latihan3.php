<?php
$destination = $_POST["destination"] ?? "Tokyo";

switch ($destination) {
    case "Las Vegas":
        $pesan = "Bring an extra $500";
        break;
    case "Amsterdam":
        $pesan = "Bring an open mind";
        break;
    case "Egypt":
        $pesan = "Bring 15 bottles of SPF 50 Sunscreen";
        break;
    case "Tokyo":
        $pesan = "Bring lots of money";
        break;
    case "Caribbean Islands":
        $pesan = "Bring a swimsuit";
        break;
    default:
        $destination = "Tujuan lainnya";
        $pesan = "Prepare according to your destination";
        break;
}

$daftarTujuan = ["Las Vegas", "Amsterdam", "Egypt", "Tokyo", "Caribbean Islands"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Switch Tujuan Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 3 &mdash; Latihan 3</p>
            <h1>Persiapan Perjalanan</h1>
            <p class="intro">Pilih tujuan wisata. Pernyataan <code>switch case</code> akan menentukan barang atau persiapan yang disarankan.</p>

            <form method="post" action="" class="form-grid">
                <label for="destination">Tujuan wisata</label>
                <select id="destination" name="destination">
                    <?php foreach ($daftarTujuan as $tujuan): ?>
                        <option value="<?php echo $tujuan; ?>" <?php echo $destination === $tujuan ? "selected" : ""; ?>>
                            <?php echo $tujuan; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Lihat Persiapan</button>
            </form>

            <div class="result">
                <strong><?php echo htmlspecialchars($destination, ENT_QUOTES, "UTF-8"); ?></strong><br>
                <?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
