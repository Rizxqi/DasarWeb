<?php

function perkenalan($nama, $salam= "Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat 
perkenalan("Rizqi", "Hallo");

echo "<hr>";

$saya = "Rizqi D";
$ucapanSalam = "Selamat Pagi ";

perkenalan($saya);
?>