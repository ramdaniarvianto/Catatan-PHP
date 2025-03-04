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
        mysqli_error($dbconn);
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
            margin: 3rem;
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
            border: none;
            color: white;
            background-color: slateblue;
        }
    </style>
</head>
<body>
    <h1>Register</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>: <input type="text" name="username" id="username" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>: <input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="password2">Confirm Password</label></td>
                <td>: <input type="password" name="password2" id="password2" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2">Sudah punya akun? <a href="login.php" style="text-decoration: underline;">Login</a></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2"><button type="submit" name="register">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>