<?php 
$a = 10 ;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b ;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b ;
$hasilLebihBesarSama = $a >= $b ;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
$a += $b;
echo "Hasil Tambah dan Assign (+=): {$a} <br>";

$a -= $b;
echo "Hasil Kurang dan Assign (-=): {$a} <br>";

$a *= $b;
echo "Hasil Kali dan Assign (*=): {$a} <br>";

$a /= $b;
echo "Hasil Bagi dan Assign (/=): {$a} <br>";

$a %= $b;
echo "Hasil Sisa Bagi dan Assign (%=): {$a} <br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik (===): " . var_export($hasilIdentik, true) . "<br>";
echo "Hasil Tidak Identik (!==): " . var_export($hasilTidakIdentik, true) . "<br>";
echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Sama (==): " . var_export($hasilSama, true) . "<br>";
echo "Hasil Tidak Sama (!=): " . var_export($hasilTidakSama, true) . "<br>";
echo "Hasil Lebih Kecil (<): " . var_export($hasilLebihKecil, true) . "<br>";
echo "Hasil Lebih Besar (>): " . var_export($hasilLebihBesar, true) . "<br>";
echo "Hasil Lebih Kecil atau Sama (<=): " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Hasil Lebih Besar atau Sama (>=): " . var_export($hasilLebihBesarSama, true) . "<br>";
echo "Hasil AND (&&): " . var_export($hasilAnd, true) . "<br>";
echo "Hasil OR (||): " . var_export($hasilOr, true) . "<br>";
echo "Hasil NOT A (!): " . var_export($hasilNotA, true) . "<br>";
echo "Hasil NOT B (!): " . var_export($hasilNotB, true) . "<br>";
?>