<?php 
/*
Variabel Scope / Lingkup Variabel
|   - 
*/
$x = 100; // Variabel Global

function angka() {
    // $x = 10; // Variabel x yang ada variabel lokal di dalam function dan hanya bisa digunakan di dalam function.
    global $x; // Agar bisa mengakses variabel Global
    echo $x; // Tidak bisa mengakses variabel Global
}

echo angka();


echo "<br>";
echo "<br>";

/*
Supergblobals
| Variabel Global milik PHP
|   - $_GET
|   - $_POST
|   - $_REQUEST
|   - $_SESSION
|   - $_COOKIE
|   - $_SERVER
|   - $_ENV | Environment
| Semua variabel merupakan Array Associative.
|
| Array Associative tidak bisa dicetak dengan menggunakan echo, harus menggunakan var_dump() atau print_r()
*/

var_dump($_GET);

echo "<br>";
echo "<br>";

var_dump($_SERVER);
?>