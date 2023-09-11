<?php
 $linkk = mysqli_connect("localhost","root","","phpdersler");
 include "baglanti.php";

 $gelen = $_GET['Git'];

 $makale = mysqli_fetch_array(mysqli_query($linkk,"SELECT * FROM defter WHERE id='$gelen'"));
 $id = $makale['id'];
 $isim = $makale['isim'];
 $soyisim = $makale['soyisim'];
 $email = $makale['email'];
 $mesaj = $makale['mesaj'];
    echo "
    <form action='defteryenile.php?Git=$gelen' method='post'>
      <div class='form'>
        İsim<br>
        <input type='text' name='isim' value='$isim' size='50' /><br/>
        <hr>
        Soyisim<br>
        <input type='text' name='soyisim' value='$soyisim' size='50' /><br>
        <hr>
        Eposta<br>
        <input type='text' name='email' value='$email' size='50' /><br>
        <hr>
        Mesaj<br>
        <input type='text' name='mesaj' value='$mesaj' size='50' /><br>
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
