<?php 
require 'functions.php';

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

        button, input {
            padding: 5px 10px;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .tambah {
            color: teal;
        }
        .ubah {
            color: royalblue;
        }
        .hapus {
            color: red;
        }

        img {
            width: 45px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td><?= $today; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?= $time; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?= greet(); ?></td>
        </tr>
    </table>
    
    <h1>Daftar Mahasiswa</h1>

    <table>
        <form action="" method="POST">
            <tr>
                <td>
                    <input type="text" name="keyword" id="keyword" placeholder="Cari data mahasiswa..." size="50" autocomplete="off" autofocus>
                    <button type="submit" name="cari">Cari</button>
                </td>
            </tr>
        </form>
    </table>

    <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

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
            <td class="center"><?= $no; ?></td>
            <td class="center"><img src="../../.image/<?= $mhs['gambar']; ?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="center"><?= $mhs['nim']; ?></td>
            <td class="center"><?= $mhs['prodi']; ?></td>
            <td class="center"><?= $mhs['semester']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $mhs['id']; ?>" class="ubah">Edit</a> &nbsp;
                <a href="hapus.php?id=<?= $mhs['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>