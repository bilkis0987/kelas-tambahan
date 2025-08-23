<?php 

$nama = "Elgin"; // String

$umur = 18; // Integer

$tinggi = 170.5; // Float

$lulus = true;

$istri = null;

// Untuk mengetahui tipe data
// Gunakan var_dump()
echo "Nama: ";
var_dump($nama);
echo "<br />";

echo "Umur: ";
var_dump($umur);
echo "<br />";

echo "Tinggi: ";
var_dump($tinggi);
echo "<br />";

echo "Sudah lulus: " . ($lulus ? "Sudah " : "Belum ");
var_dump($lulus);
echo "<br />";

echo "Istri: ";
var_dump($istri);
echo "<br />";

?>