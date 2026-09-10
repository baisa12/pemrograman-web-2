# Pemrograman Web 2 - Pertemuan 5

Folder ini berisi pengerjaan materi **Manipulasi Berkas**:

1. `test1.txt` - berkas teks tiga baris sesuai materi.
2. `fgets1.php` - membaca baris pertama menggunakan `fgets()`.
3. `fgets2.php` - membaca seluruh baris berkas menggunakan perulangan.
4. `counter.php` - membaca dan menulis jumlah kunjungan pada `counter.dat`.

Implementasi counter menggunakan penguncian berkas (`flock`) agar pembaruan nilai lebih aman ketika ada beberapa permintaan bersamaan.

## Menjalankan

Nyalakan Apache XAMPP, kemudian buka:

```text
http://localhost/pemrograman%20web%202/pertemuan%205/
```

Pastikan PHP/Apache memiliki izin tulis pada `counter.dat`. Folder ini tidak menggunakan database.
