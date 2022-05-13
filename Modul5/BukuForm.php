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

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <label for="judul_buku">Tambah Nama Buku</label>
        <input type="text" name="judul_buku" id="judul_buku">

        <label for="penulis">Tambah Penulis</label>
        <input type="text" name="penulis" id="penulis">

        <label for="penerbit">Tambah Penerbit</label>
        <input type="text" name="penerbit" id="penerbit">

        <label for="tahun_terbit">Tambah Tahun Terbit</label>
        <input type="text" name="tahun_terbit" id="tahun_terbit">
        <button name='tambah' type="submit">Tambahkan Data</button>
    </form>

<?php elseif ($form == 'update') : ?>
    <form method="post">

        <label for="judul_buku">Judul Buku</label>
        <input type="text" value="<?php $dataBuku->judul_buku;
                                    echo "$dataBuku->judul_buku" ?>" name="judul_buku" id="judul_buku">

        <label for="penulis">Penulis</label>
        <input type="text" value="<?php $dataBuku->penulis;
                                    echo "$dataBuku->penulis" ?>" name="penulis" id="penulis">

        <label for="penerbit">Penerbit</label>
        <input type="text" value="<?php $dataBuku->penerbit;
                                    echo "$dataBuku->penerbit" ?>" name="penerbit" id="penerbit">
                                    
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" value="<?php $dataBuku->tahun_terbit;
                                    echo "$dataBuku->tahun_terbit" ?>" name="tahun_terbit" id="tahun_terbit">

        <button name='update' type="submit">Update Buku</button>
    </form>
<?php endif; ?>