<?php
include("koneksi.php");

$nik = $_POST["NIK"];
$nama = $_POST["Nama"];
$noHP = $_POST["NoHP"];
$username = $_POST["username"];
$password = $_POST["password"];

$insert = mysqli_query($connection, "INSERT INTO anggota VALUES ('$nik', '$nama', '$noHP', '$username', '$password')");

if ($insert) {
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
        document.location = "../index.php?page=add-member";
    </script>
<?php
}
?>