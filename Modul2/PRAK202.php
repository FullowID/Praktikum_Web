<?php
    $error_nama = "";
    $error_nim = "";
    $error_kelamin = "";
    $nama = NULL;
    $nim = NULL;
    $kelamin = NULL;

    function janganClear($temp){
        if(isset($_POST[$temp]) && $_POST[$temp]!=""){
            echo " value='".$_POST[$temp]."'";
        }
    }

    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(empty($_POST['nama'])){
            $error_nama = "nama tidak boleh kosong";
        }
        else{
            $nama = $_POST['nama'];
        }
        
        if(empty($_POST['nim'])){
            $error_nim = "nim tidak boleh kosong";
        }
        else{
            $nim = $_POST['nim'];
        }

        if(empty($_POST['kelamin'])){
            $error_kelamin = "jenis kelamin tidak boleh kosong";
        }
        else{
            $kelamin = $_POST['kelamin'];
        }
    }
?>

<form action="" method="POST">
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama"<?php janganClear("nama")?>> <font color=red>*<span class="warning"><?php echo $error_nama?></span> </font>
    </div>
    <div>
        <label for="">NIM</label>
        <input type="text" name="nim"<?php janganClear("nim")?>> <font color=red>*<span class="warning"><?php echo $error_nim?></span> </font>
    </div>
        <label for="">Jenis Kelamin: </label><font color=red>*<span class="warning"><?php echo $error_kelamin?></span></font><br/>
        <input type="radio" name="kelamin" value="Laki-laki" <?php if (isset($_POST["kelamin"]) and $_POST["kelamin"] == "Laki-laki") echo "checked";?>>Laki - Laki<br>
        <input type="radio" name="kelamin" value="Perempuan" <?php if (isset($_POST["kelamin"]) and $_POST["kelamin"] == "Perempuan") echo "checked";?> >Perempuan<br>
        <button type="submit">Submit</button>
</form>

<h2>Output: </h2>

<?php
    echo $nama."<br/>";
    echo $nim."<br/>";
    echo $kelamin;
?>