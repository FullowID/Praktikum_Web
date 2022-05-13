<?php
require 'Model.php';
require 'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <a href='BukuForm.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataBuku($conn) as $row) : ?>
            <tr>
                <td><?= $row->judul_buku; ?></td>
                <td><?= $row->penulis; ?></td>
                <td><?= $row->penerbit; ?></td>
                <td><?= $row->tahun_terbit; ?></td>
                <td>
                    <a href='BukuForm.php?id_buku=<?= $row->id_buku ?>&form=update'>edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='BukuForm.php?id_buku=<?= $row->id_buku ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>