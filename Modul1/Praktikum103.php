<?php
    $celcius = 37.841;
    $fahrenheit = ($celcius * 9/5) + 32;
    $reamur = $celcius * 0.8;
    $kelvin = $celcius + 273.15;

    echo "Fahrenheit (F) = " . (number_format($fahrenheit, 4));
    echo "\n";
    echo "Reamur (R) = " . (number_format($reamur, 4));
    echo "\n";
    echo "Kelvin (K) = " . (number_format($kelvin, 4));
?>