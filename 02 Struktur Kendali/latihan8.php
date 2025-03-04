<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }

        .pink {
            color: plum;
        }
    </style>
</head>
<body>
    <?php
    $tongkol = 1;
    while ($tongkol <= 10) : ?>
        <?php if ($tongkol % 2 == 0) : ?>
            <p class="red"><?= "$tongkol Tongkol"; ?></p>
        <?php elseif ($tongkol == 5) : ?>
            <p class="pink"><?= "RAMDANI ARVIANTO"; ?></p>
        <?php else : ?>
            <p><?= "$tongkol Tongkol"; ?></p>
        <?php endif; ?>
    <?php
    $tongkol++;
    endwhile; ?>

    <?= "<br>" ?>
    <?= "<br>" ?>

    <?php 
    $lidi = 1;
    do { ?>
        <p><?= "$lidi Lidi"; ?></p>
    <?php 
    $lidi++;
    } while ($lidi <= 10); ?>

    <?= "<br>" ?>
    <?= "<br>" ?>

    <?php for ($orang = 1; $orang <= 10; $orang++) : ?>
        <p><?= "$orang Orang Masuk"; ?></p>
    <?php endfor ?>
</body>
</html>