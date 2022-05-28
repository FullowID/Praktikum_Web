<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_buku'];

if ($form == 'update') {
    $dataBuku = GetDataBukuById($conn, $id);
    if (isset($_POST['judul_buku'])) {
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        UpdateBuku($conn, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['judul_buku'])) {
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        AddBuku($conn, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    }
} else if ($form == 'delete') {
    DeleteBuku($conn, $id);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


    <?php if ($form == 'tambah') : ?>
        <div class="container bg-secondary bg-opacity-50 mt-5 rounded">
            <p class="fs-2 p-4 mt-2">Form Tambah Buku</p>
            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="judul_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="judul_buku">

                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis">

                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit">

                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit">
                    <button class="btn btn-success mt-2" name='tambah' type="submit">Tambahkan Data</button>

                </form>
                <a href='Buku.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>

    <?php elseif ($form == 'update') : ?>
        <div class="container bg-secondary bg-opacity-50 mt-5 rounded">
            <p class="fs-2 p-4 mt-2">Form Update Buku</p>
            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" value="<?php $dataBuku->judul_buku;
                                                                    echo "$dataBuku->judul_buku" ?>" name="judul_buku" id="judul_buku">

                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" value="<?php $dataBuku->penulis;
                                                                    echo "$dataBuku->penulis" ?>" name="penulis" id="penulis">

                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" value="<?php $dataBuku->penerbit;
                                                                    echo "$dataBuku->penerbit" ?>" name="penerbit" id="penerbit">

                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" value="<?php $dataBuku->tahun_terbit;
                                                                    echo "$dataBuku->tahun_terbit" ?>" name="tahun_terbit" id="tahun_terbit">
                    <button class="btn btn-success mt-2" name='update' type="submit">Update Buku</button>

                </form>
                <a href='Buku.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>