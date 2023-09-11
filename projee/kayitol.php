<?php

    require_once 'baglanti.php';

 if ($_POST){

      $ad= isset($_POST['ad']) ? $_POST['ad'] : '';
      $sifre= isset($_POST['sifre']) ? $_POST['sifre'] : '';
      $eposta= isset($_POST['eposta']) ? $_POST['eposta'] : '';

      if (!$ad || !$sifre || !$eposta) {
           echo "<div class=beyaz>Boş Bırakmayınız";
      }else{
       $kaydet = $db->prepare("INSERT INTO dersler SET ad=?,sifre=?,eposta=?,Admin=?, resim_ad=?, mesaj=?, gozukme=0, mtarih=?");
       $ekle = $kaydet->execute(array($ad,$sifre,$eposta,0,"","",0));

       if ($ekle) {
            echo "<div class=beyaz>Kayıt Başarıyla Kayıt Edildi";
       }else {
         echo "<div class=beyaz>Aynı İsimli Bir Kullanıcı Zaten Var";
       }

     }


}


?>

  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <style>
      body{
          background-image: url("image/orman");
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          background-size: cover;
        } 
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="title"> Kayıt Olunuz</div>
<form action="" method="post">
        <div class="field">
          <input type="text" name="ad" required>
          <label>Kullanıcı Adı</label>
        </div>
<div class="field">
          <input type="password" name="sifre" required>
          <label>Parola</label>
        </div>
        <div class="field">
          <input type="text" name="eposta" required>
          <label>Eposta</label>
        </div>
<div class="content">
<div class="pass-link">
<a href="#"></a></div>
</div>
<div class="field">
          <input type="submit" name="giris" value="Kayıt Ol">
        </div>
<div class="signup-link">
Girişmi Yapıcaksın ? <a href="veriekle.php">Giriş Yap</a></div>
</form>
</div>
</body>
</html>