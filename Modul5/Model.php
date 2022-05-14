<?php

function GetAllDataPeminjaman($pdo)
{
    $sql = "SELECT * FROM peminjaman";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $peminjamans = $statement->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
    return $peminjamans;
}

function GetDataPeminjamanById($pdo, $id)
{
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $peminjaman = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $peminjaman;
}

function AddPeminjaman($pdo, $tgl_pinjam, $tgl_kembali)
{
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tgl_pinjam, $tgl_kembali]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function UpdatePeminjaman($pdo, $tgl_pinjam, $tgl_kembali, $id)
{
    $sql = "UPDATE peminjaman SET tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tgl_pinjam, $tgl_kembali, $id]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function DeletePeminjaman($pdo, $id)
{
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function GetAllDataMember($pdo)
{
    $sql = "SELECT * FROM member";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $members = $statement->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
    return $members;
}

function GetDataMemberById($pdo, $id)
{
    $sql = "SELECT * FROM member WHERE id_member = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $member = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $member;
}

function AddMember($pdo, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}

function UpdateMember($pdo, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id)
{
    $sql = "UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}

function DeleteMember($pdo, $id)
{
    $sql = "DELETE FROM member WHERE id_member=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}

function GetAllDataBuku($pdo)
{
    $sql = "SELECT * FROM buku";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $bukus = $statement->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
    return $bukus;
}

function GetDataBukuById($pdo, $id)
{
    $sql = "SELECT * FROM buku WHERE id_buku = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $buku = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $buku;
}

function AddBuku($pdo, $judul_buku, $penulis, $penerbit, $tahun_terbit)
{
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$judul_buku, $penulis, $penerbit, $tahun_terbit]);
    $pdo = null;
    header('Location: Buku.php');
    exit();
}

function UpdateBuku($pdo, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id)
{
    $sql = "UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$judul_buku, $penulis, $penerbit, $tahun_terbit, $id]);
    $pdo = null;
    header('Location: Buku.php');
    exit();
}

function DeleteBuku($pdo, $id)
{
    $sql = "DELETE FROM buku WHERE id_buku=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $pdo = null;
    header('Location: Buku.php');
    exit();
}
