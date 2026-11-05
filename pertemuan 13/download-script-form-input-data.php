<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><title>Form Input Data Mahasiswa</title></head>
<body>
<form action="action-input-data.php" method="post" name="form-input-data">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" style="font:11px Verdana;">
<tr height="46"><td width="10%"></td><td width="25%"></td><td width="65%"><font color="orange" size="2"><b>Form Input Data Mahasiswa</b></font></td></tr>
<tr height="46"><td></td><td>NIM</td><td><input type="text" name="id_mahasiswa" maxlength="6" size="10" style="height:20px;"></td></tr>
<tr height="46"><td></td><td>Nama</td><td><input type="text" name="nama" maxlength="30" size="30" style="height:20px;"></td></tr>
<tr height="46"><td></td><td>Jurusan</td><td><select name="jurusan">
<option value="">- Pilih Jurusan -</option>
<option value="Teknik Komputer">Teknik Komputer</option>
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Teknik Mesin">Teknik Mesin</option>
<option value="Teknik Elektro">Teknik Elektro</option>
<option value="Komputer Akuntansi">Komputer Akuntansi</option>
</select></td></tr>
<tr height="46"><td></td><td>Alamat</td><td><input type="text" name="alamat" maxlength="30" size="30" style="height:20px;"></td></tr>
<tr height="46"><td></td><td>Telepon</td><td><input type="text" name="telepon" maxlength="12" size="20" style="height:20px;"></td></tr>
<tr height="46"><td></td><td></td><td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="reset" value="Cancel"></td></tr>
</table>
</form>
</body>
</html>
