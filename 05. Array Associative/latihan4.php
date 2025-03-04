<?php 
$schools = [
    [
        "Sekolah" => "TK AL-HUSNIYAH",
        "Lama" => "2 Tahun"
    ],
    [
        "Sekolah" => "SDN KLENDER 20 PAGI",
        "Lama" => "6 Tahun"
    ],
    [
        "Sekolah" => "SMP NEGERI 198 JAKARTA",
        "Lama" => "3 Tahun"
    ],
    [
        "Sekolah" => "SMK TERATAI PUTIH JAKARTA",
        "Lama" => "3 Tahun"
    ]
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
    <?php foreach ($schools as $school) : ?>
        <ul>
            <li><?= $school['Sekolah']; ?></li>
            <li><?= $school['Lama']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>