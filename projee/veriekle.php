<?php

    require_once 'baglanti.php';

 if ($_POST){

      $ad= isset($_POST['ad']) ? $_POST['ad'] : '';
      $sifre= isset($_POST['sifre']) ? $_POST['sifre'] : '';
      $eposta= isset($_POST['eposta']) ? $_POST['eposta'] : '';
      $cinsiyet= isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';

      if (!$ad || !$sifre || !$eposta || !$cinsiyet) {
           echo "<div class=beyaz>Boş Bırakmayınız";
      }else{
       $kaydet = $db->prepare("INSERT INTO dersler SET ad =?,sifre=?, cinsiyet=? ,Admin=?, resim_ad=?, eposta=?");
       $ekle = $kaydet->execute(array($ad,$sifre,$cinsiyet,0,""));

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
      <div class="title">
Giriş Yapınız</div>
<form action="giris.php" method="post">
        <div class="field">
          <input type="text" name="ad2" required>
          <label>Kullanıcı Adı</label>
        </div>
        <div class="field">
          <input type="password" name="sifre2" required>
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
          <input type="submit" name="giris" value="Giriş Yap">
        </div>
<div class="signup-link">
Kayıt Olmadınmı ? <a href="Kayitol.php">Kayıt Ol</a></div>
</form>
</div>
</body>
</html>
