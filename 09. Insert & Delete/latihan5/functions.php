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
}

function add($data) {
    global $dbconn;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $prodi = htmlspecialchars($data['prodi']);
    $semester = htmlspecialchars($data['semester']);
    $email = htmlspecialchars($data['email']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES
            ('', '$nama', '$nim', '$prodi', '$semester', '$email', '$gambar')
    ";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function hapus($id) {
    global $dbconn;
    mysqli_query($dbconn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($dbconn);
}
?>