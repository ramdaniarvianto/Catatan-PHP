<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nama_depan = 'Ramdani';
    $nama_belakang = 'Arvianto';
    $nama_lengkap = "$nama_depan $nama_belakang";
    function greeting($nama_lengkap) {
        return "Halo, selamat datang <i>$nama_lengkap</i>";
    }

    function pengulangan($awal, $akhir, $objek) {
        while ($awal <= $akhir) {
            echo "$awal $objek<br>";
            $awal++;
        }
    }

    function penjumlahan($nilaiA, $nilaiB) {
        $nilai1 = $nilaiA;
        $nilai2 = $nilaiB;
        $result = $nilai1 + $nilai2;

        return "$nilai1 + $nilai2 = $result";
    }
    ?>

    <h1><?= greeting("Ramdani Arvianto"); ?></h1>

    <p><?= pengulangan(1, 10, "Tongkol"); ?></p>

    <p><?= penjumlahan(123, 123); ?></p>
</body>
</html>