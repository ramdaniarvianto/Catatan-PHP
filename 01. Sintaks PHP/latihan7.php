<?php 
$namaDepan = "Ramdani";
$namaBelakang = "Arvianto";
$namaLengkap = "$namaDepan $namaBelakang";

function jumlahIkan( $nilaiAwal, $nilaiAkhir, $objek ) {
    $hasil = "";
    for( $i = $nilaiAwal; $i <= $nilaiAkhir; $i++ ) {
        $hasil .= "$i $objek <br>";
    }
    return $hasil;
}

function orangKeluar( $nilaiAwal, $nilaiAkhir, $orang ) {
    while ( $nilaiAwal <= $nilaiAkhir ) {
        echo "$nilaiAwal $orang" . "<br>";
        $nilaiAwal++;
    }
}

$fruits = ["apel", "belimbing", "ceri", "duku"];
foreach( $fruits as $index => $buah ) { 
    echo "Buah ke " . ($index + 1) . " itu buah $buah <br>";
}

// $fruits = ["apel", "belimbing", "ceri", "duku"];
// $index = 1;
// foreach( $fruits as $buah ) { 
//     echo "Buah ke $index itu buah $buah <br>";
//     $index++;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $namaLengkap; ?></p>

    <p><?= jumlahIkan(1, 10, "Tongkol"); ?></p>

    <p><?= orangKeluar(1, 5, "Orang"); ?></p>
</body>
</html>