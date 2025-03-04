<?php 
session_start();
require "functions.php";

if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $checkcookie = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE id = '$id'");
    $row = mysqli_fetch_assoc($checkcookie);
    if ( $key === hash("sha256", $row["username"]) ) {
        $_SESSION["login"] = true;
    }
}

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $checkuser = mysqli_query($dbconn, "SELECT * FROM pengguna WHERE username = '$username'");
    if ( mysqli_num_rows($checkuser) === 1 ) {
        $row = mysqli_fetch_assoc($checkuser);
        if ( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;

            if ( isset($_POST["remember"]) ) {
                setcookie("id", $row["id"], time()+60);
                setcookie("key", hash("sha256", $row["username"]), time()+60);
            }

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
            font-family: 'Arial';
        }

        body {
            margin: 2rem 3rem;
        }
        
        a {
            color: slateblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            border: none;
            padding: 10px;
            color: white;
            background-color: slateblue;
        }
        button:hover {
            background-color: #5A6ACDDD;
        }

        .cta {
            text-decoration: underline;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($error)) : ?>
        <p class="error">Username dan password tidak sesuai</p>
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
                <td colspan="2"><input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2">Belum punya akun? <a href="register.php" class="cta">Daftar</a></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2"><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>