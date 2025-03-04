<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            color: white;
            background-color: orange;
        }

        .baris-warna {
            color: white;
            background-color: orangered;
        }

    </style>
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    $tongkol = 1;
    do {
    ?>
        <p><?= $tongkol; ?> Tongkol</p>
    <?php 
    $tongkol++;
    } while ($tongkol <= 10) ?>

    <br><br>

    <?php 
    $militer = 1;
    while ($militer <= 20) :
    ?>
        <?= $militer ?> <i class="fa-solid fa-person-rifle">&nbsp;&nbsp;&nbsp;&nbsp;</i>
    <?php 
    $militer++;
    endwhile; ?>

    <br><br><br><br>

    <table border="1" cellpadding="15" cellspacing="0">
        <?php for ($baris = 1; $baris <= 5; $baris++) : ?>
            <?php if ($baris % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr class="baris-warna">
            <?php endif; ?>
                <?php for ($kolom = 1; $kolom <= 5; $kolom++) : ?>
                    <td>
                        <?= "$baris,$kolom"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br><br>
</body>
</html>