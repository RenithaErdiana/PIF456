<html>
<head><title>OPERASI ARITMATIKA</title></head>
<body>

<h3>-- OPERASI ARITMATIKA --</h3>

<?php
   echo "<b>+ </b>= Penjumlahan <br>";
   echo "<b>- </b>= Pengurangan <br>";
   echo "<b>* </b>= Perkalian   <br>";
   echo "<b>/ </b>= Pembagian   <br>"; 
   echo "<b>% </b>= Modulus     <br><br>"; 
   $penjumlahan = 2 + 4; 
   $pengurangan = 6 - 2; 
   $perkalian = 5 * 3; 
   $pembagian = 15 / 3;
   $modulus   = 5 % 2; 

   echo "<b> Contoh : </b><br>"; 
   echo "Menampilkan penjumlahan: 2 + 4 = ".$penjumlahan."<br>"; 
   echo "Menampilkan pengurangan: 6 -2 = ".$pengurangan."<br>"; 
   echo "Menampilkan perkalian: 5 * 3 = ".$perkalian."<br>"; 
   echo "Menampilkan pembagian: 15 / 3 = ".$pembagian."<br>";
   echo "Menampilkan modulus: 5 % 2 = " .$modulus."<br>"; 
 
?>