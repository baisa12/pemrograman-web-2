<?php
require_once __DIR__ . '/mysql_compat.php';

mysql_connect("localhost", "root", "");
mysql_select_db("lat_dbase");
$hasil = mysql_query("select * from tbl_mhs");
while ($data = mysql_fetch_array($hasil)) {
    echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>
<br>
<a href="index.php">&larr; Kembali ke daftar latihan</a>
