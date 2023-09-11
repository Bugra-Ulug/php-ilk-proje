<hr>
 <center><a class="ayazisi">ADMİN SAYFASI</a>
<hr>
<?php

include "baglanti.php";

$con=mysqli_connect("localhost","root","","phpdersler");

$veri = mysqli_query($con,"SELECT * FROM defter");
        while ($row=mysqli_fetch_array($veri)) {
          $id = $row['id'];
          $isim = $row['isim'];
          $soyisim = $row['soyisim'];
          $email = $row['email'];
          $mesaj = $row['mesaj'];
          $tarih = $row['tarih'];

          echo "<b class='btn'> Kullanıcı Adı : $isim <br><br> Soyisim : $soyisim <br><br> E Posta : $email <br><br> Mesaj : $mesaj <br><br>
          <a href='defterguncelle.php?Git=$id' class='btn'>Düzenle</a>  <a href='deftersil.php?sil=$id' class='btn'>Kullanıcıyı Sil</a><hr>";
        }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="karisik.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="adminpanel.php" method="post">
      <div class="">
        <input type="submit" class="btn" name="buttton" value="Geri">
      </div>
    </form>
  </body>
</html>
