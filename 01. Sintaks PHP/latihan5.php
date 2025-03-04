<?php 
$namaDepan = "Ramdani";
$namaBelakang = "Arvianto";
$namaLengkap = "$namaDepan $namaBelakang";

function greet($nama) {
    return "Halo, $nama";
}

function tidur($a, $b, $c) {
    for ( $i = $a; $i <= $b; $i++ ) {
        echo "$i $c <br>";
    }
}

function ulang($awal, $akhir, $apa) {
    $hasil = [];
    for ( $i = $awal; $i <= $akhir; $i++ ) {
        $hasil[] = "$i $apa" . "<br>";
    }
    return implode($hasil);
}

function lagi($nilaiAwal, $nilaiAkhir, $objek) {
    $hasil = "";
    for ( $i = $nilaiAwal; $i <= $nilaiAkhir; $i++ ) {
        $hasil .= "$i $objek <br>";
    }
    return $hasil;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
    <style>
        * {
            font-size: 1.2rem;
            font-weight: normal;
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <h1><?= $namaLengkap ?></h1>

    <h1><?= greet($namaLengkap); ?></h1>

    <h1><?= ulang(1, 10, "Tongkol"); ?></h1>

    <h1><?= lagi(1, 20, "Angka"); ?></h1>

    <h1><?= tidur(1, 5, "Domba"); ?></h1>
</body>
</html>