<?php
    // Array Numeric
    $mahasiswa = [
        ["Ramdani Arvianto", "21110110007", "Teknik Informatiak", "ramdaniarvianto1@gmail.com"],
        ["Ravon Arvianto", "21110110008", "Sistem Informasi", "ravonarvianto1@gmail.com"],
        ["Ramon Arvianto", "21110110009", "Bisnis Digital", "ramonarvianto1@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 | Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama: <?php echo $mhs[0]; ?></li>
        <li>NIM: <?php echo $mhs[1]; ?></li>
        <li>Prodi: <?php echo $mhs[2]; ?></li>
        <li>Email: <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>