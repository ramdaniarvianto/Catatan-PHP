<?php 
$peoples = [
    [
        "Nama" => "Ramdani Arvianto",
        "Umur" => "22 Tahun",
        "Jenis Kelamin" => "Laki-laki"
    ],
    [
        "Nama" => "Ravon",
        "Umur" => "21 Tahun",
        "Jenis Kelamin" => "Laki-laki"
    ],
    [
        "Nama" => "Ramon",
        "Umur" => "22 Tahun",
        "Jenis Kelamin" => "Laki-laki"
    ],
    [
        "Nama" => "Raqila",
        "Umur" => "22 Tahun",
        "Jenis Kelamin" => "Perempuan"
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
    <?php foreach ($peoples as $people) : ?>
        <ul>
            <li><?= $people['Nama'] ?></li>
            <li><?= $people['Umur'] ?></li>
            <li><?= $people['Jenis Kelamin'] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>