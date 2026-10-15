<?php
require_once __DIR__ . '/mysql_compat.php';

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("lat_dbase", $conn);


mysql_query("CREATE TABLE IF NOT EXISTS tbl_bukutamu (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pesan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)", $conn);


$batas   = 5;
$halaman = isset($_GET['halaman']) ? max(1, (int)$_GET['halaman']) : 1;
$offset  = ($halaman - 1) * $batas;


$resTotal     = mysql_query("SELECT COUNT(*) AS total FROM tbl_bukutamu", $conn);
$rowTotal     = mysql_fetch_array($resTotal);
$totalData    = (int)$rowTotal['total'];
$totalHalaman = max(1, (int)ceil($totalData / $batas));


$tampil = mysql_query("SELECT * FROM tbl_bukutamu ORDER BY id DESC LIMIT $offset, $batas", $conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Daftar Buku Tamu</title>
</head>
<body>
    <h2>Daftar Buku Tamu</h2>
    <p>Menampilkan data buku tamu dengan pagination <b>5 record per halaman</b>.</p>

    <table border="1" cellpadding="6" cellspacing="0" width="100%">
        <thead>
            <tr bgcolor="#f0f0f0">
                <th width="5%">No</th>
                <th width="20%">Nama</th>
                <th width="20%">Email</th>
                <th>Pesan</th>
                <th width="20%">Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($totalData === 0): ?>
                <tr>
                    <td colspan="5" align="center">Belum ada data. <a href="buku_tamu.php">Isi buku tamu</a>.</td>
                </tr>
            <?php else: ?>
                <?php $no = $offset + 1; while ($row = mysql_fetch_array($tampil)): ?>
                <tr>
                    <td align="center"><?php echo $no++; ?></td>
                    <td><b><?php echo htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8'); ?></b></td>
                    <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($row['pesan'], ENT_QUOTES, 'UTF-8')); ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <?php if ($totalData > 0): ?>
    <div>
        Halaman <b><?php echo $halaman; ?></b> dari <b><?php echo $totalHalaman; ?></b> (Total: <?php echo $totalData; ?> record)<br><br>
        <?php if ($halaman > 1): ?>
            <a href="?halaman=<?php echo $halaman - 1; ?>">&laquo; Prev</a> | 
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalHalaman; $i++): ?>
            <?php if ($i === $halaman): ?>
                <b>[ <?php echo $i; ?> ]</b>
            <?php else: ?>
                <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($halaman < $totalHalaman): ?>
            | <a href="?halaman=<?php echo $halaman + 1; ?>">Next &raquo;</a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <br><br>
    <a href="buku_tamu.php">&plus; Tambah Buku Tamu</a> | 
    <a href="index.php">&larr; Kembali ke daftar latihan</a>
</body>
</html>
