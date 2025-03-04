<?php 
/*
Array
|   - Variabel yang dapat memiliki banyak nilai
|   - Elemen pada Array boleh memiliki tipe data yang berbeda
|   - Pasangan antara Key dan Value
|       - Key-nya adalah index yang dimulai dari 0
*/
// Membuat Array dengan cara Lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");

echo $hari[0];
echo "<br>";
echo $hari[1];
echo "<br>";


echo "<br>";
// Membuat Array dengan cara Baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember"];

echo $bulan[10];
echo "<br>";

echo "<br>";
$beda = ["Ramdani", 123, true];

echo $beda[0];
echo "<br>";

echo "<br>";
/*
Menampilkan Array
|   - var_dump()
|   - print_r()
*/
var_dump($bulan);
echo "<br>";
echo "<br>";
print_r($hari);


echo "<br>";
echo "<br>";
// Menambahkan elemen baru pada Array
var_dump($beda);
echo "<br>";
$beda[] = "Arvianto";
$beda[] = 456;
var_dump($beda);
?>