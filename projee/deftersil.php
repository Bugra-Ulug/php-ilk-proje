<?php

include "baglanti.php";

$gelen=$_GET['sil'];

$con=mysqli_connect("localhost","root","","phpdersler");

$temizle=mysqli_query($con,"DELETE FROM defter WHERE id='$gelen'");
header('location:defteradmin.php');

?>
