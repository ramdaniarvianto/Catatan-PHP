<?php 
require "functions.php";

if ( isset($_POST["register"]) ) {
    if ( register($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil mendaftar');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo mysqli_error($dbconn);
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

        body {
            margin: 2rem 3rem;
        }

        a {
            color: slateblue;
        }

        button {
            border: none;
            padding: 8px 10px;
            color: white;
            background-color: slateblue;
        }
    </style>
</head>
<body>
    <h1>Registerasi</h1>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>: <input type="text" name="username" id="username" autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>: <input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="password2">Confirm Password</label></td>
                <td>: <input type="password" name="password2" id="password2"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td colspan="2">Sudah punya akun? <a href="login.php" style="text-decoration: underline;">Login</a></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td colspan="2"><button type="submit" name="register">Registerasi</button></td>
            </tr>
        </table>
    </form>
</body>
</html>