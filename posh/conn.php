<?php
    $servernama = "localhost";
    $username =  "root";
    $password = "";
    $databasename = "api";

    $conn = mysqli_connect($servernama,$username,$password,$databasename);
    if(!$conn){
        die ("koneksi tidak berhasil ");
    }
?>