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

function add($data) {
    global $dbconn;
    $nama = $data['nama'];
    $nim = $data['nim'];
    $prodi = $data['prodi'];
    $semester = $data['semester'];
    $email = $data['email'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO mahasiswa VALUES
            ('', '$nama', '$nim', '$prodi', '$semester', '$email', '$gambar')
    ";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
};

function hapus($id) {
    global $dbconn;
    mysqli_query($dbconn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($dbconn);
}
?>