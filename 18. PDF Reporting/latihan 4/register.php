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
        <h1>Register</h1>

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
                    <td><label for="password2">Confirm Password</label></td>
                    <td>: <input type="password" name="password2" id="password2"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2">Sudah punya akun? <a href="login.php">Login</a></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2"><button type="submit" name="register">Register</button></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>