<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 For Cara 2</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($b = 1; $b <= 3; $b++) : ?>
            <tr>
                <?php for ($k = 1; $k <= 5; $k++) : ?>
                    <td><?php echo "$b,$k"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>