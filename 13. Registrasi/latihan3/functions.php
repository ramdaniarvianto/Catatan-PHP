<?php 
$dbconn = mysqli_connect('localhost', 'root', '', 'mahasiswa_stikom');

function register($data) {
    global $dbconn;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($dbconn, $data['password']);
    $password2 = mysqli_real_escape_string($dbconn, $data['password2']);

    $checkusn = mysqli_query($dbconn, "SELECT username FROM pengguna WHERE username = '$username'");
    if ( mysqli_fetch_assoc($checkusn) ) {
        echo "
            <script>
                alert('Username tidak tersedia!');
            </script>
        ";
        return false;
    }

    if ( $password !== $password2 ) {
        echo "
            <script>
                alert('Password tidak sesuai!');
            </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($dbconn, "INSERT INTO pengguna VALUE
        ('', '$username', '$password')
    ");

    return mysqli_affected_rows($dbconn);
}
?>