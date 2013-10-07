<html>
<head><title>OPERASI PERBANDINGAN</title></head>
<body>

<h3>-- OPERASI PERBANDINGAN --</h3>

<?php
   echo "<b> ==  </b>Sama dengan <br>";
   echo "<b> !=  </b>Tidak sama dengan <br>";
   echo "<b> <   </b>Lebih kecil dari <br>";
   echo "<b> >   </b>Lebih besar dari <br>";  
   echo "<b> <=  </b>Lebih kecil atau sama dengan dari <br>";
   echo "<b> >=  </b>Lebih besar atau sama dengan dari <br><br>";  
   
   $x = 4; 
   $y = 5;
   
   echo "<b>Contoh : </b><br>";
   if($x==$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x == $y hasilnya adalah $hasil <br>";
   
   if($x!=$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x != $y hasilnya adalah $hasil <br>";
   
   if($x<$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x < $y hasilnya adalah $hasil <br>";
   
   if($x>$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x > $y hasilnya adalah $hasil <br>";
   
   if($x<=$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x <= $y hasilnya adalah $hasil <br>";
   
   if($x>=$y){$hasil="Benar";} else {$hasil="Salah";}
   echo " $x >= $y hasilnya adalah $hasil <br>";
?>