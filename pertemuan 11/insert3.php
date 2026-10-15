<?php require_once __DIR__ . '/mysql_compat.php';
// ========== KODE DARI PDF – insert3.php (Pemrosesan Form) ==========
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("lat_dbase", $con);

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con);
// ========== AKHIR KODE PDF ==========
?>
<br><br>
<a href="form.php">&larr; Kembali ke form</a> | <a href="index.php">Kembali ke daftar latihan</a>
