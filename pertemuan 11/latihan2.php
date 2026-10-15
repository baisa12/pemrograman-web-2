<?php
require_once __DIR__ . '/mysql_compat.php';

mysql_connect("localhost", "root", "");
$dbname = "lat_dbase";
$cek = mysql_query("CREATE DATABASE IF NOT EXISTS $dbname") or 
die("Couldn't Create Database: $dbname"); 
if ($cek) {
    echo "Database $dbname berhasil dibuat";
}
?>
<br><br>
<a href="index.php">&larr; Kembali ke daftar latihan</a>
