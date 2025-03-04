<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        * {
            font-family: 'Arial';
        }
        img {
            width: 50px;
            border-radius: 2.5px;
        }
        table .td-center {
            text-align: center;
        }
        a.edit {
            color: royalblue;
        }
        a.hapus {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ( $mahasiswa as $mhs ) : ?>
        <tr>
            <td class="td-center"><?= $i; ?></td>
            <td class="td-center"><img src="image/<?php echo $mhs['gambar'];?>"></td>
            <td><?= $mhs['nama']; ?></td>
            <td class="td-center"><?= $mhs['nim']; ?></td>
            <td><?= $mhs['prodi']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td class="td-center">
                <a class="edit" href="">Edit</a> |
                <a class="hapus" href="">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>