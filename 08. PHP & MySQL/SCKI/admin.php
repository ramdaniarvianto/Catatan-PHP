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
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Arial';
        }

        .aksi {
            text-decoration: none;
        }
        .aksi:hover {
            text-decoration: underline;
        }
        .edit {
            color: royalblue;
        }
        .delete {
            color: red;
        }
        img {
            width: 45px;
            border-radius: 5px
        }
        .tdCenter {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td class="tdCenter"><?= $id; ?></td>
            <td class="tdCenter"><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="tdCenter"><?= $mhs['nim']; ?></td>
            <td class="tdCenter"><?= $mhs['prodi']; ?></td>
            <td class="tdCenter"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email'] ?></td>
            <td class="tdCenter">
                <a href="" class="aksi edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a> |
                <a href="" class="aksi delete"><i class="fa-regular fa-trash-can"></i> Delete</a>
            </td>
        </tr>
        <?php $id++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>