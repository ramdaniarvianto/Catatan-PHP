<?php 
$today = date("l, d M Y");

function greet($nama) {
    date_default_timezone_set("Asia/Jakarta");
    $hour = date("H");
    if ( $hour >= 5 && $hour < 12 ) {
        $waktu = "pagi";
    } else if ( $hour >= 12 && $hour < 15 ) {
        $waktu = "siang";
    } else if ( $hour >= 15 && $hour < 19 ) {
        $waktu = "sore";
    } else {
        $waktu = "malam";
    }

    return "Halo, selamat $waktu $nama.";
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $today; ?></p>

    <h1><?= greet("Ramdani Arvianto"); ?></h1>
</body>
</html>