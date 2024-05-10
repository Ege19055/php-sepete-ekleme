<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=cart;charset=utf8","root","");
    //echo "Bağlantı Başarılı";
} catch (PDOException $e) {
  $e->getMessage();
}
?>