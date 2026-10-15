<?php
require_once __DIR__ . '/mysql_compat.php';

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("lat_dbase", $conn);

// Buat tabel buku tamu jika belum ada
mysql_query("CREATE TABLE IF NOT EXISTS tbl_bukutamu (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pesan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)", $conn);

$pesanStatus = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama  = isset($_POST['nama'])  ? addslashes(trim($_POST['nama']))  : '';
    $email = isset($_POST['email']) ? addslashes(trim($_POST['email'])) : '';
    $pesan = isset($_POST['pesan']) ? addslashes(trim($_POST['pesan'])) : '';

    if ($nama !== '' && $email !== '' && $pesan !== '') {
        $sql = "INSERT INTO tbl_bukutamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
        if (mysql_query($sql, $conn)) {
            $pesanStatus = "Data buku tamu berhasil disimpan!";
        } else {
            $pesanStatus = "Error: " . mysql_error($conn);
        }
    } else {
        $pesanStatus = "Mohon lengkapi semua field.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Form Buku Tamu</title>
</head>
<body>
    <h2>Form Buku Tamu</h2>
    <p>Silakan isi buku tamu di bawah ini:</p>

    <?php if ($pesanStatus !== ''): ?>
        <p><b><?php echo htmlspecialchars($pesanStatus, ENT_QUOTES, 'UTF-8'); ?></b></p>
    <?php endif; ?>

    <form action="buku_tamu.php" method="post">
        <table border="0" cellpadding="5">
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" required size="30"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email" required size="30"></td>
            </tr>
            <tr>
                <td valign="top">Pesan</td>
                <td>: <textarea name="pesan" rows="4" cols="35" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kirim Pesan"></td>
            </tr>
        </table>
    </form>

    <br>
    <a href="tampil_buku_tamu.php">&rarr; Lihat Daftar Buku Tamu</a> | 
    <a href="index.php">&larr; Kembali ke daftar latihan</a>
</body>
</html>
