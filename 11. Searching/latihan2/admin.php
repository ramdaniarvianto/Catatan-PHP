<?php 
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

if ( isset($_POST['cari']) ) {
    $mahasiswa = cari($_POST['keyword']);
}
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

        input, button {
            padding: 4px 10px;
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

    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="text" name="keyword" id="keyword" size="50" placeholder="Cari mahasiswa..." autofocus autocomplete="off"> <button type="submit" name="cari">Cari</button></td>
            </tr>
        </table>
    </form>

    <p><a class="aksi tambah" href="tambah.php"><i class="fa-solid fa-user-plus"></i> Tambah Mahasiswa</a></p>

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
            <td><?= $mhs['email'] ?></td>
            <td class="tdcenter">
                <a class="aksi ubah" href="edit.php?id=<?= $mhs['id']; ?>"><i class="fa-regular fa-pen-to-square"></i> Edit</a> &nbsp;
                <a class="aksi hapus" href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-regular fa-trash-can"></i> Delete</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>