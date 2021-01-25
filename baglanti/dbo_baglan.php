<?php 
   try {
	  $db = new PDO("mysql:host=185.50.71.32;dbname=codingtr_sozluk;charset=utf8","codingtr_admin","159705Fu"); 
   }catch (PDOException $mesaj) {
	  echo $mesaj->getmessage(); 
   }
?>