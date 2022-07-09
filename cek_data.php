<?php
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['pswd'];

$select=mysqli_query($connect,"SELECT * FROM authentikasi WHERE username='$username' AND password='$password'");
$chek = mysqli_num_rows($select);
if($chek>0){
    echo "<script type=\"text/javascript\">".
        "alert('Berhasil Login');".
        "location.href='webku.php'".
        "</script>";
}
else{
    echo "<script type=\"text/javascript\">".
    "alert('Gagal Login');".
    "location.href='login.php'".
    "</script>";}

?>

