<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nama_depan = "Ramdani";
    $nama_belakang = "Arvianto";
    $nama_lengkap = $nama_depan . ' ' . $nama_belakang;

    function greet($nama) {
        return "<i>Halo, selamat datang $nama</i>";
    };

    function tambah($A,$B) {
        return $A + $B;
    }
    ?>

    <h1>Halo, selamat datang <?= $nama_lengkap ?></h1>

    <?php 
    echo greet("Ramdani Arvianto");

    echo "<br>";
    echo "<br>";

    echo "10 ditambah 20 = " . tambah(10,20);
    ?>  
</body>
</html>