<?php 
    include 'baglanti.php';
    session_start();
    @$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
    $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
    $dosyayolu = "dosya/".$dosyaadi;
    echo "<center><br><img src='$dosyayolu'class='imga' height='100px' width='100px'></center>";
?>
<br>
<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background-image: url("image/orman");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;   
    }
    .imga{
        border-radius: 50%;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="menuu.css">
    <title>Profil</title>
</head>
<body class="bg-light">
<div class="topnav" href="menuu.css">
       <a class="" href="menu.php"><i class="fas fa-home"></i> Ana Sayfa</a>
       <a class="active" href="profil.php"><i class="fas fa-user"></i> Profilim</a>
       <a href="defter.php"><i class="fas fa-book"></i> Defter</a>
       <a href="chat.php"><i class="fas fa-paper-plane"></i> Chat</a>
       <a class="ddd" href="veriekle.php"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
</div>
<?php 
    @$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
    $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
    $dosyayolu = "dosya/".$dosyaadi;
?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-15 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg info rounded-left">
                     <form action="carddüz.php">
                        <div class="card-block text-center text-white">
                        <?php
                            @$dosyauzantisi=substr($_FILES["resim"]["name"], -4,4);
                            $dosyaadi= isset($_SESSION['user']).$_SESSION['user']['ad'].$dosyauzantisi;
                            $dosyayolu = "dosya/".$dosyaadi; 
                            echo "<br><img src='$dosyayolu'class='imga' height='100px' width='100px'>"; ?>
                            <?php echo "<br><h5 class='font-weight-bold mt-4'>".$_SESSION['user']["ad"]."</h5>"; ?>
                            <p>Kullanıcı</p>
                            <i class="far fa-edit fa-2x mt-4"></i><br>
                            <br><input type="submit" value="Düzenle"><br><br>
                        </div>
                     </form>   
                    </div>
                      <div class="col-sm-8 bg-white rounded-right">
                    <h3 class="mt-3 text-center">Kullanıcı Bilgileri</h3>
                    <hr class="badge-primary mt-0 w-30">
                    <div class="row">
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Kullanıcı Adınız:</p>
                          <?php echo "<h5 class='text-muted'>".$_SESSION['user']["ad"]."</h5>"; ?>
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Şifre:</p> 
                          <?php echo "<h6 class='text-muted'>".$_SESSION['user']["sifre"]."</h6>"; ?>
                        </div>
                    </div>
                    <br>
                    <h4 class="mt-3">Hakkınızda</h4>
                    <hr class="bg-primary">
                    <div class="row">
                     <div class="col-sm-6">
                          <p class="font-weight*bold">Cinsiyet:</p>
                          <h6 class="text-muted">Belirtilmedi</h6>
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Email:</p>
                          <?php echo "<h6 class='text-muted'>".$_SESSION['user']["eposta"]."</h6>"; ?>
                        </div>
                     </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>