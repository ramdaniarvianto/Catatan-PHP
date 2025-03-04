<?php 
$dbconn = mysqli_connect("localhost", "root", "", "mahasiswa_stikom");

function query($query) {
    global $dbconn;
    $dbresult = mysqli_query($dbconn, $query);
    $dbrows = [];
    while ($dbrow = mysqli_fetch_assoc($dbresult)) {
        $dbrows[] = $dbrow;
    }
    return $dbrows;
};
?>