<?php
function repeatText(string $text, int $num = 10): array
{
    $daftar = [];

    for ($i = 0; $i < $num; $i++) {
        $daftar[] = $text;
    }

    return $daftar;
}

$hasilLimaBelas = repeatText("I'm the best", 15);
$hasilDefault = repeatText("You're the man");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Parameter Default</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 8 &mdash; Latihan 3</p>
            <h1>Function dengan Parameter Default</h1>
            <p class="intro">Parameter <code>$num</code> memiliki nilai default 10. Nilai tersebut dipakai ketika argument kedua tidak diberikan.</p>

            <div class="repeat-columns">
                <section class="repeat-panel">
                    <h2>Dua argument: 15 kali</h2>
                    <ol>
                        <?php foreach ($hasilLimaBelas as $teks): ?>
                            <li><?php echo htmlspecialchars($teks, ENT_QUOTES, "UTF-8"); ?></li>
                        <?php endforeach; ?>
                    </ol>
                </section>
                <section class="repeat-panel">
                    <h2>Satu argument: default 10 kali</h2>
                    <ol>
                        <?php foreach ($hasilDefault as $teks): ?>
                            <li><?php echo htmlspecialchars($teks, ENT_QUOTES, "UTF-8"); ?></li>
                        <?php endforeach; ?>
                    </ol>
                </section>
            </div>

            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
