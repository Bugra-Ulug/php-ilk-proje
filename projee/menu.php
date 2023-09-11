<?php
session_start();
@$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
$dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
$dosyayolu = "dosya/".$dosyaadi;
 echo "<center><br><img src='$dosyayolu'class='img' height='90px' width='90px'>";
?>
<br>
<br>
<div class="topnav" href="menuu.css">
  <a class="active" href="menu.php"><i class="fas fa-home"></i> Ana Sayfa</a>
  <a href="profil.php"><i class="fas fa-user"></i> Profilim</a>
  <a href="defter.php"><i class="fas fa-book"></i> Defter</a>
  <a href="chat.php"><i class="fas fa-paper-plane"></i> Chat</a>
  <a class="ddd" href="veriekle.php"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
</div>
<?php
    require "baglanti.php";
?>
 <br>
 <br>
 <center><a class="ayazisi">ANA SAYFA</a>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="menuu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <title>Ana Sayfa</title>
    <style>
      .ddd{
         margin-left: 760px;
      }
      body{
          background-image: url("image/orman");
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          background-size: cover;
      }
      .img{
        border-radius: 50%;
      }
      .beyaz{
        color: white;
      }
    </style>
  </head>
  <body>
    <br>
    <br>
    <hr>
    <br>
    
  </body>
</html>