<?php 
session_start();
require "functions.php";

if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $checkcookie = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE id = '$id'");
    $cookie = mysqli_fetch_assoc($checkcookie);
    if ( $key === hash("sha256", $cookie["username"]) ) {
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
            font-family: "Arial";
        }

        main {
            margin: 1rem 3rem;
        }

        a {
            color: slateblue;
            text-decoration: underline;
        }

        input:focus {
            outline-color: slateblue;
        }

        button {
            padding: 10px;
            border: none;
            outline: 2px solid slateblue;
            color: white;
            background-color: slateblue;
        }
        button:hover {
            outline: 2px solid #6a5acddd;
            background-color: #6a5acddd;
        }
    </style>
</head>
<body>
    <main>
        <h1>Login</h1>

        <?php if ( isset($error) ) : ?>
            <p style="color: red;">Username atau password salah!</p>
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
                    <td colspan="2"><input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2">Belum punya akun? <a href="register.php">Daftar</a></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2"><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>