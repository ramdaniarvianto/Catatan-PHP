<?php 
$beda = [1, true, "Ramdani", "Arvianto"];

$nama = ["Ramdani", "Arvianto", 21110110007, "Teknik Informatika"];

$mahasiswas = [
    [
        "Ramdani Arvianto",
        21110110007,
        "Teknik Informatika",
        "Semester 7"
    ],
    [
        "Ravon",
        21110110008,
        "Sistem Informasi",
        "Semester 8"
    ],
    [
        "Ramon",
        21110110009,
        "Bisnis Digital",
        "Semester 7"
    ],
    [
        "Rakilla",
        21110110010,
        "Teknik Informatika",
        "Semester 8"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($beda as $bd) : ?>
        <p><?= $bd; ?></p>
    <?php endforeach; ?>

    <br><hr><br>

    <?php foreach ($nama as $nm) : ?>
        <p><?= $nm; ?></p>
    <?php endforeach; ?>

    <br><hr><br>

    <?php foreach ($mahasiswas as $mahasiswa) : ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <p><?= $mhs; ?></p>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>