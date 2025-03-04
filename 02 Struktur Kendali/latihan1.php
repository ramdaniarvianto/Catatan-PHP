<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 For</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ($b = 1; $b <= 3; $b++) {
                echo "<tr>";
                for ($k = 1; $k <= 5; $k++) {
                    echo "<td>$b.$k</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>