<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_peminjaman'];

if ($form == 'update') {
    $dataPeminjaman = GetDataPeminjamanById($conn, $id);
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        UpdatePeminjaman($conn, $tgl_pinjam, $tgl_kembali, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        AddPeminjaman($conn, $tgl_pinjam, $tgl_kembali);
    }
} else if ($form == 'delete') {
    DeletePeminjaman($conn, $id);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <?php if ($form == 'tambah') : ?>
        <div class="container bg-secondary bg-opacity-50 mt-5 rounded">
            <p class="fs-2 p-4 mt-2">Form Tambah Peminjaman</p>

            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam">

                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali">
                    <button class="btn btn-success mt-2" name='tambah' type="submit">Tambahkan Data</button>

                </form>
                <a href='Peminjaman.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>

    <?php elseif ($form == 'update') : ?>
        <div class="container bg-secondary bg-opacity-50 mt-5 rounded">
            <p class="fs-2 p-4 mt-2">Form Update Peminjaman</p>
            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" value="<?php $dataPeminjaman->tgl_pinjam;
                                                                    echo "$dataPeminjaman->tgl_pinjam" ?>" name="tgl_pinjam" id="tgl_pinjam">

                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" value="<?php $dataPeminjaman->tgl_kembali;
                                                                    echo "$dataPeminjaman->tgl_kembali" ?>" name="tgl_kembali" id="tgl_kembali">
                    <button class="btn btn-success mt-2" name='update' type="submit">Update Peminjaman</button>

                </form>
                <a href='Peminjaman.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>