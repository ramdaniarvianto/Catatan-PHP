<?php 
$mahasiswa = [
    [
        "nama" => "Ramdani Arvianto",
        "nim" => 21110110007,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "ramdaniarvianto@gmail.com"
    ],
    [
        "nama" => "Hadi Gunawan",
        "nim" => 21110110008,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "hadigunawan@gmail.com"
    ],
    [
        "nama" => "Alief Prima Gani",
        "nim" => 21110110009,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "aliefprimagani@gmail.com"
    ],
    [
        "nama" => "Muhammad Syazidan",
        "nim" => 21110110006,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "muhammadsyazidan@gmail.com"
    ],
    [
        "nama" => "Irgy Ahmad Fahrezy",
        "nim" => 21110110005,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "irgyahmadfahrezy@gmail.com"
    ],
    [
        "nama" => "Faldo Satria",
        "nim" => 21110110004,
        "prodi" => "Teknik Informatika",
        "semester" => 7,
        "email" => "faldosatria@gmail.com"
    ]
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

        a {
            color: black;
            text-decoration: none;
        }
        a:hover {
            color: royalblue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ol>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="detailsmhs.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&prodi=<?= $mhs['prodi']; ?>&semester=<?= $mhs['semester']; ?>&email=<?= $mhs['email']; ?>"><?= $mhs['nama']; ?></a>
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>