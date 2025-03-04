<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: admin.php");
    exit;
}

require 'functions.php';

if ( isset($_POST['registerasi']) ) {
    if ( registerasi($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil mendaftar!');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        mysqli_affected_rows($dbconn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Registerasi</title>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            padding: 0 2rem;
        }

        a {
            text-decoration: none;
            color: slateblue;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            cursor: pointer;
            padding: 5px 10px;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }

        input:focus {
            border: 2px solid slateblue;
            outline: 2px solid slateblue;
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
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">Sudah punya akun? <a href="login.php" style="color: royalblue; text-decoration: underline;">Login</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><button type="submit" name="registerasi">Registerasi</button></td>
            </tr>
        </table>
    </form>
</body>
</html>