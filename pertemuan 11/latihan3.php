<?php
require_once __DIR__ . '/mysql_compat.php';

mysql_connect("localhost", "root", ""); 
mysql_select_db("lat_dbase"); 

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs 
(
mhsID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(mhsID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql);


$input = mysql_query("insert into tbl_mhs(FirstName,LastName,Age) values('Anjar','Prabowo',25)");

if ($input) {
    echo "Tabel tbl_mhs berhasil dibuat dan data awal berhasil dimasukkan.";
}
?>
<br><br>
<a href="index.php">&larr; Kembali ke daftar latihan</a>
