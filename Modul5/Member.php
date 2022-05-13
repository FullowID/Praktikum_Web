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
    <title>Data Member</title>
</head>

<body>
    <a href='MemberForm.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataMember($conn) as $row) : ?>
            <tr>
                <td><?= $row->nama_member; ?></td>
                <td><?= $row->nomor_member; ?></td>
                <td><?= $row->alamat; ?></td>
                <td><?= $row->tgl_mendaftar; ?></td>
                <td><?= $row->tgl_terakhir_bayar; ?></td>
                <td>
                    <a href='MemberForm.php?id_member=<?= $row->id_member ?>&form=update'>edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='MemberForm.php?id_member=<?= $row->id_member ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>