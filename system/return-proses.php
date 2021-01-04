<?php
include("koneksi.php");

$id_buku = $_POST["ID_Buku"];
$id_anggota = $_POST["ID_Anggota"];
$opsi = $_POST["opsi"];
$datenow = date("Y-m-d");

$select = mysqli_query($connection, "SELECT * FROM peminjaman WHERE ID_Buku = $id_buku AND ID_ANGGOTA = $id_anggota");
while ($row = mysqli_fetch_assoc($select)) {
    $id_peminjaman = $row['ID_PEMINJAMAN'];
}
if (mysqli_num_rows($select) > 0) {
    if ($opsi == "Pengembalian") {
        $select = mysqli_query($connection, "SELECT ID_BUKU FROM peminjaman WHERE ID_PEMINJAMAN = $id_peminjaman");
        while ($row = mysqli_fetch_assoc($select)) {
            $id_buku = $row['ID_BUKU'];
        }
        $select = mysqli_query($connection, "SELECT STOK_BUKU FROM buku WHERE ID_BUKU = $id_buku");
        while ($row = mysqli_fetch_assoc($select)) {
            $stok = $row['STOK_BUKU'];
        }
        $stok_buku = (int)$stok + 1;
        $select = mysqli_query($connection, "SELECT BATAS_PENGEMBALIAN FROM peminjaman WHERE ID_PEMINJAMAN = $id_peminjaman");
        while ($row = mysqli_fetch_assoc($select)) {
            $date = $row['BATAS_PENGEMBALIAN'];
        }
        if ($datenow > $date) {
?>
            <script>
                alert("Anda Harus Membayar Denda Rp.5000 !");
            </script>
            <?php
        }
        $update = mysqli_query($connection, "UPDATE buku SET STOK_BUKU = $stok_buku WHERE ID_BUKU = $id_buku");
        $delete = mysqli_query($connection, "DELETE FROM peminjaman WHERE ID_ANGGOTA = $id_anggota");
        if ($update) {
            if ($delete) {
            ?>
                <script>
                    alert("Buku Berhasil Dikembalikan !");
                    document.location = "../index.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Buku Gagal Dikembalikan !");
                    document.location = "../index.php";
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Stok Buku Gagal DiUpdate !");
                document.location = "../index.php";
            </script>
        <?php
        }
    } else if ($opsi == "Perpanjangan") {
        $select = mysqli_query($connection, "SELECT BATAS_PENGEMBALIAN FROM peminjaman WHERE ID_PEMINJAMAN = $id_peminjaman");
        while ($row = mysqli_fetch_assoc($select)) {
            $batas = $row['BATAS_PENGEMBALIAN'];
        }
        $limit = date('Y-m-d', strtotime($batas . ' +3 day'));
        $update = mysqli_query($connection, "UPDATE peminjaman SET BATAS_PENGEMBALIAN = '$limit' WHERE ID_PEMINJAMAN = $id_peminjaman");
        if ($update) {
        ?>
            <script>
                alert("Update Perpanjangan Berhasil !");
                document.location = "../index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Update Perpanjangan Gagal !");
                document.location = "../index.php?page=return-book";
            </script>
    <?php
        }
    }
} else {
    ?>
    <script>
        alert("ID Buku/Anggota Salah !");
        document.location = "../index.php?page=return-book";
    </script>
<?php
}

?>