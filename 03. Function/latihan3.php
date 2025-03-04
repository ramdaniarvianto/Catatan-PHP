<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("Asia/Jakarta");
    $jam = date("H:i:s");
    echo $jam;


    $today = date("l, d M Y");

    function greet($nama) {
        date_default_timezone_set("Asia/Jakarta");
        $jam = date("H");
        if ($jam >= 5 && $jam < 12) {
            $waktu = "pagi";
        } else if ($jam >= 12 && $jam < 15) {
            $waktu = "siang";
        } else if ($jam >= 15 && $jam < 18) {
            $waktu = "sore";
        } else {
            $waktu = "malam";
        }

        return "Halo, selamat $waktu $nama";
    };

    function tongkol($awal, $akhir, $objek) {
        do {
            echo "$awal $objek<br>";
            $awal++;
        } while ($awal <= $akhir);
    };
    ?>

    <p><?= $today; ?></p>

    <h1><?= greet("Ramdani Arvianto"); ?></h1>
    
    <p><?= tongkol(1, 10, "Tongkol"); ?></p>

    <table border="1", cellpadding="10", cellspacing="0">
        <?php
        $baris = 1;
        while ($baris <= 5) : ?>
            <tr>
                <?php for ($kolom = 1; $kolom <= 10; $kolom++) : ?>
                    <td>
                        <?= "$baris, $kolom"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php
        $baris++;
        endwhile;
        ?>
    </table>
</body>
</html>