<?php 
require "functions.php";

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if ( isset($_POST['submit']) ) {
    if ( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak diupdate!');
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
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td colspan="2"><input type="hidden" name="id" id="id" value="<?= $mhs['id']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" name="nim" id="nim" value="<?= $mhs['nim']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>: <input type="text" name="prodi" id="prodi" value="<?= $mhs['prodi']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td>: <input type="text" name="semester" id="semester" value="<?= $mhs['semester']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>: <input type="text" name="email" id="email" value="<?= $mhs['email']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>: <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Edit Data Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>