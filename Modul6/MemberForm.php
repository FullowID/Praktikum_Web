<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_member'];

if ($form == 'update') {
    $dataMember = GetDataMemberById($conn, $id);
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $password_member = $_POST['password_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        UpdateMember($conn, $nama_member, $nomor_member, $password_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $password_member = $_POST['password_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        AddMember($conn, $nama_member, $nomor_member, $password_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
} else if ($form == 'delete') {
    DeleteMember($conn, $id);
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
            <p class="fs-2 p-4 mt-2">Form Tambah Member</p>
            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="nama_member" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" name="nama_member" id="nama_member">

                    <label for="nomor_member" class="form-label">Nomor Member</label>
                    <input type="text" class="form-control" name="nomor_member" id="nomor_member">

                    <label for="password_member" class="form-label">Password Member</label>
                    <input type="text" class="form-control" name="password_member" id="password_member">

                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">

                    <label for="tgl_mendaftar" class="form-label">Tanggal Mendaftar</label>
                    <input type="datetime-local" class="form-control" name="tgl_mendaftar" id="tgl_mendaftar">

                    <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                    <input type="date" class="form-control" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
                    <button class="btn btn-success mt-2" name='tambah' type="submit">Tambahkan Data</button>

                </form>
                <a href='Member.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>

    <?php elseif ($form == 'update') : ?>
        <div class="container bg-secondary bg-opacity-50 mt-5 rounded">
            <p class="fs-2 p-4 mt-2">Form Update Member</p>
            <div class="p-4">
                <form class="mb-2" method="post">

                    <label for="nama_member" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" value="<?php $dataMember->nama_member;
                                                                    echo "$dataMember->nama_member" ?>" name="nama_member" id="nama_member">

                    <label for="nomor_member" class="form-label">Nomor Member</label>
                    <input type="text" class="form-control" value="<?php $dataMember->nomor_member;
                                                                    echo "$dataMember->nomor_member" ?>" name="nomor_member" id="nomor_member">

                    <label for="password_member" class="form-label">Password Member</label>
                    <input type="text" class="form-control" value="<?php $dataMember->password_member;
                                                                    echo "$dataMember->password_member" ?>" name="password_member" id="password_member">

                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="<?php $dataMember->alamat;
                                                                    echo "$dataMember->alamat" ?>" name="alamat" id="alamat">

                    <label for="tgl_mendaftar" class="form-label">Tanggal Mendaftar</label>
                    <input type="datetime-local" class="form-control" value="<?php $dataMember->tgl_mendaftar;
                                                                                echo "$dataMember->tgl_mendaftar" ?>" name="tgl_mendaftar" id="tgl_mendaftar">

                    <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                    <input type="date" class="form-control" value="<?php $dataMember->tgl_terakhir_bayar;
                                                                    echo "$dataMember->tgl_terakhir_bayar" ?>" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
                    <button class="btn btn-success mt-2" name='update' type="submit">Update Member</button>

                </form>
                <a href='Member.php'><button class="btn btn-danger text-white">Cancel</button></a>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>