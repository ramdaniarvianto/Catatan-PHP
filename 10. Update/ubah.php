<?php 
require "functions.php";

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if ( isset($_POST['submit']) ) {
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial'
        }
        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST">
        <table>
            <input type="hidden" name="id" id="id" value="<?= $mhs['id']; ?>">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="text" name="nim" id="nim" value="<?= $mhs['nim']; ?>"></td>
            </tr>
            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td><input type="text" name="prodi" id="prodi" value="<?= $mhs['prodi']; ?>"></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td><input type="text" name="semester" id="semester" value="<?= $mhs['semester']; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" name="email" id="email" value="<?= $mhs['email']; ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td><input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Ubah data Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>