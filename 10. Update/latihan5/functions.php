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

    $nama = $data['nama'];
    $nim = $data['nim'];
    $prodi = $data['prodi'];
    $semester = $data['semester'];
    $email = $data['email'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO mahasiswa VALUE
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

    $id = $data['id'];
    $nama = $data['nama'];
    $nim = $data['nim'];
    $prodi = $data['prodi'];
    $semester = $data['semester'];
    $email = $data['email'];
    $gambar = $data['gambar'];

    $query = "UPDATE mahasiswa SET
        nama = '$nama',
        nim = '$nim',
        prodi = '$prodi',
        semester = '$semester',
        email = '$email',
        gambar = '$gambar'
        WHERE id = $id;
    ";

    mysqli_query($dbconn, $query);
    return mysqli_affected_rows($dbconn);
}
?>