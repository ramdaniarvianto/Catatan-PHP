<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require "functions.php";

if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $checkusn = mysqli_query($dbconn, "SELECT * FROM pengguna WHERE username = '$username'");

    if ( mysqli_num_rows($checkusn) === 1 ) {
        $row = mysqli_fetch_assoc($checkusn);
        if ( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;
            setcookie("login", "true", time() + 3600);
            header("Location: index.php");
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
            font-family: 'Arial'
        }

        body {
            margin: 0 3rem 3rem 3rem;
        }

        a {
            text-decoration: none;
            color: slateblue;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 8px 10px;
            border: none;
            outline: 2px solid slateblue;
            color: white;
            background-color: slateblue;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if ( isset($error) ) : ?>
        <p style="color: red">Username atau Password Salah!</p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
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
                <td colspan="2">Belum punya akun? <a href="register.php" style="text-decoration: underline;">Daftar</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>