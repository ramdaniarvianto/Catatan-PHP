<?php 
date_default_timezone_set('Asia/Jakarta');
function greet($nama) {
    $jam = date("H"); // mendapatkan jam dalam format 24 jam

    if ($jam >= 5 && $jam < 12) {
        $waktu = "Pagi";
    } else if ($jam >= 12 && $jam < 15) {
        $waktu = "Siang";
    } elseif ($jam >= 15 && $jam < 18) {
        $waktu = "Sore";
    } else {
        $waktu = "Malam";
    }

    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo greet("Ramdani Arvianto"); ?></h1>
</body>
</html>