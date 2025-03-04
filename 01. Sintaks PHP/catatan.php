<?php 
// ini adalah komentar 1 baris
/* 
komentar untuk
banyak baris
*/

// Sintaks PHP

// Standar Output
// echo
// print: biasa digunakan untuk mencetak tulisan, isi variabel, dsb.
// print_r: ini khusus untuk mencetak isi array
// var_dump: ini digunakan untuk melihat isi variabel

// print_r dan var_dump biasanya dipakai untuk debugging, seperti pada saat ingin men-debug program, mencari kesalahan dimana, atau isi variabel tertentu.
echo "Ramdani Arvianto <br>";
print "Ramdani Arvianto <br>";

print_r("Ramdani Arvianto <br>");
var_dump("Ramdani Arvianto");

echo "<br><br>";

echo "Ramdani <br>";
echo 123 . "<br>";
echo true . "<br>";

/* 
Penulisan Sintaks PHP
| 1. PHP di dalam HTML
| 2. HTML di dalam PHP


Variabel dan Tipe Data
| Variabel
|   Digunakan untuk menampung sebuah nilai
|       Aturan:
|       - Tidak boleh diawali dengan angka, tapi boleh mengandung angka
|           - $1Nama | Tidak Boleh
|           - $Nama1 | Boleh
*/

$nama = "Ramdani Arvianto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>

    <?php 
    echo "<h1>Halo, selamat datang lagi $nama</h1>";
    ?>
</body>
</html>

<?php 
// Operator
// Aritmatika | + - * / %
$x = 10;
$y = 5;

echo $x + $y;
echo "<br>";
echo 5 + 5;

echo "<br>";
echo "<br>";


// Penggabungan String / Concatenation / Concat

$nama_depan = "Ramdani";
$nama_belakang = "Arvianto";

$full_name = $nama_depan . " " . $nama_belakang;
echo $full_name;

echo "<br>";
echo "<br>";


// Assignment
// =  +=  -=  *=  /=  %=  .=

$r = 1;
$r += 5;

echo $r;

echo "<br>";
echo "<br>";

    $Nama = "Ramdani";
    $Nama .= " ";
    $Nama .= "Arvianto";

    echo $Nama;

echo "<br>";
echo "<br>";

// Perbandingan
// <  >  <=  >=  ==  !=
var_dump(1 < 5);
echo "<br>";
var_dump(1 == "1"); // output: true
echo "<br>";

// Identitas
// ===  !==
var_dump(1 === "1"); // output: false
echo "<br>";

// Logika
// !  &&  ||
$t = 10;
var_dump($x < 20 && $t % 2 == 0);
?>