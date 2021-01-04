<?php
include("koneksi.php");

$id_buku = $_POST["ID_Buku"];
$id_anggota = $_POST["ID_Anggota"];
$datenow = date("Y-m-d");
$limit = date('Y-m-d', strtotime('+3 days'));

$check = mysqli_query($connection, "SELECT ID_ANGGOTA FROM peminjaman WHERE ID_ANGGOTA = $id_anggota");
if (mysqli_num_rows($check) > 0) {
?>
    <script>
        alert("Anda Sudah Meminjam !");
        document.location = "../index.php";
    </script>
    <?php
} else {
    $insert = mysqli_query($connection, "INSERT INTO peminjaman VALUES (null, '$id_buku', '$id_anggota', '$datenow', '$limit')");
    if ($insert) {
        $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
        while ($row = mysqli_fetch_assoc($select)) {
            $stok = $row['STOK_BUKU'];
        }
        $stok_buku = (int)$stok - 1;
        $update = mysqli_query($connection, "UPDATE buku SET STOK_BUKU = $stok_buku WHERE ID_BUKU = $id_buku");
        if ($update) {
    ?>
            <script>
                alert("Peminjaman Berhasil !");
                document.location = "../index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Stok Buku Gagal DiUpdate !");
                document.location = "../index.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Peminjaman Gagal !");
            document.location = "../index.php?page=borrow-book";
        </script>
<?php
    }
}
?>