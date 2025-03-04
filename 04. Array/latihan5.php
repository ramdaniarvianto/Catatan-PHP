<?php 
$makans = [
    [
        "Bakso",
        "Rp. 45.000"
    ],
    [
        "Mie Ayam",
        "Rp. 30.000"
    ],
    [
        "Nasi Kebuli",
        "Rp. 68.000"
    ],
    [
        "Nasi Padang",
        "Rp. 50.000"
    ],
    [
        "Bebek Carok",
        "Rp. 75.000"
    ],
    [
        "Ayam Bakar",
        "Rp. 40.000"
    ],
    [
        "Air Mineral",
        "Rp. 8.000"
    ],
    [
        "Teh Dingin",
        "Rp. 10.000"
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
    <?php foreach ($makans as $makan) : ?>
        <?php foreach ($makan as $mkn) : ?>
            <p><?= $mkn ?></p>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>