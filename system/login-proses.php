<?php

    include("koneksi.php");
    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $select = mysqli_query($connection, "select * from admin where username='$username' && password='$password'");
    $num = mysqli_num_rows($select);

    if($num == 0){
        ?>
        <script>
            alert("Username atau Password Salah !");
            document.location = "../login.php";
        </script>
        <?php
    }
    else{
        while($data = mysqli_fetch_array($select)){
            $_SESSION["nama_admin"] = $data["nama_admin"];
            $_SESSION["username"] = $data["username"];
        }
        header("location:../index.php");
    }

?>