<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak ditambah!');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Tambah Mahasiswa</title>
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            margin: 2rem 3rem;
        }
        
        a {
            color: slateblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .kembali:hover {
            text-decoration: none;
        }
        .kembali i {
            margin-right: 5px;
            transition: .2s ease-in-out;
        }
        .kembali:hover > i {
            margin-right: 0px;
        }

        button {
            border: none;
            padding: 10px;
            color: white;
            background-color: slateblue;
        }
        button:hover {
            background-color: #5A6ACDDD;
        }
    </style>
</head>
<body>
    <a href="index.php" class="kembali"><i class="fa-solid fa-caret-left"></i> Kembali</a>

    <h1>Tambah Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" name="nama" id="nama" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" name="nim" id="nim" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>: <input type="text" name="prodi" id="prodi" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td>: <input type="text" name="semester" id="semester" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>: <input type="text" name="email" id="email" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>: <input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Tambah Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>