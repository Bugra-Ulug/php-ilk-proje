<div class="topnav" href="menuu.css">
  <a class="active" href="adminkayit.php"><i class="fas fa-home"></i> Kayıt Ekle</a>
  <a href="düzenle.php"><i class="fas fa-user"></i> Kullanıcı Düzenle</a>
  <a href="defteradmin.php"><i class="fas fa-users"></i> Defter Düzenle</a>
  <a href="veriekle.php"><i class="fas fa-traffic"></i> Çıkış</a>
</div>

<br>
<br>
 <center><a class="ayazisi">ADMİN SAYFASI</a>
<hr>
<?php

include "baglanti.php";

$con=mysqli_connect("localhost","root","","phpdersler");

$veri = mysqli_query($con,"SELECT * FROM dersler");
        while ($row=mysqli_fetch_array($veri)) {
          $id = $row['id'];
          $ad = $row['ad'];
          $sifre = $row['sifre'];

          echo "<b class='btn'> Kullanıcı Adı : $ad <br><br> Şifre : $sifre</b> <br><br> <a href='düzenle.php?Git=$id' class='btn'>Düzenle</a>  <a href='sil.php?sil=$id' class='btn'>Kullanıcıyı Sil</a><hr>";
        }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="karisik.css">
    <link rel="stylesheet" href="menuu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="adminkayit.php" method="post">
      <div class="">
        <input type="submit" class="btn" name="button" value="Kayıt Ekleyin">
      </div>
    </form>

    <form action="defteradmin.php" method="post">
      <div>
        <input type="submit" class="btn" name="buttonn" value="Defter Kayıtları">
      </div>
    </form>

    <form action="veriekle.php" method="post">
      <div>
        <input type="submit" class="btn" name="buttonnn" value="Admin Hesaptan Çıkış">
      </div>
    </form>
  </body>
</html>
