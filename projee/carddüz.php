<?php 
    include "baglanti.php";
    $con=mysqli_connect("localhost","root","","phpdersler");
    
    $gelen = $_GET['Git'];
    
    $ad = $_POST['ad'];
    $sifre = $_POST['sifre'];
    $eposta = $_POST['eposta'];
    
    $duzenle = mysqli_query($con,"UPDATE dersler SET ad='$ad', sifre='$sifre', eposta='$eposta' WHERE id='$gelen'");
?>
<!DOCTYPE html>
<html lang="en">
<style>
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
    <title>Profil</title>
</head>
<body class="bg-light">
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
                     <form action="card.php">
                        <div class="card-block text-center text-white">
                            <br><i><img src="$dosyayolu" class="imga" height="100px" width="100px"></i>
                            <h2 class="font-weight-bold mt-4">Bugra</h2>
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
                     <form></form> 
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Kullanıcı Adınız:</p>
                          <input type="text">
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Şifre:</p>
                          <input type="text">
                        </div>
                    </div>
                    <br>
                    <h4 class="mt-3">Hakkınızda</h4>
                    <hr class="bg-primary">
                    <div class="row">
                     <div class="col-sm-6">
                          <p class="font-weight*bold">Cinsiyet:</p>
                          <input type="text">
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight*bold">Email:</p>
                          <input type="text"><br><br>
                          <center><input type="submit" name="" value="Kaydet">
                        </div>
                     </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>