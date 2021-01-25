<?php

$sunucu = "185.50.71.32";
$sifre = "159705Fu";
$veritabani = "codingtr_sozluk";
$kullanici = "codingtr_admin";

$baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);
$baglan->set_charset("utf8");

  if(!$baglan){
   echo "Baglanti bozuk.";
  }
  
 ?>