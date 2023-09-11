<?php 
  include 'baglanti.php';
  session_start();

  $ad = $_SESSION['user']["ad"];
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        .dddd{
           margin-left: 760px;
        }
        .topnav {
          background-color: #333;
          overflow: hidden;
          margin-top: -400px;
          margin-right: 300px;
          margin-left: -400px;
        }
  
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
  
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
  
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
  
        .sdf{
          color: white;
          background: gray;
          border-radius: 15px;
          width: 365px;
        }
        .sd{
          color: white;
          background: gray;
          border-radius: 15px;
          font-size: 20px;
          width: 365px;
          height: 30px;
        }
        .ss{
          background: gray;
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
        .kkk{
          color: white;
          border-radius: 15px;
          width: 365px;
          background: black;
        }
  
        .str{
          width: 400px;
          height: 350px;
          text-align: center;
          background-color: blue;
          opacity: 0.5;
        }
  
        .txtbox{
          color: white;
          margin-top: 15px;
          background: black;
          text-align: start;
          font-size: 15px;
          font-family: sans-serif;
          height: 30px;
          width: 300px;
          padding: 15px;
          border-radius: 15px;
        }
        .but{
          width: 300px;
          height: 400px;
          border-radius: 10px;
          font-size: 20px;
          background-color: lightgreen;
        }
  
        .btn22{
          background-color: #333;
          color: #ddd;
          font-weight: bold;
          width: 100px;
          height: 35px;
        }
        .img{
          border-radius: 50%;
        }
        .dad{
          display: none;
        }
      </style>
      
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sohbet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="stylee.css">
    <style>
      body{
          background-image: url("image/orman");
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          background-size: cover;   
        }
        .container{
          width: 450px;
          height: 88vh;
          background: #eee;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          box-shadow: 0 0 5px black;
          border-radius: 1rem;
          overflow: hidden;
          position: relative;
        }
        .container .login button:hover{
          border: none;
          outline: none;
          background: black;
          color: white;
          padding: 1rem;
          border-radius: 1rem;
          font-size: 1rem; 
          cursor: pointer;
        }
        .container .input button:hover{
          padding: .5rem;
          border: none;
          outline: none;
          background: black;
          color: white;
          font-size: 1.2rem;
          border-radius: 50%;
          width: 50px;
          height: 45px;
          cursor: pointer;
        }
    </style>
    <br>
    <br>
      <div class="topnav" href="menuu.css">
        <a class="" href="menu.php"><i class="fas fa-home"></i> Ana Sayfa</a><br>
        <a href="profil.php"><i class="fas fa-user"></i> Profilim</a><br>
        <a href="defter.php"><i class="fas fa-book"></i> Defter</a><br>
        <a class="active" href="chat.php"><i class="fas fa-paper-plane"></i> Chat</a><br>
        <a class="ddd" href="veriekle.php"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
      </div>
</head>
<body>
    <div class="container">
        <div class="login">
            <span>Sohbete bağlanmak için Butona Basınız</span><br><br><br>
            <input type="text" class="dad" id="myName" value="<?php $ad = $_SESSION['user']["ad"];  echo $ad; ?>" autocomplete="off">
            <button onclick="sohbeteBasla();"><i class="fa fa-comment"></i> Sohbete Başla</button>
        </div>
        <h2>Sohbet</h2>
        <ul id="messages" class="messages">        
        </ul>
        <div class="input">
            <input type="text" id="myInput">
            <button onclick="mesajGonder();"><i class="fa fa-paper-plane"></i></button>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-database.js"></script>
    <script src="app.js"></script>
</body>
</html>