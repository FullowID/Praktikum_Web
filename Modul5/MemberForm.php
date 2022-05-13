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
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        UpdateMember($conn, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        AddMember($conn, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
} else if ($form == 'delete') {
    DeleteMember($conn, $id);
}

?>

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <label for="nama_member">Tambah Nama Member</label>
        <input type="text" name="nama_member" id="nama_member">

        <label for="nomor_member">Tambah Nomor Member</label>
        <input type="text" name="nomor_member" id="nomor_member">

        <label for="alamat">Tambah Alamat</label>
        <input type="text" name="alamat" id="alamat">

        <label for="tgl_mendaftar">Tambah Tanggal Mendaftar</label>
        <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar">

        <label for="tgl_terakhir_bayar">Tanggal Tanggal Terakhir Bayar</label>
        <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
        <button name='tambah' type="submit">Tambahkan Data</button>
    </form>

<?php elseif ($form == 'update') : ?>
    <form method="post">

        <label for="nama_member">Nama Member</label>
        <input type="text" value="<?php $dataMember->nama_member;
                                    echo "$dataMember->nama_member" ?>" name="nama_member" id="nama_member">

        <label for="nomor_member">Nomor Member</label>
        <input type="text" value="<?php $dataMember->nomor_member;
                                    echo "$dataMember->nomor_member" ?>" name="nomor_member" id="nomor_member">

        <label for="alamat">Alamat</label>
        <input type="text" value="<?php $dataMember->alamat;
                                    echo "$dataMember->alamat" ?>" name="alamat" id="alamat">
                                    
        <label for="tgl_mendaftar">Tanggal Mendaftar</label>
        <input type="datetime-local" value="<?php $dataMember->tgl_mendaftar;
                                    echo "$dataMember->tgl_mendaftar" ?>" name="tgl_mendaftar" id="tgl_mendaftar">

        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label>
        <input type="date" value="<?php $dataMember->tgl_terakhir_bayar;
                                    echo "$dataMember->tgl_terakhir_bayar" ?>" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
        <button name='update' type="submit">Update Member</button>
    </form>
<?php endif; ?>