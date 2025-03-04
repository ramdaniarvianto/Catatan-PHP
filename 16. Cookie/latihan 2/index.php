<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

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

        body {
            padding: 0 3rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .left {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        .right .logout {
            padding: 8px 10px;
            color: white;
            background-color: slateblue;
        }

        input, button {
            padding: 8px 10px;
        }
        input {
            border: none;
            outline: 2px solid #DDD;
        }
        input:focus {
            outline: 2px solid slateblue;
        }
        button {
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
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

        table {
            width: 100%;
            border: 1px solid black;
        }
        th {
            color: white;
            background-color: slateblue;
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
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
    <nav>
        <div class="left">
            <p><?= $today; ?></p>
            <p><?= $time; ?></p>
            <p><?= greet(); ?></p>
        </div>
        <div class="right">
            <p><a href="logout.php" class="logout">Logout</a></p>
        </div>
    </nav>

    <h1>Daftar Mahasiswa</h1>

    <div class="search">
        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" size="50" autocomplete="off" placeholder="Cari data mahasiswa..." autofocus>
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>

    <p><a href="tambah.php" class="tambah">+ Tambah Mahasiswa</a></p>

    <table cellspacing="0" cellpadding="10">
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
            <td class="center">
                <a href="ubah.php?id=<?= $mhs['id']; ?>" class="ubah">Edit</a> &nbsp;
                <a href="hapus.php?id=<?= $mhs['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>