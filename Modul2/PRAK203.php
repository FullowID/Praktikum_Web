<?php
    $nilai = NULL;
    $suhuAwal = NULL;
    $suhuKonversi = NULL;
    $hasilKonversi = NULL;
    $derajat = NULL;

    function konversiSuhu($suhuA, $suhuB, $nilaiTemp){
        switch ($suhuA){
            case "Celcius":
                switch ($suhuB){
                    case "Fahrenheit":
                        $hasilKonversi = $nilaiTemp*9/5 + 32;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Rheamur":
                        $hasilKonversi = $nilaiTemp*4/5;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Kelvin":
                        $hasilKonversi = $nilaiTemp + 273.15;
                        echo number_format($hasilKonversi,1);
                        break;
                }
            break;

            case "Fahrenheit":
                switch($suhuB){
                    case "Celcius":
                        $hasilKonversi = 5/9*($nilaiTemp-32);
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Rheamur":
                        $hasilKonversi = 4/9*($nilaiTemp - 32);
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Kelvin":
                        $hasilKonversi = ($nilaiTemp - 32) * 5/9 + 273.15;
                        echo number_format($hasilKonversi,1);
                        break;
                }
            break;

            case "Rheamur":
                switch($suhuB){
                    case "Celcius":
                        $hasilKonversi = 5/4*$nilaiTemp;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Fahrenheit":
                        $hasilKonversi = 9/4*$nilaiTemp+32;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Kelvin":
                        $hasilKonversi = 5/4*$nilaiTemp+273.15;
                        echo number_format($hasilKonversi,1);
                        break;
                }
            break;

            case "Kelvin":
                switch($suhuB){
                    case "Celcius":
                        $hasilKonversi = $nilaiTemp - 273.15;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Fahrenheit":
                        $hasilKonversi = ($nilaiTemp - 273.15) * 9/5 + 32;
                        echo number_format($hasilKonversi,1);
                        break;
                    case "Rheamur":
                        $hasilKonversi = 4/5*($nilaiTemp-273);
                        echo number_format($hasilKonversi,1);
                        break;
                }
            break;
        }
    }

    function janganClear($temp){
        if(isset($_POST[$temp]) && $_POST[$temp]!=""){
            echo " value='".$_POST[$temp]."'";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["nilai"])){
            $nilai = $_POST["nilai"];
        }

        if(!empty($_POST["suhuAwal"])){
            $suhuAwal = $_POST["suhuAwal"];
        }

        if(!empty($_POST["suhuKonversi"])){
            $suhuKonversi = $_POST["suhuKonversi"];
        }
    }

    if ($suhuKonversi == "Celcius"){$derajat = "C";}
    else if ($suhuKonversi == "Fahrenheit") {$derajat = "F";}
    else if ($suhuKonversi == "Rheamur") {$derajat = "R";}
    else if ($suhuKonversi == "Kelvin") {$derajat = "K";}
?>

<form action="" method="POST">
    <label for="">Nilai: </label>
    <input type="number" name="nilai" <?php janganClear("nilai")?>><br>

    <label for="">Dari: </label><br>
    <input type="radio" name="suhuAwal" value="Celcius" <?php if (isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Celcius") echo "checked";?>>Celcius<br>
    <input type="radio" name="suhuAwal" value="Fahrenheit" <?php if (isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
    <input type="radio" name="suhuAwal" value="Rheamur" <?php if (isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Rheamur") echo "checked";?>>Rheamur<br>
    <input type="radio" name="suhuAwal" value="Kelvin" <?php if (isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Kelvin") echo "checked";?>>Kelvin<br>

    <label for="">Ke: </label><br>
    <input type="radio" name="suhuKonversi" value="Celcius" <?php if (isset($_POST["suhuKonversi"]) and $_POST["suhuKonversi"] == "Celcius") echo "checked";?>>Celcius<br>
    <input type="radio" name="suhuKonversi" value="Fahrenheit" <?php if (isset($_POST["suhuKonversi"]) and $_POST["suhuKonversi"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
    <input type="radio" name="suhuKonversi" value="Rheamur" <?php if (isset($_POST["suhuKonversi"]) and $_POST["suhuKonversi"] == "Rheamur") echo "checked";?>>Rheamur<br>
    <input type="radio" name="suhuKonversi" value="Kelvin" <?php if (isset($_POST["suhuKonversi"]) and $_POST["suhuKonversi"] == "Kelvin") echo "checked";?>>Kelvin<br>
    <button type="submit">Konversi</button>
    
</form>
<h2>Hasil Konversi: <?php konversiSuhu($suhuAwal, $suhuKonversi, $nilai)?> &deg<?php echo $derajat?></h2>
