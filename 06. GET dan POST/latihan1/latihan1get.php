<?php 
// $_GET
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        * {
            font-family: 'Arial';
        }
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswas as $mahasiswa) : ?>
            <li>
                <a href="latihan2get.php?nama=<?php echo $mahasiswa["nama"]; ?>&nim=<?php echo $mahasiswa["nim"]; ?>&prodi=<?php echo $mahasiswa["prodi"]; ?>&email=<?php echo $mahasiswa["email"]; ?>&gambar=<?php echo $mahasiswa["gambar"]; ?>"><?php echo $mahasiswa["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>