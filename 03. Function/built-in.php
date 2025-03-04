<?php 
/*
Date
| - Untuk menampilkan tanggal dengan format tertentu
*/
    echo date("l, "); // hari: Jum'at
    echo date("L, "); // tahun kabisat: 1, jika bukan tahun kabisat: 0
    echo date("d"); // tanggal: 11
    echo date("D"); // hari: Jum
    echo date("m"); // bulan: 10
    echo date("M"); // bulan: Oct
    echo date("y"); // tahun: 24
    echo date("Y"); // tahun: 2024
    echo "<br>";
    echo date("L, D-M-Y"); // 1, Fri Oct 2024
    echo "<br>";
    echo date("l, d-M-Y"); // Friday, 11 Oct 2024
    echo "<br>";
    echo "<br>";
    echo date("H:i:s"); // Jam |  h: 01-12  |  H: 01-23  |  g: 1-12  |  G: 0-23

/*
Time
| - UNIX TimeStamp / EPOCH Time | Asal mula waktu di dunia komputer
|       Detik yang sudah berlalu sejak 1 Januari 1970
*/
    echo time();
    echo "<br>";
    echo "<br>";

    // Menghitung jumlah detik dalam 100 hari:
    // 24 jam dalam 1 hari | 60 detik x 60 menit x 24 Jam x 100 Hari = 8.640.000 detik.
    echo date("l", time()+60*60*24*100);
    echo "<br>";
    echo "<br>";
    // Sama seperti di atas, tetapi kali ini 100 hari dikurangkan dari waktu sekarang. Jadi ini adalah timestamp untuk 100 hari yang lalu.
    echo date("d M Y", time()-60*60*24*100);
    echo "<br>";
    echo "<br>";
    echo date('l', time()+60*60*24); // Saturday

/*
Make Time
| - Membuat detik sendiri
| - Ada 6 Parameter (0,0,0,0,0,0)
|       Urutannya: (Jam, Menit, Detik, Bulan, Tanggal, Tahun)
*/
    echo date("l", mktime(0,0,0, 11, 30, 2002));

    echo "<br>";
    echo "<br>";
/*
String to Time
*/
    echo date("l", strtotime("30 November 2002")); // Sabtu
?>