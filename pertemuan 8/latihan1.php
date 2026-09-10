<?php
function basic(string $argument): string
{
    return $argument;
}

$pesan = basic("hello world!");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Function Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 8 &mdash; Latihan 1</p>
            <h1>Function Sederhana</h1>
            <p class="intro">Function <code>basic()</code> menerima sebuah argument dan mengembalikan nilainya untuk ditampilkan.</p>
            <div class="hello"><?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?></div>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
