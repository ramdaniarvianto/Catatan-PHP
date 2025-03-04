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
            text-decoration: none;
        }
        .aksi:hover {
            text-decoration: underline;
        }
        .tambah {
            color: green;
        }
        .ubah {
            color: royalblue;
        }
        .hapus {
            color: red;
        }

        .tdcenter {
            text-align: center;
        }

        img {
            width: 45px;
            border-radius: 4px;
        }
    </style>
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <table>
        <tr>
            <td><i class="fa-regular fa-calendar"></i> <?= $today; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><i class="fa-regular fa-clock"></i> <?= $time; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><i class="fa-regular fa-user"></i> <?= greet(); ?></td>
        </tr>
    </table>

    <h1>Daftar Mahasiswa</h1>

    <p><a href="tambah.php" class="aksi tambah"><i class="fa-solid fa-user-plus"></i> Tambah Mahasiswa</a></p>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td class="tdcenter"><?= $no; ?></td>
            <td class="tdcenter"><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="tdcenter"><?= $mhs['nim']; ?></td>
            <td class="tdcenter"><?= $mhs['prodi']; ?></td>
            <td class="tdcenter"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td class="tdcenter">
                <a href="ubah.php?id=<?= $mhs['id']; ?>" class="aksi ubah"><i class="fa-regular fa-pen-to-square"></i> Edit</a> &nbsp;
                <a href="hapus.php?id=<?= $mhs['id']; ?>" class="aksi hapus" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-regular fa-trash-can"></i> Delete</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>