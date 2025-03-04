<?php 
if (
    !isset($_GET['nama']) ||
    !isset($_GET['nim']) ||
    !isset($_GET['prodi']) ||
    !isset($_GET['semester']) ||
    !isset($_GET['email']) ||
    !isset($_GET['gambar'])
) {
    header("Location: latihan6geterror.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 50px;
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <h1><?= $_GET['nama']; ?></h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Gambar</th>
        </tr>
        <tr>
            <td><?= $_GET['nama']; ?></td>
            <td><?= $_GET['nim']; ?></td>
            <td><?= $_GET['prodi']; ?></td>
            <td align="center"><?= $_GET['semester']; ?></td>
            <td><?= $_GET['email']; ?></td>
            <td align="center"><img src="../image/<?= $_GET['gambar']; ?>"></td>
        </tr>
    </table>

    <br>
    <p>< <a href="latihan5get.php">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>