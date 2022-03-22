<?php
    $nama1 = NULL;
    $nama2 = NULL;
    $nama3 = NULL;

    function janganClear($nama){
        if(isset($_POST[$nama]) && $_POST[$nama]!=""){
            echo " value='".$_POST[$nama]."'";
        }
    }

    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(!empty($_POST['nama1'])){
            $nama1 = $_POST['nama1'];
        }
    
        if(!empty($_POST['nama2'])){
            $nama2 = $_POST['nama2'];
        }

        if(!empty($_POST['nama3'])){
            $nama3 = $_POST['nama3'];
        }
    }

    if (strcasecmp($nama1, $nama2) <= 0){
        if (strcasecmp($nama1, $nama3) <= 0){
            $namaPertama = $nama1;
            if(strcasecmp($nama2, $nama3) <= 0){
                $namaKedua = $nama2;
                $namaKetiga = $nama3;
            }
            else{
                $namaKedua = $nama3;
                $namaKetiga = $nama2;
            }
        }
        else{
            $namaPertama = $nama3;
            $namaKedua = $nama1;
            $namaKetiga = $nama2;
        }
    }

    else if(strcasecmp($nama2, $nama1) <= 0){
        
        if (strcasecmp($nama2, $nama3) <= 0){
            $namaPertama = $nama2;
            if (strcasecmp($nama1, $nama3) <= 0){
                $namaKedua = $nama1;
                $namaKetiga = $nama3;
            }
            else{
                $namaKedua = $nama3;
                $namaKetiga = $nama1;
            }
        }
        else{
            $namaPertama = $nama3;
            $namaKedua = $nama2;
            $namaKetiga = $nama1;
        }
    }

    else if(strcasecmp($nama3, $nama1) <= 0){
        if(strcasecmp($nama3, $nama2) <= 0){
            $namaPertama = $nama3;
            if(strcasecmp($nama1, $nama2) <= 0){
                $namaKedua = $nama1;
                $namaKetiga = $nama2;
            }
            else{
                $namaKedua = $nama2;
                $namaKetiga = $nama1;
            }
        }
        else{
            $namaPertama = $nama2;
            $namaKedua = $nama3;
            $namaKetiga = $nama1;
        }
    }

    else{
        echo "invalid";
    }

?>

<form action="" method="POST">
        <label for="">Nama: 1</label>
        <input type="text" name="nama1" <?php janganClear("nama1")?>><br>

        <label for="">Nama: 2</label>
        <input type="text" name="nama2" <?php janganClear("nama2")?>><br>

        <label for="">Nama: 3</label>
        <input type="text" name="nama3" <?php janganClear("nama3")?>><br>
    <button type="submit">Urutkan</button>
</form>
<h2>Output: </h2>

<?php
    echo $namaPertama."<br/>";
    echo $namaKedua."<br/>";
    echo $namaKetiga;
?>