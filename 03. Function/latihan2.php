<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function perhitungan($tambahA, $tambahB, $kurangA, $kurangB, $bagiA, $bagiB, $kaliA, $kaliB, $modA, $modB) {
        $tambahA + $tambahB;
        $resultT = $tambahA + $tambahB;
        $kurangA - $kurangB;
        $resultK = $kurangA - $kurangB;
        $bagiA / $bagiB;
        $resultB = $bagiA / $bagiB;
        $kaliA * $kaliB;
        $resultk = $kaliA * $kaliB;
        $modA % $modB;
        $resultM = $modA % $modB;

        echo "$tambahA + $tambahB = $resultT";
        echo "<br>";
        echo "$kurangA - $kurangB = $resultK";
        echo "<br>";
        echo "$bagiA / $bagiB = $resultB";
        echo "<br>";
        echo "$kaliA * $kaliB = $resultk";
        echo "<br>";
        echo "$modA % $modB = $resultM";
    };
    ?>
    <p><?= perhitungan(5,5,10,5,10,5,9,5,10,2); ?></p>
</body>
</html>