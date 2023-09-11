<?php
session_start();
@$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
$dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
$dosyayolu = "dosya/".$dosyaadi;
 echo "<center><br><img src='$dosyayolu'class='img' height='90px' width='90px'></center>";
?>
<br>
<br>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<title>Profil</title>
<link rel="stylesheet" href="dense.css">
<link rel="stylesheet" href="menuu.css">
<div class="topnav" href="menuu.css">
  <a class="" href="menu.php"><i class="fas fa-home"></i> Ana Sayfa</a>
  <a class="active"href="profil.php"><i class="fas fa-user"></i> Profilim</a>
  <a href="defter.php"><i class="fas fa-book"></i> Defter</a>
  <a href="chat.php"><i class="fas fa-paper-plane"></i> Chat</a>
  <a class="ddd" href="veriekle.php"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
</div>
<style>
    body{
          background-image: url("image/orman");
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          background-size: cover;   
        }
                @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap'); 

        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          list-style: none;
          font-family: 'Josefin Sans', sans-serif;
        }

        body{
            background-color: #;
        }

        .wrapper{
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 650px;
            display: flex;
            box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
        }

        .wrapper .left{
            width: 35%;
            background: linear-gradient(to right,#343a3ad8,#343a3ad8);
            padding: 30px 25px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            text-align: center;
            color: #fff;
        }

        .wrapper .left img{
            border-radius: 50px;
            margin-bottom: 15px;
        }

        .wrapper .left h4{
            margin-bottom: 10px;
        }

        .wrapper .left p{
            font-size: 12px;
        }

        .wrapper .right{
            width: 1000%;
            background: linear-gradient(to right,#dadbdb8a,#dadbdb8a);
            padding: 35px 25px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .wrapper .right .info,
        .wrapper .right .projects{
            margin-bottom: 35px;
        }

        .wrapper .right .info h3,
        .wrapper .right .projects h3{
            margin-bottom: 25px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e0e0e0;
            color: #353c4e;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        .wrapper .right .info_data,
        .wrapper .right .projects_data{
            display: flex;
            justify-content: space-between;
        }

        .wrapper .right .info_data .data,
        .wrapper .right .projects_data .data{
            width: 55%;
        }

        .wrapper .right .info_data .data h4,
        .wrapper .right .projects_data .data h4{
            color: #353c4e;
            margin-bottom: 15px;
        }

        .wrapper .right .info_data .data p,
        .wrapper .right .projects_data .data p{
            font-size: 13px;
            margin-bottom: 15px;
            color: #919aa3;
        }

        .wrapper .social_media ul{
            display: flex;
        }

        .wrapper .social_media ul li{
            width: 45px;
            height: 45px;
            background: linear-gradient(to right,#01a9ac,#01dbdf);
            margin-right: 10px;
            border-radius: 5px;
            text-align: center;
            line-height: 45px;
        }

        .wrapper .social_media ul li a{
            color :#fff;
            display: block;
            font-size: 18px;
        }
        .img{
          border-radius: 50%;
        }
        .btnpro{
            background: #333;
            color: white;
            width: 90px;
            line-height: 25px;
        }
</style>
<div class="wrapper">
<?php
     @$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
     $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
     $dosyayolu = "dosya/".$dosyaadi;
?>
    <div class="left">
    <?php
     @$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
     $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
     $dosyayolu = "dosya/".$dosyaadi; 
     echo "<br><img src='$dosyayolu'class='imga' height='100px' width='100px'>"; ?>
        <?php echo "<br><h5 class='font-weight-bold mt-4'>".$_SESSION['user']["ad"]."</h5>"; ?>
        <br><br><form action="profil.php"><input type="submit" class="btnpro"value="Geri Dön"></form>
        <br><br><br><br><br><br><br><br><form action="profil.php" method="POST"><input type="submit" class="btnpro" name="kaydet" value="Kaydet">
        </form>
    </div>
    <div class="right">
        <div class="info">
            <h3>Kullanıcı Bilgilerim</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Kullanıcı Adı</h4>
                    <input type="text" name="ad" value="<?php echo "".$_SESSION['user']["ad"].""; ?>">
                 </div>
                 <div class="data">
                   <h4>Şifre</h4>
                   <input type="text" name="sifre" value="<?php echo "".$_SESSION['user']["sifre"].""; ?>">
              </div>
            </div>
        </div>
     <form action="">
      <div class="projects">
            <h3>Hakkınızda</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Cinsiyet</h4>
                      <h5>Belirtilmedi</h5>
                 </div>
                 <div class="data">
                   <h4>Eposta</h4>
                   <input type="text" name="eposta" value="<?php echo "".$_SESSION['user']["eposta"].""; ?>">
              </div>
            </div>
        </div>
     </form>       
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

                  echo "<img src='' height='' width=''>
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


     <form class="" action="prodüzenle.php" method="post" enctype="multipart/form-data">
     <?php 

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
           <center><input type="submit" name="gonder" value="Resim Ekle" class="btnpro"><br>
           <br>
     </form> 
    </div>
</div>

