<?php
include("koneksi.php");

$id_peminjaman = $_POST["ID_Peminjaman"];
$datenow = date("Y-m-d");

$insert = mysqli_query($connection, "INSERT INTO pengembalian VALUES (null, '$id_peminjaman', '$datenow')");
if ($insert) {
    $select = mysqli_query($connection, "SELECT ID_BUKU FROM peminjaman WHERE ID_PEMINJAMAN = $id_peminjaman");
    while ($row = mysqli_fetch_assoc($select)) {
        $id_buku = $row['ID_BUKU'];
    }
    $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
    while ($row = mysqli_fetch_assoc($select)) {
        $stok = $row['STOK_BUKU'];
    }
    $stok_buku = (int)$stok + 1;
    $select = mysqli_query($connection, "Select BATAS_PENGEMBALIAN FROM peminjaman WHERE ID_PEMINJAMAN = $id_peminjaman");
    $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
    while ($row = mysqli_fetch_assoc($select)) {
        $date = $row['BATAS_PENGEMBALIAN'];
    }
    if ($datenow > $date) {
?>
        <script>
            alert("Anda Harus Membayar Denda Rp.5000");
        </script>
    <?php
    }
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