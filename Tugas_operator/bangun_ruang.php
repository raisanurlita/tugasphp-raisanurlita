<?php
// Menghitung volume balok (panjang * lebar * tinggi)
$p = 15; // Panjang Balok
$l = 8; // lebar Balok
$t = 5; //Tinggi Balok

$volume = $p * $l * $t;
echo "Volume Balok : $volume <br>";

// Menghitung volume Tabung (π * r * r * t)
$r = 5; // Jari-jari Tabung
$t = 10; // Tinggi Tabung

$volume = 3.14 * $r * $r * $t;
echo "Volume Tabung : $volume <br>";

// Menghitung volume Kubus ( sisi * sisi * sisi)
$s = 5; // sisi

$volume =  $s * $s * $s;
echo "Volume Kubus : $volume <br>";
