<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            cursor: default;
            float: left;
            margin: 3px;
            width: 30px;
            height: 30px;
            color: white;
            background-color: orange;
            text-align: center;
            line-height: 30px;
            border-radius: 3px;
            transition: .5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: orangered;
        }
        
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $numb) : ?>
            <div class="kotak">
                <?php echo $numb; ?>
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>