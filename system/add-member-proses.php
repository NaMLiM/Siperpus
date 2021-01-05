<?php
include("koneksi.php");

$id_anggota = $_POST["ID_Anggota"];
$nama = $_POST["Nama"];
$noHP = $_POST["NoHP"];
$username = $_POST["username"];
$password = $_POST["password"];

$insert = mysqli_query($connection, "INSERT INTO anggota VALUES ('$id_anggota', '$nama', '$noHP', '$username', '$password')");

if ($insert) {
?>
    <script>
        alert("Pendaftaran Anggota Berhasil !");
        document.location = "../index.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Pendaftaran Anggota Gagal !");
        document.location = "../index.php?page=add-member";
    </script>
<?php
}
?>