<?php
require 'Model.php';
require 'Koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-inverse bg-secondary bg-opacity-25">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Data Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="Buku.php">Buku</a></li>
            <li><a class="nav-link" href="Member.php">Member</a></li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Peminjaman</a></li>
          </ul>
          </div>
      </div>
    </nav>

    <a href='PeminjamanForm.php?form=tambah'><button class="btn btn-success text-white mt-2">Tambah Data</button></a>
    <table class="table table-striped mt-2">
        <tr class="table-dark">
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Aksi</th>
        </tr>
        <?php foreach (GetAllDataPeminjaman($conn) as $row) : ?>
            <tr>
                <td><?= $row->tgl_pinjam; ?></td>
                <td><?= $row->tgl_kembali; ?></td>
                <td>
                    <a href='PeminjamanForm.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=update'><button class="btn btn-primary text-white">edit</button></a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='PeminjamanForm.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=delete'><button class="btn btn-danger text-white">Delete</button></a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>