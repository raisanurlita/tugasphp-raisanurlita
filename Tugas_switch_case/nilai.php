<?php

$nilai = 80;

// Menghitung kategori nilai
switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategorinilai = 'A';
        break;
    case ($nilai >= 80 && $nilai < 90):
        $kategorinilai = 'B';
        break;
    case ($nilai >= 70 && $nilai < 80):
        $kategorinilai = 'C';
        break;
    default:
        $kategorinilai = 'D';
}

echo "Nilai : $nilai<br>";
echo "Kategori nilai: $kategorinilai";
