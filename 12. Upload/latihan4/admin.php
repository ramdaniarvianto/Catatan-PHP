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
        input,button{
            padding: 5px 10px;
        }
        a{
            text-decoration: none;
        }
        a:hover{
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
</head>
<body>
    <table>
        <table>
            <td><?= $today; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?= $time; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?= greet(); ?></td>
        </table>
    </table>

    <h1>Daftar Mahasiswa</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <input type="text" name="keyword" id="keyword" size="50" placeholder="Cari data mahasiswa..." autocomplete="off" autofocus>
                    <button type="submit" name="cari">Cari</button>
                </td>
            </tr>
        </table>
    </form>

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
            <th>Gambar</th>
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