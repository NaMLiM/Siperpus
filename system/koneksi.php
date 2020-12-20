<?php

    $connection = mysqli_connect("localhost", "root", "", "siperpus");
    if(mysqli_connect_errno()){
        echo mysqli_connect_errno();
    }

?>