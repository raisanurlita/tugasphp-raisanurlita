<?php

$nama = "Raisa";
$tinggi_badan = 163; // Tinggi badan dalam centi meter
$berat_badan = 40; // Berat badan dalam kilogram

$tinggi_badan_meter = $tinggi_badan / 100; // mengubah tinggi badan dari centimeter ke meter

// Menghitung BMI
$bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);

echo "Halo, $nama. Nilai BMI anda adalah $bmi, ";

if ($bmi < 18.5) {
    echo " Berat Badan Anda Tergolong Kurus <br>";
} else if ($bmi >= 18.5 && $bmi < 25) {
    echo " Berat Badan Anda Tergolong Normal <br>";
} else if ($bmi >= 25 && $bmi <= 27) {
    echo " Berat Badan Anda Tergolong Gemuk <br>";
} else {
    echo " Berat Badan Anda Tergolong obesitas <br>";
}
