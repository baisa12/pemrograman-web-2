<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || ($_POST['Submit'] ?? '') !== 'Submit') {
    header('Location: download-script-form-input-data.php');
    exit;
}
$data = [];
foreach (['id_mahasiswa', 'nama', 'jurusan', 'alamat', 'telepon'] as $field) {
    $data[$field] = is_string($_POST[$field] ?? null) ? trim($_POST[$field]) : '';
    if ($data[$field] === '') {
        exit("<script>alert('Data tidak boleh kosong!'); window.location='download-script-form-input-data.php';</script>");
    }
}
require __DIR__ . '/koneksi.php';
try {
    $stmt = $db->prepare('INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sssss', $data['id_mahasiswa'], $data['nama'], $data['jurusan'], $data['alamat'], $data['telepon']);
    $stmt->execute();
    echo "<script>alert('Data berhasil disimpan!'); window.location='download-script-form-input-data.php';</script>";
} catch (mysqli_sql_exception $error) {
    if ($error->getCode() === 1062) {
        echo "<script>alert('NIM sudah terdaftar!'); window.location='download-script-form-input-data.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan!'); window.location='download-script-form-input-data.php';</script>";
    }
}
