<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil( $jumlahData / $jumlahDataPerHalaman );
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

        main {
            margin: 1rem 3rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .left {
            display: flex;
            gap: 3rem;
        }

        a {
            color: black;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout {
            padding: 10px;
            color: white;
            background-color: black;
        }
        .logout:hover {
            text-decoration: none;
            background-color: #333;
        }
        .tambah:hover::after {
            content: " +";
            text-decoration: underline;
        }
        .hapus {
            color: red;
        }

        button, input {
            padding: 10px;
            border: none;
        }
        button {
            outline: 2px solid black;
            color: white;
            background-color: black;
            margin-left: 2px;
        }
        button:hover {
            outline: 2px solid #333;
            background-color: #333;
        }
        input {
            outline: 2px solid #aaa;
        }
        input:focus {
            outline: 2px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr:nth-child(even) {
            background-color: #eee;
        }
        th, td {
            padding: 10px;
            border: 1px solid #666;
        }
        th {
            color: white;
            background-color: black;
        }

        img {
            width: 50px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
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
            <input type="text" name="keyword" id="keyword" placeholder="Cari data mahasiswa..." size="50" autocomplete="off" autofocus>
            <button type="submit" name="cari">Cari</button>
        </form>

        <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

        <?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endfor; ?>

        <br><br>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
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
    </main>
</body>
</html>