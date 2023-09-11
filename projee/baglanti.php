<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=phpdersler;charset=utf8;","root","");
} catch (PDOException $hata) {
  print_r($hata->getMessage());
}
?>
<?php

class baglanti
{
  public $db;
  function __construct()
  {
    $this->db = new PDO("mysql:host=localhost;dbname=phpdersler;charset=utf8;","root","");
  }
}


?>
