<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

// $skorUjian = [85, 92, 78, 96, 88];
// $totalSkor = 0;

// foreach ($skorUjian as $skor) { 
//     $totalSkor += $skor;
// }

// echo "Total skor ujian adalah: $totalSkor";


// $jumlahLahan = 10 ;
// $tanamanPerLahan = 5;
// $buahPerTanaman = 10;
// $jumlahBuah = 0;

// for ($i = 1; $i <= $jumlahLahan; $i++) { 
//     $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
// }

// echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

// $jarakSaatini = 0;
// $jarakTarget = 500;
// $peningkatanHarian = 30;
// $hari = 0;

// while ($jarakSaatini < $jarakTarget) {
//     $jarakSaatini += $peningkatanHarian;
//     $hari++;
// }

// echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer. ";

// $nilaiNumerik = 92 ; 

// if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
//     echo "Nilai huruf: A";
// } else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
//     echo "Nilai huruf: B";
// } 
//  else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
//     echo "Nilai huruf: C";
// } 
//  else if ($nilaiNumerik < 70 ) {
//     echo "Nilai huruf: D";
// } 
?>