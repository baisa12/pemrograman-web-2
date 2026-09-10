<?php
$program = ["HTML", "PHP", "CSS", "JavaScript"];
$cari = trim($_GET["cari"] ?? "HTML");
$ditemukan = in_array($cari, $program);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 9 - In Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 7 &mdash; Latihan 9</p>
            <h1>Penggunaan in_array()</h1>
            <p class="intro">Pencarian bersifat case-sensitive. Contohnya, <code>PHP</code> ditemukan sedangkan <code>php</code> tidak.</p>
            <pre class="array-view"><?php echo htmlspecialchars(print_r($program, true), ENT_QUOTES, "UTF-8"); ?></pre>

            <form method="get" action="" class="form-grid">
                <label for="cari">Program basis web yang dicari</label>
                <input id="cari" name="cari" value="<?php echo htmlspecialchars($cari, ENT_QUOTES, "UTF-8"); ?>" required>
                <button type="submit">Cari dalam Array</button>
            </form>

            <p class="result <?php echo $ditemukan ? "success" : "failed"; ?>">
                Program Basis Web <strong><?php echo htmlspecialchars($cari, ENT_QUOTES, "UTF-8"); ?></strong>
                <?php echo $ditemukan ? "ada" : "tidak ada"; ?> di dalam array.
            </p>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
