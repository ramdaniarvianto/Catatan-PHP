<?php 
// Cek apakah tidak ada data di $_GET
// function isset() digunakan untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum
if ( 
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["prodi"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])
) {
    // redirect: memindahkan user dari sebuah halaman ke halaman lain
    header("Location: latihan1get.php"); // memaksa user kembali ke halaman awal
    exit; // agar script di bawahnya tidak di eksekusi
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        * {
            font-family: 'Arial';
            list-style: none;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        img {
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <ul>
        <li>
            <img src="../image/<?php echo $_GET["gambar"]; ?>">
        </li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["prodi"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
    </ul>

    <p>< <a href="latihan1get.php">Kembali ke daftar mahasiswa</a></p>
</body>
</html>