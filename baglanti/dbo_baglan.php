<?php 
   try {
	  $db = new PDO("mysql:host=databaseip;dbname=codingtr_sozluk;charset=utf8","codingtr_admin","password"); 
   }catch (PDOException $mesaj) {
	  echo $mesaj->getmessage(); 
   }
?>
