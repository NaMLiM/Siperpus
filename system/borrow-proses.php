<?php
include("koneksi.php");

$id_buku = $_POST["ID_Buku"];
$id_anggota = $_POST["ID_Anggota"];
$datenow = date("Y-m-d");
$limit = date('Y-m-d', strtotime('+3 days'));

$insert = mysqli_query($connection, "INSERT INTO peminjaman VALUES (null, '$id_buku', '$id_anggota', '$datenow', '$limit')");
if ($insert) {
    $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
    while ($row = mysqli_fetch_assoc($select)) {
        $stok = $row['STOK_BUKU'];
    }
    $stok_buku = (int)$stok - 1;
    $update = mysqli_query($connection, "UPDATE buku SET STOK_BUKU = $stok_buku WHERE ID_BUKU = $id_buku");
?>
    <script>
        alert("Data Berhasil Ditambahkan");
        document.location = "../index.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Data Gagal Ditambahkan");
        document.location = "../index.php?page=borrow-book";
    </script>
<?php
}
?>