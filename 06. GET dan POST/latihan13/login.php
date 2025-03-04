<?php 
if ( isset($_POST['submit']) ) {
    if ( $_POST['username'] == "admin" && $_POST['password'] == 'admin' ) {
        header("Location: daftarmhs.php");
        exit;
    } else {
        $wrong = true;
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

        .salah {
            color: red;
            font-style: italic;
        }

        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td colspan="2"><h1>Login</h1></td>
            </tr>
            <tr>
                <?php if ( isset($wrong) ) : ?>
                <td colspan="2" class="salah">Maaf username atau password salah!</td>
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
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>