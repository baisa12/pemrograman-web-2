<?php
date_default_timezone_set("Asia/Jakarta");

$hariSistem = date("l");
$daftarHari = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$namaHari = $_GET["hari"] ?? $hariSistem;

if (!in_array($namaHari, $daftarHari, true)) {
    $namaHari = $hariSistem;
}

switch ($namaHari) {
    case "Sunday":
        $hariIndonesia = "Minggu";
        $agenda = "Waktu untuk istirahat";
        break;
    case "Monday":
        $hariIndonesia = "Senin";
        $agenda = "Meeting awal minggu jam 08.00";
        break;
    case "Tuesday":
        $hariIndonesia = "Selasa";
        $agenda = "Pembukaan Workshop Diklat";
        break;
    case "Wednesday":
        $hariIndonesia = "Rabu";
        $agenda = "Seminar Launching Windows Vista di JHCC";
        break;
    case "Thursday":
        $hariIndonesia = "Kamis";
        $agenda = "Pertemuan dengan Mahasiswa";
        break;
    case "Friday":
        $hariIndonesia = "Jumat";
        $agenda = "Jogging bersama";
        break;
    default:
        $hariIndonesia = "Sabtu";
        $agenda = "Survei harga ke Dusit, Mangga Dua";
        break;
}

$terjemahanHari = [
    "Sunday" => "Minggu",
    "Monday" => "Senin",
    "Tuesday" => "Selasa",
    "Wednesday" => "Rabu",
    "Thursday" => "Kamis",
    "Friday" => "Jumat",
    "Saturday" => "Sabtu",
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Agenda Hari Ini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <p class="eyebrow">Pertemuan 3 &mdash; Latihan 4</p>
            <h1>Agenda Berdasarkan Hari</h1>
            <p class="intro">Saat halaman pertama kali dibuka, hari diambil otomatis dari waktu Asia/Jakarta. Pilihan di bawah dapat digunakan untuk mencoba setiap <code>case</code>.</p>

            <form method="get" action="" class="form-grid">
                <label for="hari">Pilih hari untuk simulasi</label>
                <select id="hari" name="hari">
                    <?php foreach ($terjemahanHari as $hariInggris => $hariLokal): ?>
                        <option value="<?php echo $hariInggris; ?>" <?php echo $namaHari === $hariInggris ? "selected" : ""; ?>>
                            <?php echo $hariLokal; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Tampilkan Agenda</button>
            </form>

            <div class="day-card">
                <span>Hari <?php echo $namaHari === $hariSistem ? "ini" : "pilihan"; ?></span>
                <strong><?php echo $hariIndonesia; ?></strong>
                <p><?php echo $agenda; ?></p>
            </div>

            <p class="note">Tanggal sistem: <?php echo date("d-m-Y"); ?> &mdash; zona waktu Asia/Jakarta.</p>
            <a class="back" href="index.php">&larr; Kembali ke daftar latihan</a>
        </section>
    </main>
</body>
</html>
