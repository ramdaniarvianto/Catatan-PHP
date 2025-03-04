<?php 
/*
Pengulangan
| - for
| - while
| - do.. while
| - foreach | pengulangan khusus array
*/

for ($a = 0; $a < 5; $a++) {
    echo "Hello World <br>";
}

echo "<br>";
echo "<br>";

$b = 0;
while ($b < 5) {
    echo "Halo Dunia <br>";
    $b++;
}

echo "<br>";
echo "<br>";

$c = 0;
do {
    echo "World Halo <br>";
    $c++;
} while ($c < 5);

echo "<br>";
echo "<br>";

$orang = 1;
do {
    echo "Halo orang ke $orang";
    $orang++;
} while ( $orang < 5 );

echo "<br>";
echo "<br>";

$people = 1;
while ( $people < 0 ) {
    echo "Halo";
    $people++;
}

echo "<br>";
echo "<br>";

/*
Pengkondisian
| - if else
| - if else if else
| - ternary
| - switch
*/

$d = 10;
if ($d < 20) {
    echo "Benar, $d lebih kecil dari 20";
} else {
    echo "Salah, $d tidak lebih kecil dari 20";
}

echo "<br>";
echo "<br>";

$e = 20;
if ($e < 20) {
    echo "Benar, $e lebih kecil dari 20";
} else if ($e == 20) {
    echo "Bingo, $e sama dengan 20";
} else {
    echo "Salah, $e tidak lebih kecil dari 20";
}
?>