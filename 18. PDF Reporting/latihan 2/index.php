<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
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
            margin: 0 3rem 3rem 3rem;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout {
            padding: 8px 10px;
            color: white;
            background-color: slateblue;
        }
        .logout:hover {
            text-decoration: none;
            background-color: #6A5ACDDD;
        }
        .tambah {
            color: slateblue;
        }
        .tambah:hover {
            text-decoration: none;
        }
        .tambah:hover::after {
            content: " +";
        }
        .ubah {
            color: slateblue;
        }
        .hapus {
            color: red;
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

        input, button {
            padding: 5px 10px;
        }
        input {
            border: none;
            outline: 2px solid #CCC;
        }
        input:focus {
            outline: 2px solid slateblue;
        }
        button {
            border: none;
            outline: 2px solid slateblue;
            color: white;
            background-color: slateblue;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr:nth-child(even) {
            background-color: #EEE;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            color: white;
            background-color: slateblue;
        }

        .center {
            text-align: center;
        }

        img {
            width: 45px;
        }

        .page {
            padding: 4px 8px;
            color: white;
            background-color: slateblue;
        }
        .page-aktif {
            background-color: salmon;
        }
        .arrow {
            padding: 4px 8px;
            background-color: sandybrown;
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

    <form action="" method="POST">
        <input type="text" name="keyword" id="keyword" size="50" placeholder="Cari data mahasiswa..." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

    <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

    <?php if ( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>" class="arrow">&laquo;</a>
    <?php else : ?>
        <a class="arrow">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" class="page page-aktif"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>" class="page"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="arrow">&raquo;</a>
    <?php else : ?>
        <a class="arrow">&raquo;</a>
    <?php endif; ?>

    <br><br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Email</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ( $mahasiswa as $mhs ) : ?>
            <tr>
                <td class="center"><?= $no; ?></td>
                <td class="center"><img src="../../.image/<?= $mhs["gambar"]; ?>"></td>
                <td><?= $mhs["nama"]; ?></td>
                <td class="center"><?= $mhs["nim"]; ?></td>
                <td class="center"><?= $mhs["prodi"]; ?></td>
                <td class="center"><?= $mhs["semester"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td class="center">
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="ubah">Edit</a> &nbsp;
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>