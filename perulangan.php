<html>
<head><title>OPERASI PERULANGAN</title></head>
<body>
<h2>-- OPERASI PERULANGAN --</h2>
<h3>* Contoh Perulangan Menggunakan Fungsi For</h3>
<h4>Menampilkan Bilangan dari 1 sampai 10</h4>
<?
for($i=1; $i<=10; $i++)
{
     echo ("$i<br>");
     }    
?>

<h3>* Contoh Perulangan Menggunakan Fungsi While</h3>
<h4>Menampilkan Bilangan Ganjil dari 1 sampai 10</h4>
 <?
$count = 1;
while ($count <= 10)
{
    echo "$count  ";
    $count += 2;
}
?>

</body>
</html>