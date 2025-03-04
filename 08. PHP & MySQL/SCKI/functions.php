<?php 
// Koneksi ke Database
$dbcon = mysqli_connect("localhost", "root", "", "mahasiswa_stikom");

// Query
function query($query) {
    global $dbcon;
    $dbresult = mysqli_query($dbcon, $query);
    $dbrows = [];
    while ($dbrow = mysqli_fetch_assoc($dbresult)) {
        $dbrows[] = $dbrow;
    }
    return $dbrows;
}
?>