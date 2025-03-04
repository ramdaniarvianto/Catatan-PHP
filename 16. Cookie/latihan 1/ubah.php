<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

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
                alert('Data tidak diubah!');
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
    <title>SCKI | Ubah Data</title>
    <style>
        * {
            font-family: 'Arial';
        }

        a {
            text-decoration: none;
            color: slateblue;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 5px 10px;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }

        img {
            width: 60px;
        }
    </style>
</head>
<body>
    <p><a href="admin.php">Kembali</a></p>

    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="hidden" name="id" id="id" autocomplete="off" value="<?= $mhs['id']; ?>"></td>
                <td><input type="hidden" name="gambarLama" id="gambarLama" autocomplete="off" value="<?= $mhs['gambar']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>: <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>: <input type="text" name="nim" id="nim" value="<?= $mhs['nim']; ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>: <input type="text" name="prodi" id="prodi" value="<?= $mhs['prodi']; ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td>: <input type="text" name="semester" id="semester" value="<?= $mhs['semester']; ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>: <input type="text" name="email" id="email" value="<?= $mhs['email']; ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><img src="../../.image/<?= $mhs['gambar'] ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>: <input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Ubah Data Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>