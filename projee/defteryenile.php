<?php
include "baglanti.php";
$con=mysqli_connect("localhost","root","","phpdersler");

$gelen = $_GET['Git'];

$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];


$duzenle = mysqli_query($con,"UPDATE defter SET isim='$isim', soyisim='$soyisim', email='$email', mesaj='$mesaj' WHERE id='$gelen'");
header('Location: defteradmin.php');
?>
