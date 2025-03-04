<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$totalDataPerhalaman = 5;
$totalData = count(query("SELECT * FROM mahasiswa"));
$totalHalaman = ceil($totalData / $totalDataPerhalaman);
$halAktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
$firstData = ( $totalDataPerhalaman * $halAktif ) - $totalDataPerhalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $firstData, $totalDataPerhalaman");

if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Data Mahasiswa</title>
    <style>
        * {
            font-family: "Arial";
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
        .tambah:hover {
            text-decoration: none;
        }
        .tambah:hover::after {
            content: " +";
        }
        .hapus {
            color: red;
        }

        input, button {
            border: none;
            padding: 10px;
        }
        input {
            outline: 2px solid #888;
        }
        input:hover {
            outline: 2px solid #333;
        }
        input:focus {
            outline: 2px solid black;
        }
        button {
            margin-left: 2px;
            color: white;
            outline: 2px solid black;
            background-color: black;
        }
        button:hover {
            outline: 2px solid #333;
            background-color: #333;
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

        <h1>Data Mahasiswa</h1>

        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" placeholder="Cari data mahasiswa..." size="50" autocomplete="off" autofocus="on">
            <button type="submit" name="cari">Cari</button>
        </form>

        <p><a href="tambah.php" class="tambah">Tambah Mahasiswa</a></p>

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
                <?php $no = $firstData + 1; ?>
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
    </main>
</body>
</html>