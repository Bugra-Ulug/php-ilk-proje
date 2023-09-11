<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=phpdersler;charset=utf8;","root","");
if ($_POST) {

  $ad2= isset($_POST['ad2']) ? $_POST['ad2'] : '';
  $sifre2= isset($_POST['sifre2']) ? $_POST['sifre2'] : '';
  $id= isset($_POST['id']) ? $_POST['id'] : '';

if (!$ad2 || !$sifre2){
  die("Boş Bırakmayınız");
}

$user = $db->query("SELECT * FROM dersler WHERE ad ='$ad2' AND sifre = '$sifre2' AND Admin=0")->fetch();

if ($user) {
  $_SESSION['user'] = $user;
  header("location:menu.php");
}else {
  echo "Bilgiler Eşleşmiyor";
}
}
?>
