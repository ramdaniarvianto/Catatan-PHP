<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// $mahasiswa = query("SELECT * FROM mahasiswa");

// Pagination
// Konfigurasi
$jumlahDataPerHalaman = 10;
// $data = mysqli_query($dbconn, "SELECT * FROM mahasiswa");
// $result = mysqli_num_rows($data);
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
    <title>SCKI | Daftar Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            margin: 0 3rem 3rem 3rem;
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
        }
        .tambah {
            color: teal;
        }
        .tambah:hover {
            text-decoration: none;
        }
        .tambah:hover::after {
            content: " +";
        }
        .ubah {
            color: royalblue;
        }
        .hapus {
            color: red;
        }
        .user {
            color: deeppink;
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
            border: 1px solid #CCC;
        }
        th {
            color: white;
            background-color: slateblue;
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
            <p><a href="user.php" class="user">Daftar User</a></p>
        </div>
        <div class="right">
            <p><a href="logout.php" class="logout">Logout</a></p>
        </div>
    </nav>

    <h1>Daftar Mahasiswa</h1>

    <form action="" method="POST">
        <input type="text" name="keyword" id="keyword" placeholder="Cari data mahasiswa..." size="50" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>
    <?php if ( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>" style="padding: 3px 7px;color: white; background-color: slateblue; text-decoration: none;">&laquo;</a>
    <?php else : ?>
        <a style="cursor:default; padding: 3px 7px;color: white; background-color: slateblue; text-decoration: none;">&laquo;</a>
    <?php endif; ?>
    
    <?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if ( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style="padding: 3px 7px;color: white; background-color: teal;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>" style="padding: 3px 7px;color: white; background-color: slateblue; text-decoration: none;">&raquo;</a>
    <?php else : ?>
        <a style="cursor:default; padding: 3px 7px;color: white; background-color: slateblue; text-decoration: none;">&raquo;</a>
    <?php endif; ?>
        

    <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $awalData + 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td class="center"><?= $no; ?></td>
                <td class="center"><img src="../../.image/<?= $mhs["gambar"]; ?>"></td>
                <td><?= $mhs["nama"]; ?></td>
                <td class="center"><?= $mhs["nim"]; ?></td>
                <td class="center"><?= $mhs["prodi"]; ?></td>
                <td class="center"><?= $mhs["semester"]; ?></td>
                <td><?= $mhs["email"] ?></td>
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