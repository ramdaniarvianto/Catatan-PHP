<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: admin.php");
    exit;
}

require 'functions.php';

if ( isset($_POST['login']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkusn = mysqli_query($dbconn, "SELECT * FROM pengguna WHERE username = '$username'");

    if ( mysqli_num_rows($checkusn) ) {
        $row = mysqli_fetch_assoc($checkusn);
        if ( password_verify($password, $row['password']) ) {
            $_SESSION["login"] = true;
            header('Location: admin.php');
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCKI | Login</title>
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
    <h1>Login</h1>

    <?php if ( isset($error) ) : ?>
        <p style="color: red;">Username atau Password Salah!</p>
    <?php endif; ?>

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
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">Belum punya akun? <a href="registerasi.php" style="color: royalblue; text-decoration: underline;">Daftar disini</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>