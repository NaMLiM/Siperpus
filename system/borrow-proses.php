<?php
  include("koneksi.php");

  $data = mysqli_query($connection,"select * from riwayat_pinjam");
  //$nik = $_POST['nik'];
  $id_buku = $_POST['id_buku'];

  $sql = $pdo->prepare("INSERT INTO riwayat_pinjam(id_buku) VALUES(:id_buku)");
  $sql->bindParam(':nik', $NIK);
  $sql->bindParam(':id_buku', $ID_Buku);
  $sql->execute();

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:../index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../pages/borrow-book.php'>Kembali Ke Form</a>";
  }
?>