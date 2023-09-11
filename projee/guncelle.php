<?php
 $linkk = mysqli_connect("localhost","root","","phpdersler");
 include "baglanti.php";

 $gelen = $_GET['Git'];

 $makale = mysqli_fetch_array(mysqli_query($linkk,"SELECT * FROM dersler WHERE id='$gelen'"));
 $id = $makale['id'];
 $ad = $makale['ad'];
 $sifre = $makale['sifre'];
    echo "
    <form action='yenile.php?Git=$gelen' method='post'>
      <div class='form'>
        İsim<br>
        <input type='text' name='ad' value='$ad' size='50' /><br/>
        <hr>
        Şifre<br>
        <input type='text' name='sifre' value='$sifre' size='50' /><br>
        <hr>
        <input type ='submit' class='btn' value='Düzenle'/>
      </div>
    </form>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
