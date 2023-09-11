<hr>
 <center><a class="ayazisi">ADMİN SAYFASI</a>
<hr>
<?php

$link = mysqli_connect("localhost","root","","phpdersler");
include "baglanti.php";

  $dersler = mysqli_query($link,"SELECT * FROM dersler");
             while ($row=mysqli_fetch_array($dersler)) {
               $id = $row['id'];
               $ad = $row['ad'];
               $sifre = $row['sifre'];

                echo "<b class='btn'> Kullanıcı Adı : $ad <br><br> Şifre : $sifre</b> <br><br> <a href='guncelle.php?Git=$id' class='btn'>Düzenle</a><hr>";
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

  </body>
</html>
