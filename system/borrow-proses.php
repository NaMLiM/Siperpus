<?php
include("koneksi.php");

$id_buku = $_POST["ID_Buku"];
$id_anggota = $_POST["ID_Anggota"];
$datenow = date("Y-m-d");
$limit = date('Y-m-d', strtotime('+30 days'));

$check_limit = mysqli_query($connection, "SELECT ID_ANGGOTA FROM peminjaman WHERE ID_ANGGOTA = $id_anggota");
$check_duplicate =  mysqli_query($connection, "SELECT ID_ANGGOTA, ID_BUKU FROM peminjaman WHERE ID_ANGGOTA = $id_anggota AND ID_BUKU  = $id_buku");
$check_buku = mysqli_query($connection, "SELECT ID_BUKU FROM buku WHERE ID_BUKU = $id_buku");
$check_anggota = mysqli_query($connection, "SELECT ID_ANGGOTA FROM anggota WHERE ID_ANGGOTA = $id_anggota");

if (mysqli_num_rows($check_duplicate) > 0) {
?>
    <script>
        alert("Anda Tidak Dapat Meminjam Buku Yang Sama !");
        document.location = "../index.php";
    </script>
<?php
} else if (mysqli_num_rows($check_limit) >= 5) {
?>
    <script>
        alert("Anda Sudah Mencapai Batas Peminjaman !");
        document.location = "../index.php";
    </script>
<?php
} else if (mysqli_num_rows($check_buku) <= 0) {
?>
    <script>
        alert("Buku Tidak Tersedia !");
        document.location = "../index.php";
    </script>
<?php
} else if (mysqli_num_rows($check_anggota) <= 0) {
?>
    <script>
        alert("Anggota Tidak Ada !");
        document.location = "../index.php";
    </script>
    <?php
} else {
    $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
    while ($row = mysqli_fetch_assoc($select)) {
        $stok = $row['STOK_BUKU'];
    }
    $stok_buku = (int)$stok;
    if ($stok_buku > 0) {
        $insert = mysqli_query($connection, "INSERT INTO peminjaman VALUES (null, '$id_buku', '$id_anggota', '$datenow', '$limit')");
        $stok_buku -= 1;
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
            alert("Stok Buku Habis !");
            document.location = "../index.php";
        </script>
<?php
    }
}
?>