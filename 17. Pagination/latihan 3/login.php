<?php 
session_start();
require "functions.php";

if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $dbresult = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE username = '$id'");
    $row = mysqli_fetch_assoc($dbresult);

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
        $user = mysqli_fetch_assoc($checkuser);
        if ( password_verify($password, $user["password"]) ) {
            $_SESSION["login"] = true;

            setcookie("id", $user["id"], time()+60);
            setcookie("key", hash("sha256", $user["password"]), time()+60);

            header("Location: index.php");
            exit;
        }
    }
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
            padding: 1rem 3rem 3rem 3rem;
        }

        a {
            text-decoration: none;
            color: slateblue;
        }
        a:hover {
            text-decoration: underline;
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
    <h1>Login</h1>

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
                <td colspan="2"><p>Belum punya akun? <a href="register.php" style="text-decoration: underline;">Daftar</a></p></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>