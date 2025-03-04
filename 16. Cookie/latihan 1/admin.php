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
            font-family: 'Arial'
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
            padding: 5px 10px;
            color: white;
            background-color: slateblue;
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

        input, button {
            padding: 5px 10px;
        }
        input {
            border: 2px solid #CCC;
            border-radius: 0;
        }
        input:focus {
            outline: none;
            border: 2px solid slateblue;
        }
        button {
            padding: 5px 10px;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }

        table {
            border: 1px solid black;
        }
        th {
            color: white;
            outline: 1px solid black;
            background-color: black;
        }
        td {
            border: 1px solid black;
            outline: 1px solid black;
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

    <form action="" method="POST" class="search">
        <input type="text" name="keyword" id="keyword" size="50" placeholder="Cari data mahasiswa..." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
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