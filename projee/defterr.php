<!DOCTYPE html>
<html lang="tr">
  <link rel="stylesheet" href="menuu.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" href="asd.css">
    <title>Profil</title>
    <style>
      .btn2{
          background-color: #333;
          color: #fff;
          font-weight: bold;
          width: 400px;
          padding: 10px;
          border: solid thin #ddd;
          margin: auto;
          margin-top: 20px;
          text-align: center;
          border-radius: 15px;
      }
      .btn2:hover{
          background-color: #fff;
          color: #333;
          font-weight: bold;
          width: 400px;
          padding: 10px;
          border: solid thin black;
          margin: auto;
          margin-top: 20px;
          text-align: center;
          border-radius: 15px;
          transition: 0.2s linear;
      }
      .img{
        border-radius: 50%;
      }
      .yazi{
        padding: .1px;
        font-size: 10px;
      }
      .yazia{
        margin-right: auto;
        font-size: 25px;
        margin-top: 15px;
        margin-bottom: -15px;
        margin-left: 20px;
      }
      .imga{
        border-radius: 50%;
        margin-left: 20px;
      }
      .ddd{
         margin-left: 744px;
      }
      #container #navbar ul li a{
        color: gray;
        font-size: 17px;
        margin-left: 60px;
        margin-right: 60px;
        text-decoration: none;
        margin-bottom: 20px;
        height: 5px;
        margin-top: 5px;
        font-family: font1;
      }
      #container #navbar{
        background: white;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border: solid thin #ddd;
        margin-top: -50px;
        width: 1200px;
        margin-left: 130px;
        height: 60px;

      }
      #active, #container #navbar ul li:hover{
        background: #ddd;
        border-radius: 15px;
        height: 30px;
        transition: 0.2s linear;
      }
      .tt{
        border-radius: 50%;
        margin-right: 50px;
      }
      .pp{
        border-radius: 50px;
        margin-left: 18px;
        margin-bottom: 10px;
      }
      #container #navbar .foto{
        margin-left: -170px;
        background: white;
        margin-right: 1210px;
        margin-top: -100px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        transition: 0.2s linear;
      }
      #container #navbar .foto:hover{
        margin-left: -170px;
        background: white;
        margin-right: 1210px;
        margin-top: -70px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
      }
      #container #navbar .pp{
        margin-top: 50px;
      }
    </style>
</head>
<body>
 <form class="" action="profil.php" method="post" enctype="multipart/form-data">
<br>
<br>
<form class="" action="defter.php" method="post">
  <div id="container">
    <div id="navbar">
        <ul>
          <li class="gg"><a href="profil.php" class="dd"><i class="fas fa-user"></i> Profilim</a></li>
          <li><a href="menu.php" class="dd"><i class="fas fa-home"></i> Ana Sayfa</a></li>
          <li><a href="defter.php" class="dd"><i class="fas fa-book"></i> Ziyaretçi Defteri</a></li>
          <li><a href="chat.php" class="dd"><i class="fas fa-comments"></i> Mesajlar</a></li>
          <li><a href="giris.php" class="dd"><i class="fas fa-sign-out-alt"></i> Hesaptan Çık</a></li>
          <div class="foto">

                <?php
                session_start();

                $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].".png";
                $dosyayolu = "dosya/".$dosyaadi;

                echo "<br><img src='$dosyayolu' height='80px' width='80px' class='pp'> <br>";

                ?>

          </div>
      </ul>
    </div>
  </div>
</form>
<br>
<br>
<br>
        <?php

        $maxboyut=2048000;
        @$dosyauzantisi=substr($_FILES["resim_ad"]["name"], -4,4);
        $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
        $dosyayolu = "dosya/".$dosyaadi;

        if (@$_FILES["resim_ad"]["size"]>$maxboyut) {
          echo "<center><h1 class='sd'>Resim boyutu 2MB'dan büyük olamaz...<h1>";
        }else {
          @$d=$_FILES["resim_ad"]["type"];

          if ($d=="image/png") {

            if (is_uploaded_file($_FILES["resim_ad"]["tmp_name"])) {

              $x=move_uploaded_file($_FILES["resim_ad"]["tmp_name"], $dosyayolu);
              if ($x) {

                $id=$_SESSION['user']["id"];
                include 'baglanti.php';

                $guncelle=$db->exec("UPDATE dersler SET resim_ad='$dosyayolu' WHERE id='$id'");

                echo "<br><img src='' height='' width=''> <br>
                <center><h1 class='txtbox'><h1>";

              }

            }else {
              echo "<center class='beyaz'> <h1 class=''>Yüklenemedi...<h1>";
            }

          }else {
            //echo "<center><h1 class='txtbox'>Sadece .png destekleniyor<h1>";
          }
        }

         ?>


    <div class="container">
      <div class="main">
        <div class="topbar">
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card body">
                                <?php
                                    @$dosyauzantisi=substr($_FILES["resim_ad"]["name"], -4,4);
                                    $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
                                    $dosyayolu = "dosya/".$dosyaadi;
                                    echo "<br><img src='$dosyayolu'class='imga' height='100px' width='100px'>";
                                    echo "<br><h1 class='yazia'>Kullanıcı Adı: ".$_SESSION['user']["ad"]."<h1>";
                               ?>
                        <div class="mt-3">
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <center><h1 class="">Hakkınızda</h1>
                    <div class="card-body">
                      <hr>
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="yazi">
                            <?php @session_start(); if (isset($_SESSION['user'])) {  echo "<h1 class=''>Kullanıcı Adı: ".$_SESSION['user']["ad"]."<h1>"; }
                              else {
                                 echo "Giriş Başarısız";
                               } ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="yazi">
                            <?php @session_start(); if (isset($_SESSION['user'])) {  echo "<h1 class=''>Şifre: ".$_SESSION['user']["sifre"]."<h1>"; }
                                else {
                                  echo "Giriş Başarısız";
                                } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="yazi">
                            <?php @session_start(); if (isset($_SESSION['user'])) {  echo "<h1 class=''>Mail Adresi: ".$_SESSION['user']["eposta"]."<h1>"; }
                                else {
                                  echo "Giriş Başarısız";
                                } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="yazi">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                            </div>
                        </div>
                        <hr>
                        </div>
                    </div>
                </div>
              <form class="" action="defterr.php" method="POST" enctype="multipart/form-data">
                <?php 
                    include 'baglanti.php';

                    @$dosyauzantisi=substr($_FILES["resim_ad"]["name"], -4,4);
                    $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
                    $dosyayolu = "dosya/".$dosyaadi;

                     $id= isset($_POST['id']) ? $_POST['id'] : '';
                    if(isset($_POST['gonder'])){
                    $eklee = $db->exec("UPDATE defter SET resim_ad='$dosyayolu' WHERE id='$id'");
                    } 
                ?>
                  <div class="card mb-3 content">
                      <div class="card-body">
                          <div class="row">
                             <center><input type="file" name="resim_ad" class="btn2"><br><br>
                             <center><input type="submit" name="gonder" value="Ekle" class="btn2"><br>
                             <br>
                          </div>
                      </div>
                  </div>
              </form> 
            </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>