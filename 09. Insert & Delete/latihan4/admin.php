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
        .aksi {
            text-decoration: none
        }
        .aksi {
            text-decoration: underline;
        }
        .edit {
            color: royalblue;
        }
        .delete {
            color: red;
        }
        .add {
            color: green;
        }
        .tdcenter {
            text-align: center;
        }
        img {
            width: 45px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="aksi add">Tambah Mahasiswa</a><br><br>

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

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td class="tdcenter"><?= $i; ?></td>
            <td class="tdcenter"><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="tdcenter"><?= $mhs['nim']; ?></td>
            <td class="tdcenter"><?= $mhs['prodi']; ?></td>
            <td class="tdcenter"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td>
                <a href="" class="aksi edit">Edit</a> |
                <a href="hapus.php?id=<?= $mhs['id']; ?>" class="aksi delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>