<?php 
$mahasiswa = [
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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan6get.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&prodi=<?= $mhs['prodi']; ?>&semester=<?= $mhs['semester']; ?>&email=<?= $mhs['email']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>