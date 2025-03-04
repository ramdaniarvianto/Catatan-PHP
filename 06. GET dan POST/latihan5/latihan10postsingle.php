<?php 
    function username($nama) {
        date_default_timezone_set("Asia/Jakarta");
        $hour = date("H");

        if ($hour >= 3 && $hour < 12) {
            $time = "pagi";
        } elseif ($hour >= 12 && $hour < 15) {
            $time = "siang";
        } elseif ($hour >= 15 && $hour < 19) {
            $time = "sore";
        } else {
            $time = "malam";
        }

        return "Halo, selamat $time $nama";
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>

    <?php
    $username = 1;
    while ($username == 1) : ?>
        <?php if ( isset($_POST['submit']) ) : ?>
            <h1><?= username($_POST['username']) ?></h1>
        <?php endif; ?>
    <?php
    $username++;
    endwhile; ?>
</body>
</html>