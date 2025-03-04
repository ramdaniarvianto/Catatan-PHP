<?php 
session_start();
require "functions.php";

if ( isset($_COOKIE["im"]) && isset($_COOKIE['mi']) ) {
    $im = $_COOKIE["im"];
    $mi = $_COOKIE["mi"];

    $dbresult = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE id = $im");
    $row = mysqli_fetch_assoc($dbresult);

    if ( $mi === hash("sha256", $row["username"]) ) {
        $_SESSION["login"] = true;
    }
}

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if ( isset($_POST['login']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkusn = mysqli_query($dbconn, "SELECT * FROM pengguna WHERE username = '$username'");

    if ( mysqli_num_rows($checkusn) === 1 ) {
        $row = mysqli_fetch_assoc($checkusn);
        if ( password_verify($password, $row['password']) ) {
            $_SESSION["login"] = true;
            setcookie("im", hash("gost-crypto", $row['id']), time() + 3600);
            setcookie("mi", hash("sha256", $row["username"]), time()  + 3600);
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
            padding: 0 3rem;
        }

        a {
            color: slateblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 8px 10px;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if ( isset($error) ) : ?>
        <p style="color: red;">Username atau Password Salah!</p>
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
                <td colspan="2">Belum punya akun? <a href="register.php" style="color: blue; text-decoration: underline;">Daftar</a></td>
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