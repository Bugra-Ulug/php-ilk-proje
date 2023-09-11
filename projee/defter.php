<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="menuu.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
    <style>
    body{
      background-color: ;
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
      margin-top: -10px;
      width: 1200px;
      margin-left: 150px;
      height: 60px;

    }
    #active, #container #navbar ul li:hover{
      background: #ddd;
      border-radius: 15px;
      height: 30px;
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
      margin-left: -180px;
      background: white;
      margin-right: 1220px;
      margin-top: -80px;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
    }
    #container #navbar .pp{
      margin-top: 30px;
      margin-bottom: 10px;
    }
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
    border: solid thin #ddd;
    margin: auto;
    margin-top: 20px;
    text-align: center;
    border-radius: 15px;
}
.sdf{
  color: white;
  background: #366F6F;
  border-radius: 15px;
  width: 365px;
}
.sd{
  color: white;
  background: #366F6F;
  border-radius: 15px;
  font-size: 20px;
  width: 365px;
  height: 30px;
}
.ss{
  background: #366F6F;
  border-radius: 15px;
  width: 365px;
}
.dd{
  margin-left: 15px;
  text-align: left;
  color: white;
  font-size: 20px;
}
.ff{
  color: white;
  border: solid thin #ddd;
  border-radius: 15px;
  font-size: 20px;
}
.tt{
  border-radius: 50%;
  margin-right: 50px;
}
.ssDD{
  color: gray;
  background: white;
  font-size: 15px;
  border-radius: 15px;
  width: 100px;
  text-align: center;
  height: 20px;
}
    </style>
  </head>
  <body>
  <?php
  session_start();
  
  $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].".png";
  $dosyayolu = "dosya/".$dosyaadi;
  echo "<center><br><img src='$dosyayolu'class='img' height='90px' width='90px'>";
?>
<br>
<br>
               <div class="topnav" href="menuu.css">
                  <a class="" href="menu.php"><i class="fas fa-home"></i> Ana Sayfa</a>
                  <a href="profil.php"><i class="fas fa-user"></i> Profilim</a>
                  <a class="active" href="defter.php"><i class="fas fa-book"></i> Defter</a>
                  <a href="chat.php"><i class="fas fa-paper-plane"></i> Chat</a>
                  <a class="ddd" href="veriekle.php"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
              </div>
                <br>
                <br>
    <form class="" action="defter.php" method="post">
      <div id="">
        <div id="">
          <ul>
            </div>
          </ul>
        </div>
      </div>
    </form>
  </body>
</html>

  <?php
            date_default_timezone_set("Europe/Istanbul");
            $num=0;
            $mtarih=date('Y/m/d : H:i');
            include 'baglanti.php';
                if ($_POST) {
                  $id=$_SESSION['user']["id"];
                  $mesaj = $_POST['mesaj'];

                  $guncelle=$db->exec("UPDATE dersler SET mesaj='$mesaj', gozukme=1, mtarih='$mtarih' WHERE id='$id'");
                  if ($guncelle) {
                  $num=1;
                }else {

                }
             }

  ?>
<html>
      <style>
        body{
          background-image: url("image/orman");
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          background-size: cover;   
        }
        .dc{
          width: 500px;
        }
        .yazitasarim2{
          color: white;
          font-size: 20px;
        }
        .rt{
          border-radius: 10px;
          font-size: 15px;
          width: 400px;
          height: 100px;
        }
        .rr{
          color: white;
          background: linear-gradient(-135deg, #1d465875, #0f232c75, #0f232c75);
          font-size: 25px;
          width: 400px;
          border-radius: 30px;
          text-align: center;
        }
        .btnn{
            background-color: #333;
            color: #fff;
            font-weight: bold;
            width: 250px;
            padding: 10px;
            border: solid thin #ddd;
            margin: auto;
            margin-top: 15px;
            text-align: center;
            border-radius: 15px;
        }
        .btnn:hover{
            background-color: #fff;
            color: #333;
            font-weight: bold;
            width: 250px;
            padding: 10px;
            border: solid thin #ddd;
            margin: auto;
            margin-top: 15px;
            text-align: center;
            border-radius: 15px;
        }
        .x{
          font-size: 19px;
        }
        .beyaz{
          background: gray;
          border: solid thin #ddd;
          border-radius: 15px;
          height: 50px;
        }
        .yzi{
          color: white;
          font-size: 20px;
        }

        .list{
          word-break: break-word;
          padding: 3px;
          background: linear-gradient(-135deg, #0b1c2475, #0f232c75, #3891b875);
          margin-bottom: 8px;
          border-radius: 15px;
          width: 800px;
          text-align: ;
          margin-right: 20px;
        }
        .list2{
          background: white;
          padding: 3px;
          margin-bottom: 5px;
          border-radius: 15px;
          width: 600px;
          text-align: left;
          margin-left: 100px;
        }
        .ad{
          display: inline-block; 
          word-wrap:break-word; 
          color: white;
          font-size: 18px;
          margin-right: 350px;
          margin-left: 20px;
          text-align: left;
        }
        .mesaj{
          margin: 2px;
          margin-left: 50px;
          font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .pp{
          margin-right: 650px;
          margin-top: 5px;
          margin-bottom: -75px;
          border-radius: 50px;
        }
        .yazan{
          font-size: 18px;
          color: white;
          margin-right: 450px;
          margin-top: -20px;
          margin-bottom: -20px;
          text-align: left;
        }
        .yazaa{
          margin-left: 6px;
          font-size: 18px;
          display: inline-block; 
          word-break: break-word;
        }
        .mtarihyazi{
          font-size: 18px;
          color: white;
          margin-right: 350px;
          margin-bottom: -20px;
        }
        .mtarih{
          font-size: 18px;
          color: white;
          margin-right: 50px;
          word-break: break-word;
        }
        .img{
          border-radius: 50%;
        }
        .ddd{
        }
      </style>
    <head>
        <center><h1 class="rr">Ziyaretçi Defteri</h1><br>
        <hr>
        <br>
        <br>
        <link rel="stylesheet" href=".css">
    </head>
<body>

<?php
  //$gozukme = $_POST['gozukme'];
  //$gozukme=$_SESSION['user']["gozukme"];
  //$ad=$_SESSION['user']["ad"];
  //$dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].".png";
  //$dosyayolu = "dosya/".$dosyaadi;

  $sorgu = $db->prepare("SELECT * FROM dersler WHERE gozukme=1");
  $sorgu->execute();
  $cek = $sorgu->fetchAll(PDO::FETCH_ASSOC);
        if (count($cek)!=0) {
          foreach ($cek as $key => $value) {
            echo '<div class="list">
                      <img src='.$value['resim_ad'].' height="100px" width="100px" class="pp">
                      <h1 class="yazan"></h1>
                      <span class="ad">
                      '.$value['ad'].'
                      </span>
                      <h1 class="mtarihyazi">Gönderilen Tarih: </h1>
                      <span class="mtarih">
                      '.$value['mtarih'].'
                      </span>
                    <div class="list2">
                      <p class="mesaj">*'.$value['mesaj'].'</p>
                    </div>
                  </div>
                ';
                //echo $value["foto_uzanti"];
              }
            }else {
              echo '<div class=""><h1 class="">Henüz Kimse Yazmamış<h1><div>';
            }

 ?>
<br>
<hr>
<form action="" method="POST">

  <div class="form2">
  <br>
    <span  class="yazitasarim2">Mesajınız: <br> </span>
    <textarea name="mesaj" class="rt" cols="30" rows="10"></textarea>
    <?php
    if ($num==1) {
      echo "<h1 class='x'>✔️<h1>";
    }
     ?>
    <br><button class="btnn" name="gonder">Gönder</button>
  </div>
 </form>
</body>
</html>