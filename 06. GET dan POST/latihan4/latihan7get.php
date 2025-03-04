<?php 
$mahasiswa = [
    [
        "nama" => "Ramdani Arvianto",
        "nim" => 2111011001,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "ramdaniarvianto@gmail.com"
    ],
    [
        "nama" => "Hadi Gunawan",
        "nim" => 2111011008,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "hadigunawan@gmail.com"
    ],
    [
        "nama" => "Alief Prima Gani",
        "nim" => 2111011009,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "aliefprimagani@gmail.com"
    ],
    [
        "nama" => "Muhammad Syazidan",
        "nim" => 2111011006,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "muhammadsyazidan@gmail.com"
    ],
    [
        "nama" => "Irgy Ahmad Fahrezy",
        "nim" => 2111011005,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "irgyahmadfahrezy@gmail.com"
    ],
    [
        "nama" => "Faldo Satria",
        "nim" => 2111011004,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "faldosatria@gmail.com"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial';
        }

        ul {
            list-style-type: decimal;
        }

        a {
            text-decoration: none;
            color: black;
        }
        a:hover {
            text-decoration: underline;
            color: royalblue;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan8get.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&prodi=<?= $mhs['prodi']; ?>&semester=<?= $mhs['semester']; ?>&email=<?= $mhs['email']; ?>"><?= $mhs['nama']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>