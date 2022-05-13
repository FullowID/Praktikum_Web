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

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <label for="tgl_pinjam">Tambah Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam">

        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali">
        <button name='tambah' type="submit">Tambahkan Data</button>
    </form>

<?php elseif ($form == 'update') : ?>
    <form method="post">

        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="date" value="<?php $dataPeminjaman->tgl_pinjam;
                                    echo "$dataPeminjaman->tgl_pinjam" ?>" name="tgl_pinjam" id="tgl_pinjam">

        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="date" value="<?php $dataPeminjaman->tgl_kembali;
                                    echo "$dataPeminjaman->tgl_kembali" ?>" name="tgl_kembali" id="tgl_kembali">
        <button name='update' type="submit">Update Peminjaman</button>
    </form>
<?php endif; ?>