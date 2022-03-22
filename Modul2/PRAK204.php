<?php
    $nilai = (Int)NULL;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(($_POST["nilai"])!=  NULL){
            $nilai = $_POST["nilai"];
        }
    }

    function janganClear($temp){
        if(isset($_POST[$temp]) && $_POST[$temp]!=""){
            echo " value='".$_POST[$temp]."'";
        }
    }

    function konversi($nilaiTemp){
        switch($nilaiTemp){
            case 0:
                echo "Nol";
                break;
            case ($nilaiTemp > 0 && $nilaiTemp < 10):
                echo "Satuan";
                break;
            case $nilaiTemp>999:
                echo "Anda Menginput Melebihi Limit Bilangan";
                break;
            case $nilaiTemp > 99 && $nilaiTemp <1000:
                echo "Ratusan";
                break;
            case $nilaiTemp > 10 && $nilaiTemp < 100:
                echo "Puluhan";
                break;
            case $nilaiTemp < 0:
                echo "negatif";
                break;
        }
    }
?>

<form action="" method="POST">
    <label for="">Nilai: </label>
    <input type="text" name="nilai" <?php janganClear("nilai")?>><br>
    <button type="submit">Konversi</button><br>
    <h2>Hasil: <?php konversi($nilai);?></h2> 
</form>