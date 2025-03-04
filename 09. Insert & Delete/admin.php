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
            padding: 3px 6px;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        .edit {
            background-color: royalblue;
        }
        .delete {
            background-color: red;
        }
        .add {
            background-color: orange;
        }
        .tdCenter {
            text-align: center;
        }
        img {
            width: 45px;
            border-radius: 5px;
        }
        th {
            background-color: #FFF;
        }
        tr:nth-child(even) {
            background-color: #EEE;
        }
        tr:nth-child(odd):hover {
            background-color: #DDD;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="aksi add"><i class="fa-solid fa-user-plus"></i> Tambah Mahasiswa</a><br><br>

    <table border="0" cellspacing="0" cellpadding="10">
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
            <td class="tdCenter"><img src="../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="tdCenter"><?= $mhs['nim']; ?></td>
            <td class="tdCenter"><?= $mhs['prodi']; ?></td>
            <td class="tdCenter"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td class="tdCenter">
                <a href="" class="aksi edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="aksi delete"><i class="fa-regular fa-trash-can"></i> Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>