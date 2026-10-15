<?php
require_once __DIR__ . '/mysql_compat.php';

$servername = 'localhost';

$dbusername = 'root';
$dbpassword = '';
$link = mysql_connect("$servername", "$dbusername", "$dbpassword")
    or die(" Not able to connect to server ");
if ($link) {
    echo "ok....koneksi berhasil";
}
?>
<br><br>
<a href="index.php">&larr; Kembali ke daftar latihan</a>
