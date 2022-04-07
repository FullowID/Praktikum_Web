<?php
$nilai = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nilai"])) $nilai = $_POST["nilai"];
}

function janganClear($temp)
{
    if (isset($_POST[$temp]) && $_POST[$temp] != "") {
        echo " value='" . $_POST[$temp] . "'";
    }
}
?>

<form action="" method="POST">
    Nilai: <input type="number" name="nilai" <?php janganClear("nilai") ?>> <br>
    <button type="submit">Cetak</button><br>
</form>

<?php
$i = 1;
while ($i <= $nilai) {
    if ($i % 2 == 0) {
        echo "<font color=green><h2>Peserta Ke-$i</h2> </font>";
    } else if ($i % 2 == 1) {
        echo "<font color=red><h2>Peserta Ke-$i</h2></font>";
    }
    $i++;
}
?>