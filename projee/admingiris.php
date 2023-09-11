<?php

session_start();
require_once 'baglanti.php';
if ($_POST) {

  $isim= isset($_POST['isim']) ? $_POST['isim'] : '';
  $parola= isset($_POST['sifre']) ? $_POST['sifre'] : '';

if (!$isim || !$parola){
  echo "Boş Alan Bırakmayınız.";
}else {
  $user = $db->query("SELECT * FROM dersler WHERE ad ='$isim' AND  sifre = '$parola' AND Admin=1")->fetch();
  if ($user) {
    $_SESSION['user'] = $user;
    header("location:adminpanel.php");
  }else {
    echo "Bilgiler Eşleşmiyor<br><br>";
  }
}
}
?>
  <br>
  <br>
  <center><a class="ayazisi">Admin Sayfası</a>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="menuu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
       <div class="form">
         <input type="text" name="isim" value="" placeholder="Kullanıcı Adınızı Giriniz">
         <input type="password" name="sifre" value="" placeholder="Şifrenizi Giriniz">
         <input type="submit" name="giris" value="Giriş Yap" class="btn">
       </div>
     </form>
  </body>
</html>
