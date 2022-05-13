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
    <title>Data Peminjaman</title>
</head>

<body>
    <a href='PeminjamanForm.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataPeminjaman($conn) as $row) : ?>
            <tr>
                <td><?= $row->tgl_pinjam; ?></td>
                <td><?= $row->tgl_kembali; ?></td>
                <td>
                    <a href='PeminjamanForm.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=update'>edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='PeminjamanForm.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>