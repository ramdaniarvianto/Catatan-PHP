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
    <style>
        * {
            font-family: "Arial";
        }

        main {
            margin: 1rem 3rem;
        }

        a {
            color: black;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            border: none;
            color: white;
            background-color: black;
            padding: 10px;
        }
        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <main>
        <p><a href="index.php">Kembali</a></p>

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
    </main>
</body>
</html>