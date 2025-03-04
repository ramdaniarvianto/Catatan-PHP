<?php 
// Apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
// Cek Username dan Password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "admin" ) {
// Jika Benar, Redirect ke halaman Admin
        header("Location: admin.php");
        exit;
    } else {
// Jika Salah, tampilkan pesan Kesalahan
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
            list-style: none;
        }

        p {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if ( isset($error) ) : ?>
        <p>Username atau Password Salah!</p>
    <?php endif; ?>

    <table>
        <form action="" method="POST">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="submit">Login</button></td>
            </tr>
        </form>
    </table>
</body>
</html>