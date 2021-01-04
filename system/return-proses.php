<?php
include("koneksi.php");

$id_buku = $_POST["ID_Peminjaman"];
$datenow = date("Y-m-d");

$insert = mysqli_query($connection, "INSERT INTO pengembalian VALUES (null, '$id_peminjaman', '$datenow')");
if ($insert) {
    $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
    while ($row = mysqli_fetch_assoc($select)) {
        $stok = $row['STOK_BUKU'];
    }
    $stok_buku = (int)$stok + 1;
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