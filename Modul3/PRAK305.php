<?php
$input = NULL;
$hasil = NULL;
$inputArray = NULL;
$jumlahHuruf = NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
    }
}
?>

<form method='POST'>
    <input type='text' name='input'></input>
    <button type='submit'>submit</button>
</form>
<br>

<?php
if (isset($_POST['input'])) {
    echo "<h2> Input: </h2>";
    echo $input;
    echo "<br><h2>Output: </h2><br>";
}
?>

<?php
$i = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['input'])) {
        $inputArray = str_split($input);;
        $jumlahHuruf = count($inputArray);
        while ($i < $jumlahHuruf) {
            $banyakPerhuruf = 0;
            while ($banyakPerhuruf < $jumlahHuruf) {
                if ($banyakPerhuruf == 0)
                    echo htmlspecialchars(strtoupper($inputArray[$i]));

                else {
                    echo htmlspecialchars(strtolower($inputArray[$i]));
                }
                $banyakPerhuruf++;
            }
            $i++;
        }
    }
}
?>