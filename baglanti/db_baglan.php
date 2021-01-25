<?php

$sunucu = "databaseip";
$sifre = "databasepw";
$veritabani = "codingtr_sozluk";
$kullanici = "codingtr_admin";

$baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);
$baglan->set_charset("utf8");

  if(!$baglan){
   echo "Baglanti bozuk.";
  }
  
 ?>
