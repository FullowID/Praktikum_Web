<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<?php
$panjang = NULL;
$lebar = NULL;
$nilai = NULL;
$nilaiArr = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["panjang"]))
        $panjang = $_POST["panjang"];

    if (isset($_POST["lebar"]))
        $lebar = $_POST["lebar"];

    if (isset($_POST["nilai"]))
        $nilai = $_POST["nilai"];
}

function janganClear($temp)
{
    if (isset($_POST[$temp]) && $_POST[$temp] != "") {
        echo " value='" . $_POST[$temp] . "'";
    }
}

?>

<form method="POST">
    Panjang <input type="number" name="panjang" <?php if (isset($_POST["nilai"]))  echo " value='" . $_POST['nilai'] . "'"; ?>> </input> <br>
    Lebar <input type="number" name="lebar" <?php if (isset($_POST["nilai"]))  echo " value='" . $_POST['nilai'] . "'"; ?>> </input><br>
    Nilai <input type="text" name="nilai" <?php JanganClear('nilai') ?>> </input><br>
    <button type="submit">Cetak</button>
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilaiArr = explode(" ", $nilai);
}
?>

<?php
$n = 0;

if (!empty($nilaiArr)) {
    if (($lebar * $panjang) != count($nilaiArr)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
        for ($i = 0; $i < $lebar; $i++) {
            echo "<table>";
            echo "<tr>";
            for ($j = 0; $j < $panjang; $j++) {
                echo "<td>" . $nilaiArr[$n] . "</td>";
                $n++;
            }
            echo "</tr>";
            echo "</table>";
        }
    }
}
?>