<?php
$tinggi = NULL;
$alamat = NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["tinggi"])) {
        $tinggi = $_POST["tinggi"];
    }
    if (isset($_POST["alamat"])) {
        $alamat = $_POST["alamat"];
    }
}

function janganClear($temp)
{
    if (isset($_POST[$temp]) && $_POST[$temp] != "") {
        echo " value='" . $_POST[$temp] . "'";
    }
}

?>

<form action="" method="POST">
    Tinggi: <input type="text" name="tinggi" <?php janganClear("tinggi") ?>><br>
    Alamat Gambar: <input type="text" name="alamat" <?php janganClear("alamat") ?>><br>
    <button type="submit">Cetak</button>
</form>

<?php
$i = 0;
$i2 = 0;

while ($i < $tinggi) {
    while ($i2 < $tinggi) {
        if ($i2 >= $i)
            echo '<img src="' . $alamat . '"width = 20 height = 20>';

        else
            echo str_repeat('&nbsp;', 5);

        $i2++;
    }
    $i2 = 0;
    echo "<br>";
    $i++;
}
?>