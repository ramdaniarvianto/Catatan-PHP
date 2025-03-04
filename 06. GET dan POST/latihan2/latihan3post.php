<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- 
    Kalau action="" KOSONG, akan di kirim ke halaman itu sendiri, latihan3post.php
    Kalau method="" KOSONG, default-nya GET
    -->
    <form action="latihan4post.php" method="POST">
        Masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="sumbit" name="submit">Kirim</button>
    </form>

    <?php if ( isset($_POST["submit"]) ) : ?>
        <h1>Selamat datang, <?= $_POST["nama"]; ?>!</h1>
    <?php endif; ?>
</body>
</html>