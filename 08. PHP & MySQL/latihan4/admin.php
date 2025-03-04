<?php 
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Admin</title>
    <style>
        * {
            font-family: 'Arial';
        }
        img {
            width: 45px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Gambar</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $id; ?></td>
            <td><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['prodi']; ?></td>
            <td><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
        </tr>
        <?php $id++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>