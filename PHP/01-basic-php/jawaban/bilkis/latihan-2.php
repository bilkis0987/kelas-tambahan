<?php
$nama = "bilkis";
$umur = 17;
$tinggi_badan = 190.9;
$isPelajar = true;
$rata_rata = 88.8;

$tahun_sekarang = date("Y");
$tahun_lahir = $tahun_sekarang - $umur;

echo "Hallo, nama saya $nama, saya berumur $umur tahun, tinggi badan saya $tinggi_badan cm. <br>";
echo "Apakah saya seorang pelajar ? " . ($isPelajar ? "Ya" : "Tidak") . "<br>";
echo "Nilai rata-rata saya: $rata_rata <br>";
echo "saya lahir pada tahun $tahun_lahir <br> <br>";

var_dump($nama);
echo "<br>";
var_dump($umur);
echo "<br>";
var_dump($tinggi_badan);
echo "<br>";
var_dump($isPelajar);
echo "<br>";
var_dump($rata_rata);
echo "<br>";

// bonus 
var_dump($tahun_sekarang);
echo "<br>";
var_dump($tahun_lahir);
echo "<br>";
