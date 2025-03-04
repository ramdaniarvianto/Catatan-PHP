<?php 
session_start();
require "functions.php";

// Cek Cookie
// if ( isset($_COOKIE["login"]) ) {
//     if ( $_COOKIE["login"] == "true" ) {
//         $_SESSION["login"] = true;
//     }
// }
if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    // Ambil username berdasarkan id
    $dbresult = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE id = $id");
    $row = mysqli_fetch_assoc($dbresult);

    // Cek Cookie dan Username
    if ( $key === hash('sha256', $row['username']) ) {
        $_SESSION["login"] = true;
    }
}

if ( isset($_SESSION["login"]) ) {
    header("Location: admin.php");
    exit;
}

if ( isset($_POST['login']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkusn = mysqli_query($dbconn, "SELECT * FROM pengguna WHERE username = '$username'");
    
    if ( mysqli_num_rows($checkusn) ) {
        $row = mysqli_fetch_assoc($checkusn);
        if ( password_verify($password, $row['password']) ) {

            // Set SESSION
            $_SESSION["login"] = true;

            // Cek Remember me
            if ( isset($_POST['remember']) ) {
                // Buat Cookie
                // setcookie("login", "true", time()+60);
                setcookie("id", $row["id"], time()+60);
                setcookie("key", hash('sha256', $row["username"]), time()+60);
            }

            header("Location: admin.php");
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

        a {
            text-decoration: none;
            color: slateblue;
        }
        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 5px 10px;
            color: white;
            background-color: slateblue;
            border: 2px solid slateblue;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if ( isset($error) ) : ?>
        <p style="color: red;">Username atau Password Salah</p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>: <input type="text" name="username" id="username" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>: <input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label></td>
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
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>