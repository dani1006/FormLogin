<?php
    $servername = "localhost";
    $database = "Dani_PBD";
    $username = "root";
    $password = "";
    $connect = mysqli_connect($servername,$username,$password,$database);


    if(!$connect)
    exit("Gagal Koneksi Database");
?>