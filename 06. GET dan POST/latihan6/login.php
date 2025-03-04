<?php 
if ( isset($_POST['submit']) ) {
    if ( $_POST['username'] == "admin" && $_POST['password'] == "admin" ) {
        header("Location: daftarmhs.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            font-family: 'Arial';
        }

        .login {
            font-weight: bold;
            font-size: 20px;
        }

        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td colspan="2" class="login">Login</td>
            </tr>
            <tr>
                <?php if (isset($error)) : ?>
                    <td colspan="2" class="error">Username atau Password Salah!</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>