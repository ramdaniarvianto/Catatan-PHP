<?php 
if ( 
    !isset($_GET['nama']) || 
    !isset($_GET['nim']) ||
    !isset($_GET['prodi']) ||
    !isset($_GET['semester']) || 
    !isset($_GET['email']) 
) {
    header("Location: 404.php");
}

$today = date('l, d M Y');

date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');

function greet($nama) {
    date_default_timezone_set('Asia/Jakarta');
    $time = date('H');

    if ($time >=4 && $time < 12) {
        $day = 'pagi';
    } elseif ($time >= 12 && $time < 15) {
        $day = 'siang';
    } elseif ($time >= 15 && $time < 19) {
        $day = 'sore';
    } else {
        $day = 'malam';
    }

    return "Halo, selamat $day $nama";
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
    </style>
</head>
<body>
    <table>
        <tr>
            <td><?= $today; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?= $time; ?></td>
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
            <td><?= $_GET['nama']; ?></td>
            <td><?= $_GET['nim']; ?></td>
            <td><?= $_GET['prodi']; ?></td>
            <td style="text-align: center;"><?= $_GET['semester']; ?></td>
            <td><?= $_GET['email']; ?></td>
        </tr>
    </table>
</body>
</html>