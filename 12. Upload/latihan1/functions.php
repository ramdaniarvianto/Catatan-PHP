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
    
    // Upload gambar
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
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    /*
    CODE ERROR:
    0: Tidak ada error, file berhasil diupload
    1: Ukuran file melebihi batas maksimal yang diizinkan
    2: Ukuran file melebihi batas maksimal yang ditentukan dalam form HTML
    3: File hanya sebagian yang terupload
    4: Tidak ada file yang diupload 
    6: Folder temporary hilang atau tidak tersedia
    7: PHP gagal menulis file ke disk
    8: Upload dihentikan oleh ekstensi PHP
    */
    
    // Cek apakah tidak ada gambar yang diupload
    if ( $error === 4 ) {
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu!');
            </script>
        ";

        return false;
    }

    // Cek apakah yang diupload adalah gambar
    // User hanya boleh mengupload gambar dengan ekstensi yang sudah ditentukan: jpg, jpeg, dan png.
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    
    // explode(): sebuah fungsi untuk memecah sebuah string menjadi array. explode(delimiter, string)
    /*
    Misalnya:
    ramdani.jpg | berubah menjadi = ['ramdani', 'jpg']
    */
    $ekstensiGambar = explode('.', $namaFile);
    
    // end(): mengambil array yang paling terakhir
    // strtolower: untuk mengubah huruf besar menjadi huruf kecil
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // Mengecek apakah ekstensi gambar yang diupload ada di daftar ekstensi yang sudah ditentukan
    // in_array(needle, haystack): untuk mengecek apakah ada sebuah string di dalam sebuah array
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert('Yang anda upload bukan gambar!\nGunakan gambar dengan ekstensi jpg, jpeg, atau png!');
            </script>
        ";

        return false;
    }

    // Cek jika ukuran gambar terlalu besar
    if ( $ukuranFIle > 1000000 ) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar');
            </script>
        ";

        return false;
    }

    // Lolos pengecekan, gambar siap diupload
    
    // Generate nama file gambar baru
    // uniqid(): akan membangkitkan string random (angka)
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    /*
    move_uploaded_file(filename, destination): memindahkan file yang sudah diupload ke tempat tmp_name, dipindahkan ke file tujuannya.
    */
    move_uploaded_file($tmpName, '../../.image/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id) {
    global $dbconn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($dbconn, $query);

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
    
    $gambarLama = htmlspecialchars($data['gambarLama']);
    
    // Cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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