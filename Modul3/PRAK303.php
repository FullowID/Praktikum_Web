<?php
$batasBawah = NULL;
$batasAtas = NULL;
$alamatGambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

function janganClear($temp)
{
    if (isset($_POST[$temp]) && $_POST[$temp] != "") {
        echo " value='" . $_POST[$temp] . "'";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['batasBawah'])) $batasBawah = $_POST['batasBawah'];
    if (isset($_POST['batasAtas'])) $batasAtas = $_POST['batasAtas'];
}
?>

<form method="POST" action="">
    Batas Bawah : <input type="number" name="batasBawah" <?php janganClear('batasBawah') ?>><br>
    Batas Atas : <input type="number" name="batasAtas" <?php janganClear('batasAtas') ?>><br>
    <button type="submit">Cetak</button><br>
</form>

<?php
if (isset($_POST['batasBawah']) && isset($_POST['batasAtas'])) {
    do {
        if (($batasBawah + 7) % 5 == 0)
            echo '<img src="' . $alamatGambar . '"width = 20 height = 20>';
        else
            echo " $batasBawah ";

        $batasBawah++;
    } while ($batasBawah <= $batasAtas);
}
?>