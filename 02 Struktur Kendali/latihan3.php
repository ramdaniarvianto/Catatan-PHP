<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 While</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        $iA = 1;
        while ($iA <= 3) :
        ?>
        <tr>
            <?php 
            $iB = 1;
            while ($iB <= 5) :
            ?>
            <td><?php echo "$iA,$iB"; ?></td>
            <?php $iB++; ?>
            <?php endwhile; ?>
        </tr>
        <?php $iA++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>