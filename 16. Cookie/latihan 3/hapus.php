<?php 
session_start();

if ( !$_SESSION["login"] ) {
    header("Location: login.php");
    exit;
}

require "functions.php";

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data tidak dihapus!');
        </script>
    ";
}
?>