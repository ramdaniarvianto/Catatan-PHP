<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

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
    <title>SCKI | Daftar Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            padding: 0 2rem;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .left {
            display: flex;
            gap: 2rem;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout {
            color: orangered;
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

        input, button {
            padding: 5px 10px;
        }
        input {
            outline: none;
            border: 2px solid #CCC;
        }
        input:focus {
            border: 2px solid slateblue;
        }
        button {
            cursor: pointer;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }

        img {
            width: 45px;
        }

        .center {
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid black;
        }

        th {
            color: white;
            background-color: black;
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
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
            <input type="text" name="keyword" id="keyword" autocomplete="off" size="50" placeholder="Cari data mahasiswa..." autofocus>
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>

    <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

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