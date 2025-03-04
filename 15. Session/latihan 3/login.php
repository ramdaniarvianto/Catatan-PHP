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
    <title>SCKI | Register</title>
    <style>
        * {
            font-family: 'Arial';
        }

        body {
            padding: 0 3rem 3rem 3rem;
        }

        a {
            color: slateblue;
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
</body>
</html>