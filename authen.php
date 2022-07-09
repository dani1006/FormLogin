<?php
include('koneksi.php');
	 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert=mysqli_query($connect,"INSERT INTO authentikasi SET username='$username', email='$email', password='$password'");
if($insert){
    echo "<script type=\"text/javascript\">".
        "alert('Berhasil mendaftar');".
        "location.href='login.php'".
        "</script>";
}
else{
    echo "<script type=\"text/javascript\">".
    "alert('Gagal mendaftar');".
    "location.href='register.php'".
    "</script>";
}
?>
