<?php 
// Koneksi ke Database
// Urutan Parameter mysqli_connect:
//  - nama host dari database
//  - username mysql
//  - password mysql
//  - nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel mahasiswa / query data mahasiswa
// Urutan Parameter mysqli_query:
//  - Koneksi
//  - Query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Untuk mengecek error
// if ( !$result ) {
//     echo mysqli_error($conn);
// }

// Ambil data (fetch) mahasiswa dari object result
// Ada 4 cara untuk mengambil data dari object result
//  - mysqli_fetch_row() | mengembalikan array numeric
//  - mysqli_fetch_assoc() | mengembalikan array associative
//  - mysqli_fetch_array() | double, array numeric dan associative
//  - mysqli_fetch_object()

// $mahasiswa = mysqli_fetch_row($result);
// var_dump($mahasiswa);

// $mahasiswa = mysqli_fetch_assoc($result);
// var_dump($mahasiswa);

// $mahasiswa = mysqli_fetch_array($result);
// var_dump($mahasiswa);

// $mahasiswa = mysqli_fetch_object($result);
// var_dump($mahasiswa);
// echo "<br><br>";
// var_dump($mahasiswa->nama);

// while ( $mahasiswa = mysqli_fetch_assoc($result) ) {
//     var_dump($mahasiswa);
// };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        * {
            font-family: 'Arial';
        }
        img {
            width: 50px;
            border-radius: 2.5px;
        }
        table .td-center {
            text-align: center;
        }
        a.edit {
            color: royalblue;
        }
        a.hapus {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1 ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td class="td-center"><?= $i; ?></td>
            <td class="td-center"><img src="image/<?php echo $row['gambar'];?>"></td>
            <td><?= $row['nama']; ?></td>
            <td class="td-center"><?= $row['nim']; ?></td>
            <td><?= $row['prodi']; ?></td>
            <td><?= $row['email']; ?></td>
            <td class="td-center">
                <a class="edit" href="">Edit</a> |
                <a class="hapus" href="">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>