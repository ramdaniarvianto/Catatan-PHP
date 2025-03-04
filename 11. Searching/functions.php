<?php 
$today = date('l, d M Y');

date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');

function greet() {
    date_default_timezone_set('Asia/Jakarta');
    $time = date('H');

    if ($time >= 4 && $time < 12) {
        $day = 'pagi';
    } elseif ($time >= 12 && $time < 15) {
        $day = 'siang';
    } elseif ($time >= 15 && $time < 19) {
        $day = 'sore';
    } else {
        $day = 'malam';
    }

    return "Halo, selamat $day Admin";
}

$dbconn = mysqli_connect('localhost', 'root', '', 'mahasiswa_stikom');

function query($query) {
    global $dbconn;

    $dbresult = mysqli_query($dbconn, $query);
    $dbrows = [];
    while ($dbrow = mysqli_fetch_assoc($dbresult)) {
        $dbrows[] = $dbrow;
    }

    return $dbrows;
}

function tambah($data) {
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

function ubah($data) {
    global $dbconn;

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $prodi = htmlspecialchars($data['prodi']);
    $semester = htmlspecialchars($data['semester']);
    $email = htmlspecialchars($data['email']);
    $gambar = htmlspecialchars($data['gambar']);
    
    $query = "UPDATE mahasiswa SET
        nama = '$nama',
        nim = '$nim',
        prodi = '$prodi',
        semester = '$semester',
        email = '$email',
        gambar = '$gambar'
        WHERE id = $id
    ";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
        nama LIKE '%$keyword%' OR
        nim LIKE '%$keyword%' OR
        prodi LIKE '%$keyword%' OR
        semester LIKE '%$keyword%' OR
        email LIKE '%$keyword%'
    ";

    return query($query);
}
?>