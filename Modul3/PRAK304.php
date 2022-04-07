<?php
$jumlahBintang = NULL;
$alamatGambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['jumlahBintang'])) {
        $jumlahBintang = $_POST['jumlahBintang'];
    }
}

if (isset($_POST['tambah'])) {
    $jumlahBintang++;
} else if (isset($_POST['kurang'])) {
    $jumlahBintang--;
}

function janganClear($temp)
{
    if (isset($_POST[$temp]) && $_POST[$temp] != "") {
        echo " value='" . $_POST[$temp] . "'";
    }
}
?>

<?php
if (empty($jumlahBintang)) : ?>
    <form method="POST" action="">
        Jumlah Bintang <input type="number" name="jumlahBintang"><br>
        <button type="submit">Submit</button><br>
    </form>
<?php endif;

if (isset($_POST['jumlahBintang']) && $jumlahBintang != 0)
    echo "Jumlah Bintang : $jumlahBintang<br>";

for ($i = 0; $i < $jumlahBintang; $i++) {
    echo '<img src="' . $alamatGambar . '"width = 100 height = 100>';
}

if (!empty($jumlahBintang)) : ?>

    <form action="" method="POST">
        <button name="tambah">Tambah</button>
        <input type='hidden' name='jumlahBintang' value='<?= $jumlahBintang; ?>' />
        <button name="kurang">Kurang</button>
    </form>
<?php endif; ?>