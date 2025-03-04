<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function pengulangan($awal, $akhir, $objek) {
        while ($awal <= $akhir) {
            echo "$awal $objek<br>";
            $awal++;
        };
    };

    function berhitung($A, $B) {
        do {
            echo "$A<br>";
            $A++;
        } while ($A <= $B);
    };

    function urut($nilaiawal, $nilaiakhir, $objek) {
        for ($nilaiawal; $nilaiawal <= $nilaiakhir; $nilaiawal++) {
            echo "$nilaiawal $objek<br>";
        };
    };

    function pengkondisian($kondisiAwal, $kondisiAkhir) {
        if ($kondisiAwal > $kondisiAkhir) {
            echo "$kondisiAwal lebih besar dari $kondisiAkhir";
        } else if ($kondisiAwal < $kondisiAkhir) {
            echo "$kondisiAwal lebih kecil dari $kondisiAkhir";
        } else {
            echo "$kondisiAwal sama dengan $kondisiAkhir";
        }
    };
    ?>

    <p><?= pengulangan(1, 10, "Tongkol") ?></p>

    <p><?= berhitung(0, 9) ?></p>

    <p><?= urut(10, 20, "Orang sudah masuk"); ?></p>

    <p><?= pengkondisian(20, 20) ?></p>
</body>
</html>