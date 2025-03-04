<?php 
if ( isset( $_POST['submit'] ) ) {
    if ( $_POST['username'] == "admin" && $_POST['password'] == "admin" ) {
        header("Location: ../latihan4/latihan7get.php");
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
    </style>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td colspan="2" align="center">Login</td>
            </tr>
            <?php if ( isset( $error ) ) : ?>
                <tr>
                    <td colspan="2" style="color: red; font-style: italic;">Username atau Password Salah!</td>
                </tr>
            <?php endif; ?>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>