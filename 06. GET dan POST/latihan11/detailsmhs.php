<?php 
$today = date("l, d M Y");

date_default_timezone_set("Asia/Jakarta");
$hour = date("H:i:s");

function greet($nama) {
    date_default_timezone_set("Asia/Jakarta");
    $hour = date("H");

    if ($hour >= 3 && $hour < 12) {
        $time = "pagi";
    } elseif ($hour >= 12 && $hour < 15) {
        $time = "siang";
    } elseif ($hour >= 15 && $hour < 19) {
        $time = "sore";
    } else {
        $time = "malam";
    }

    return "Halo, selamat $time $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial';
        }
        a {
            color: black;
            text-decoration: none;
        }
        a:hover {
            color: red;
            text-decoration: underline;
        }
        .tdCenter {
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td><?= $today; ?></td>
            <td><?= $hour; ?></td>
        </tr>
    </table>

    <h1><?= greet($_GET['nama']); ?></h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Email</th>
        </tr>

        <tr>
            <td><?= $_GET['nama'] ?></td>
            <td class="tdCenter"><?= $_GET['nim'] ?></td>
            <td class="tdCenter"><?= $_GET['prodi'] ?></td>
            <td class="tdCenter"><?= $_GET['semester'] ?></td>
            <td><?= $_GET['email'] ?></td>
        </tr>
    </table>

    <p>< <a href="daftarmhs.php">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>