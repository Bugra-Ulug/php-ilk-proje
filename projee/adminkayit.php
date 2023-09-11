<?php

    require_once 'baglanti.php';

 if ($_POST){

      $ad= isset($_POST['ad']) ? $_POST['ad'] : '';
      $sifre= isset($_POST['sifre']) ? $_POST['sifre'] : '';

      if (!$ad) {
           echo "Boş Bırakmayınız";
     }else{
       $kaydet = $db->prepare("INSERT INTO dersler SET ad =?,sifre=?");
       $ekle = $kaydet->execute(array($ad,$sifre));

       if ($ekle) {
            echo "Kayıt Başarıyla Kayıt Edildi";
       }else {
         echo "Biri Hata Oluştu";
       }

       header('Location: adminpanel.php');
     }


}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css.css"
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <div class="form">
        <input type="text" name="ad" placeholder="Kullanıcı Adı Giriniz" /><br>
        <input type="text" name="sifre" placeholder="Şifrenizi Giriniz" /><br>
        <input type="submit" class="btn" value="Kayıt Ol" />
      </div>
    </form>
  </body>
</html>
