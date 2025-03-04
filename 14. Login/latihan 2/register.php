<?php 
require 'functions.php';

if ( isset($_POST['register']) ) {
    if ( register($_POST) > 0 ) {
        echo "
            <script>
                alert('User baru berhasil ditambah!');
            </script>
        ";
        header('Location: login.php');
        exit;
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
    <title>SCKI | Registe</title>
    <style>
        * {
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <h1>Register</h1>

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
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="register">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>