<?php 
/*
Pengulangan pada Array
|   - for
|   - foreach
*/
$angka = [1,2,3,10,20,30,100,200,300,1000,2000,3000,10000,20000,30000];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Array</title>
    <style>
        .kotak {
            float: left;
            margin: 5px;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            color: #FFF;
            background-color: royalblue;
            border-radius: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- Menggunakan for -->
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- Menggunakan foreach -->
    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>