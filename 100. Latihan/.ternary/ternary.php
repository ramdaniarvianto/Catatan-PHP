<?php 

$nilai = ( $nilai > 50 ) ? "Lulus" : "Tidak Lulus";
$bilangan = ( $bilangan % 2 == 0 ) ? "Genap" : "Ganjil";
$belanja = ( $belanja >= 100000 ) ? "Diskon 10%" : "Diskon 5%";
$pengguna = ( $isLoggedIn === true ) ? "Selamat Datang!" : "Silahkan Login.";

$angka = ( $angka > 0 ) ? "Positif" : "Negatif atau Nol";

$usia = ( $usia >= 60 ) ? "Diskon Lansia" : "Tidak ada Diskon";

$angka1 = 4;
$angka2 = 8;
$cek = ( $angka1 > $angka2 ) ? "Angka1 lebih besar" : "Angka2 lebih besar atau Sama";

$username = "Ramdani";
$user = ( $username !== null ) ? "Halo $username" : "Silahkan Login";

$soal1 = ( $soal1 > 75 ) ? "Lulus dengan baik" : "Perlu Belajar Lagi";
$soal2 = ( $soal2 === 2 OR 3 ) ? "Bilangan Prima" : "Bukan Bilangan Prima";
$soal3 = ( empty($soal3) ) ? "Input tidak boleh kosong" : "Input diterima";

$a = 6;
$b = 8;
$soal4 = ( $a < $b ) ? "a lebih kecil" : "b lebih kecil atau sama";


$soal5 = 

$soal6 = ( $soal5 >= 17 ) ? "Boleh memilih" : "Belum cukup umur";

$status;
$soal7 = ( !empty($status) ) ? "Barang Anda Sudah Terkirim" : "Barang Belum Terkirim";

$email = "ramdaniarvianto1@gmail.com";
$soal8 = ( empty($email) ) ? "Email belum diisi" : "Email diterima";

$nilaiakhir = 90;
$soal9 = ( $nilaiakhir >= 85 ) ? "Nilai A" : "Nilai B";

$hari = "Sabtu";
$soal10 = ( $hari === "Minggu" ) ? "Diskon Spesial  20%" : "Diskon Reguler 10%";

?>