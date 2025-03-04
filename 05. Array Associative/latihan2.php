<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <?php
    /*
    Array Associative
    |   - Definisinya sama seperti Array numeric, kecuali
    |   - Key-nya adalah string yang kita buat sendiri
    */
    $mahasiswas = [
        [
            "nama" => "Ramdani Arvianto",
            "nim" => "21110110007",
            "prodi" => "Teknik Informatika",
            "email" => "ramdaniarvianto1@gmail.com",
            "gambar" => "ramdani.jpg"
        ],
        [
            "nama" => "Ravon Arvianto",
            "nim" => "21110110008",
            "prodi" => "Sistem Informasi",
            "email" => "ravonarvianto1@gmail.com",
            "gambar" => "ravon.jpg"
        ],
        [
            "nama" => "Ramon Arvianto",
            "nim" => "21110110009",
            "prodi" => "Bisnis Digital",
            "email" => "ramoniarvianto1@gmail.com",
            "gambar" => "ramon.jpg"
        ],
        [
            "nama" => "Rakilla Arvianto",
            "nim" => "21110110010",
            "prodi" => "Teknik Informatika",
            "email" => "rakillaarvianto1@gmail.com",
            "gambar" => "rakilla.jpg"
        ]
    ];
    ?>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswas as $mahasiswa) : ?>
        <ul>
            <li>
                <img src="image/<?php echo $mahasiswa['gambar'] ?>">
            </li>
            <li>Nama : <?php echo $mahasiswa["nama"]; ?></li>
            <li>NIM : <?php echo $mahasiswa["nim"]; ?></li>
            <li>Prodi : <?php echo $mahasiswa["prodi"]; ?></li>
            <li>Email : <?php echo $mahasiswa["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>