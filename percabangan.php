<html>
<head><title>OPERASI PERCABANGAN</title></head>
<body>
<h1>-- OPERASI PERCABANGAN --</h1>
<h2>* If else</h2>
<h3>kondisi akan diperiksa bila bernilai true statement 1 akan dijalankan, bila bernilai false statement 2 akan dijalankan, kemudian Statement 3 dijalankan</h3>

<h4>Contoh : Memeriksa kategori umur </h4>
 <?
$umur = 35;
echo "Diketahui umur : 35 tahun <br>";
if ($umur > 50){
echo "Termasuk kategori TUA <br>";
} else if ($umur > 25) {
echo "Termasuk kategori DEWASA <br>";
} else if ($umur > 15) {
echo "Termasuk kategori REMAJA <br>";
} else {
echo "Termasuk kategori ANAK ANAK <br>";
}
echo "jika($umur > 25) dieksekusi";
?>

<h2>* Swicth Case</h2>
<h3>Variabel a diperiksa, Statement dieksekusi Apabila a == 1, statement 1 dijalankan Apabila a == 2, statement 2 dijalankan, dan seterusnya</h3>
<h4>Contoh : Program untuk menampilkan nama hari</h4>
 <?
$day = date("D");
switch ($day)
{
    case 'sun' : $hari = "Minggu";
        break;
    case 'Mon' : $hari = "Senin";
        break;
    case 'Tue' : $hari = "Selasa";
        break;
    case 'Wed' : $hari = "Rabu";
        break;
    case 'Thu' : $hari = "Kamis";
        break;
    case 'Fri' : $hari = "Jumat";
        break;
    case 'Sat' : $hari = "Sabtu";
        break;
    default : $hari = "Kiamat";
}
echo "Hari ini adalah hari <b>$hari</b>";
?>


</body>
</html>

