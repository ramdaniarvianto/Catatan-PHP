<?php 
$today = date("l, d M Y");
date_default_timezone_set("Asia/Jakarta");
$hour = date("H:i:s");

function greet($nama) {
    $hour = date("H");
    if ($hour >= 5 && $hour < 12) {
        $time = "pagi";
    } else if ($hour >= 12 && $hour < 15) {
        $time = "siang";
    } else if ($hour >= 15 && $hour < 17) {
        $time = "sore";
    } else {
        $time = "malam";
    }

    return "Halo, selamat $time $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $today; ?></h3>
    <p><?= $hour; ?></p>
    <h1><?= greet("Ramdani Arvianto"); ?></h1>
</body>
</html>