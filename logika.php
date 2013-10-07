<html>
<head><title>OPERASI LOGIKA</title></head>
<body>

<h3>-- OPERASI LOGIKA --</h3>

<?php
   echo "<b>&& (AND)</b>Akan menghasilkan nilai True jika kedua nilai yang dibandingkan juga True <br>";
   echo "<b>|| (OR) </b>Akan menghasilkan niai True jika salah satu nilai yang dibandingkan juga True <br>";
   echo "<b> ! (NOT)</b>Akan menghasilkan nilai True jika nilai bernilai False <br><br>";

   echo "<b>Contoh : </b><br>";
   echo "Program Memeriksa username dan Password dengan if else<br><br>";
   $username="Renitha"; 
   $pass="112";
   
   echo " Diketahui username : Renitha <br>";
   echo " password : 112 <br>";
   echo " Diinputkan username : rere dan pass : 112 <br><br>";
   echo " Jika menggunakan operator && maka hasilnya : ";
   if($username=="rere" && $pass=="112")
   {
     echo "Sukses Login <br>";
	}
   else
   {
     echo "Gagal Login <br>";
	}
	
	echo " Jika menggunakan operator || maka hasilnya : ";
   if($username=="rere" || $pass=="112")
   {
     echo "Sukses Login <br>";
	}
   else
   {
     echo "Gagal Login <br>";
	}
?>

</body>
</html>