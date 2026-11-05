-- Pilih database pertemuan13_mahasiswa sebelum mengimpor.
CREATE TABLE IF NOT EXISTS mahasiswa (
    id_mahasiswa VARCHAR(6) NOT NULL PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    alamat VARCHAR(30) NOT NULL,
    telepon VARCHAR(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
