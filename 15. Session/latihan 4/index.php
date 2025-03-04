<?php 
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

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
            font-family: 'Arial'
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
        .right > a {
            padding: 8px 10px;
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
        .tambah:hover::after {
            content: "+";
            padding-left: 5px;
        }
        .ubah {
            color: royalblue;
        }
        .hapus {
            color: red;
        }

        button, input {
            padding: 5px 10px;
        }
        button {
            border: none;
            outline: 2px solid slateblue;
            color: white;
            background-color: slateblue;
        }
        input {
            border: none;
            outline: 2px solid #CCC;
        }
        input:focus {
            outline: 2px solid slateblue;
        }

        table {
            width: 100%;
            border-collapse: collapse
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
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <h1>Daftar Mahasiswa</h1>

    <div class="search">
        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" placeholder="Cari data mahasiswa..." size="50" autocomplete="off" autofocus>
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>

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
                    <a href="hapus.php?id=<?= $mhs['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Delete</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>