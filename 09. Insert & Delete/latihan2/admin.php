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
        .tdCenter {
            text-align: center;
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
        .add {
            color: green;
        }
        img {
            width: 45px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="aksi add"><i class="fa-solid fa-user-plus"></i> Tambah Mahasiswa</a><br><br>

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
            <td class="tdCenter"><?= $i; ?></td>
            <td class="tdCenter"><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama'] ?></td>
            <td class="tdCenter"><?= $mhs['nim']; ?></td>
            <td class="tdCenter"><?= $mhs['prodi']; ?></td>
            <td class="tdCenter"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td class="tdCenter">
                <a href="" class="aksi edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a> |
                <a href="hapus.php?id=<?= $mhs['id']; ?>" class="aksi delete" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-regular fa-trash-can"></i> Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>