<?php 
session_start();
require "functions.php";

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$pengguna = query("SELECT * FROM pengguna");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Daftar Mahasiswa</title>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            margin: 0 3rem 3rem 3rem;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr:nth-child(even) {
            background-color: #EEE;
        }
        th, td {
            padding: 10px;
            border: 1px solid #CCC;
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
    <p><a href="index.php">Kembali</a></p>

    <h1>Daftar User</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pengguna as $user) : ?>
            <tr>
                <td class="center"><?= $no; ?></td>
                <td><?= $user["username"]; ?></td>
                <td><?= strtoupper($user["password"]); ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>