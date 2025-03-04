<?php 
$mahasiswa = [
    [
        "Nama" => "Ramdani",
        "NIM" => 21110110007,
        "Prodi" => "Teknik",
        "Semester" => 7,
    ],
    [
        "Nama" => "Arvianto",
        "NIM" => 21110110008,
        "Prodi" => "Informatika",
        "Semester" => 8,
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
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <?php foreach ( $mhs as $m ) : ?>
            <p><?= $m; ?></p>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>