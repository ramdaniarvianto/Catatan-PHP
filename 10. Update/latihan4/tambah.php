<?php 
require "functions.php";

if ( isset($_POST['submit']) ) {
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak ditambah!');
                document.location.href = 'admin.php';
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
            font-family: 'Arial';
        }

        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>: <input type="text" name="prodi" id="prodi"></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td>: <input type="text" name="semester" id="semester"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>: <input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>: <input type="tetx" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Tambah Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>