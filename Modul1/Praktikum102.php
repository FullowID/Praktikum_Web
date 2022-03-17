<?php
    $jari = 4.2;
    $tinggi = 5.4;
    define ("pi", 3.14);

    //Bangun Ruang Kerucut
    $hasil = (pi * $jari * $jari * $tinggi)/3;
    echo (number_format($hasil, 3))."m3";
?>