<?php
$today = date("l, d M Y");

date_default_timezone_set("Asia/Jakarta");
$hour = date("H:i:s");

function greet($nama) {
    $hour = date("H");

    if ($hour >= 5 && $hour < 12) {
        $time = "pagi";
    } else if ($hour >= 12 && $hour < 15) {
        $time = "siang";
    } else if ($hour >= 15 && $hour < 17) {
        $time = "sore";
    } else {
        $time = "malam";
    }

    return "Halo, selamat $time $nama";
};

$mahasiswas = [
    [
        "nama" => "Mahasiswa Pertama",
        "nim" => 21110110001,
        "prodi" => "Teknik Informatika",
        "semester" => 1,
        "email" => "mahasiswapertama1@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Kedua",
        "nim" => 21110110002,
        "prodi" => "Teknik Informatika",
        "semester" => 2,
        "email" => "mahasiswakedua2@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Ketiga",
        "nim" => 21110110003,
        "prodi" => "Teknik Informatika",
        "semester" => 3,
        "email" => "mahasiswaketiga3@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Keempat",
        "nim" => 21110110004,
        "prodi" => "Sistem Informasi",
        "semester" => 4,
        "email" => "mahasiswakeempat4@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Kelima",
        "nim" => 21110110005,
        "prodi" => "Teknik Informatika",
        "semester" => 5,
        "email" => "mahasiswakelima5@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Keenam",
        "nim" => 21110110006,
        "prodi" => "Sistem Informasi",
        "semester" => 6,
        "email" => "mahasiswakeenam6@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Ketujuh",
        "nim" => 21110110007,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "mahasiswaketujuh7@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Kedelapan",
        "nim" => 21110110008,
        "prodi" => "Bisnis Digital",
        "semester" => 8,
        "email" => "mahasiswakedelapan8@gmail.com",
        "gambar" => "nopict.jpg"
    ],
    [
        "nama" => "Mahasiswa Kesembilan",
        "nim" => 21110110009,
        "prodi" => "Teknik Informatika",
        "semester" => 9,
        "email" => "mahasiswakesembilan@gmail.com",
        "gambar" => "nopict.jpg"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Arial';
        }
        img {
            width: 60px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h3><?= $today; ?></h3>
    
    <p><?= $hour; ?></p>
    
    <h1><?= greet("Ramdani Arvianto"); ?></h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Gambar</th>
        </tr>
        <?php foreach ($mahasiswas as $mahasiswa) : ?>
            <tr>
                <td><?= $mahasiswa["nama"]; ?></td>
                <td><?= $mahasiswa["nim"]; ?></td>
                <td><?= $mahasiswa["prodi"]; ?></td>
                <td align="center"><?= $mahasiswa["semester"]; ?></td>
                <td><?= $mahasiswa["email"]; ?></td>
                <td align="center"><img src="<?= $mahasiswa["gambar"]; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>