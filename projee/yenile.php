<?php
include "baglanti.php";
$con=mysqli_connect("localhost","root","","phpdersler");

$gelen = $_GET['Git'];

$ad = $_POST['ad'];
$sifre = $_POST['sifre'];

$duzenle = mysqli_query($con,"UPDATE dersler SET ad='$ad', sifre='$sifre' WHERE id='$gelen'");
header('Location: adminpanel.php');
?>
