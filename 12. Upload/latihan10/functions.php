<?php 
$today = date('l, d M Y');

date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');

function greet() {
    date_default_timezone_set('Asia/Jakarta');
    $time = date('H');

    if ( $time >= 4 && $time < 12 ) {
        $day = 'pagi';
    } elseif ( $time >= 12 && $time < 16 ) {
        $day = 'siang';
    } elseif ( $time >= 16 && $time < 19 ) {
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
    while ( $dbrow = mysqli_fetch_assoc($dbresult) ) {
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
    $gambar = upload();

    if ( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES
        ('', '$nama', '$nim', '$prodi', '$semester', '$email', '$gambar')
    ";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ( $error === 4 ) {
        echo "
            <script>
                alert('Kamu belum mengupload gambar!');
            </script>
        ";
        return false;
    }

    if ( $ukuranFile > 1000000 ) {
        echo "
            <script>
                alert('Ukuran gambar > 1MB');
            </script>
        ";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert('Yang kamu upload bukan gambar!');
            </script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../.image/' . $namaFileBaru);

    return $namaFileBaru;
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

function hapus($id) {
    global $dbconn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";
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