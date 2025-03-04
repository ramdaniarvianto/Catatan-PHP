<?php 
function sapa($nama) {
    date_default_timezone_set("Asia/Jakarta");
    $time = date("H");

    if ( $time >= 4 && $time < 12 ) {
        $day = "pagi";
    } elseif ( $time >= 12 && $time < 16 ) {
        $day = "siang";
    } elseif ( $time >= 16 && $time < 19 ) {
        $day = "sore";
    } else {
        $day = "malam";
    }

    return "Halo, selamat $day $nama";
}

function pengulangan($nilaiAwal, $nilaiAkhir, $objek) {
    while ( $nilaiAwal <= $nilaiAkhir ) {
        echo "$nilaiAwal $objek" . "<br>";
        $nilaiAwal++;
    }
}

function ulangan($awal, $akhir, $objek) {
    $hasil = [];
    for ( $i = $awal; $i <= $akhir; $i++ ) {
        $hasil[] = "$i $objek <br>";
    }
    return implode($hasil);
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
    <p><?= sapa("Ramdani Arvianto"); ?></p>

    <p><?= pengulangan(1, 10, "tongkol"); ?></p>

    <p><?= ulangan(1, 10, "uang"); ?></p>
</body>
</html>