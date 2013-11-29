<!DOCTYPE HTML>
<html>
<head>
	<title>Import</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
 			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar navbar-inverse">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
			      	<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
    			</button>
    		<a class="navbar-brand" href="#">Pemrograman Web</a>
  			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="../index.php">Home</a></li>
      				<li><a href="#">About</a></li>
      				<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 4 <b class="caret"></b></a>
        				<ul class="dropdown-menu">
          					<li><a href="../mod4/data_studikasus.php">Studi Kasus</a></li>
          					<li><a href="../mod4/tugas/login.php">Tugas Praktikum</a></li>
        				</ul>
      				</li>
      				<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 5 <b class="caret"></b></a>
        				<ul class="dropdown-menu">
          					<li><a href="../mod5/studikasus.php">Studi Kasus</a></li>
          					<li><a href="../mod5/tugaspraktikum.php">Tugas Praktikum</a></li>
        				</ul>
      				</li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
      				<li class="dropdown">
                    	<a href="#" class ="dropdown-toggle" data-toggle="dropdown">
                        	<span class="glyphicon glyphicon-cloud-download"></span> 
                            Download
                            <b class="caret"></b>	
                        </a>
                    	<ul class="dropdown-menu">
							<li><a href="download.php">Via Server 1</a></li>
                            <li><a href="download2.php">Via Server 2</a></li>
    					</ul>
                   	</li>
                    <li class="dropdown">
        				<a href = "#"  class ="dropdown-toggle" data-toggle="dropdown">
    						<span class="glyphicon glyphicon-user"></span>
			    			renithaerdiana
    						<b class="caret"></b>					
                        </a>
    					<ul class="dropdown-menu">
							<li><a href="#">Profille</a></li>
    					</ul>
      				</li>
    			</ul>
  			</div><!-- /.navbar-collapse -->
			</div>
		</nav>
<div class="container">
	<div class="hero-unit">
<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 include "koneksi.php";
  
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['input']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nim = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $alamat=$data->val($i,3);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO mahasiswa values ('$nim','$nama','$alamat')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal
 if($hasil){ $sukses++;}
 else{ $gagal++;
 echo 'Pemasukan data gagal nim ' .$nim. ' sudah digunakan !' .'<br>'; 
 }

 
}
 //tampilkan report hasil import
 echo "<h3> Proses Import Data Mahasiswa</h3>";
 echo "<p>Jumlah data berhasil diimport : ".$sukses."<br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";
 
?>
</div>
	<table class="table table-hover">
        <tr class="success">
        	<td>NIM</th>
            <td>Nama</th>
            <td>Alamat</th>
        </tr>
        	<?php
				$sql= mysql_query("select * from mahasiswa ");
				while ($isi= mysql_fetch_array($sql)){
			?>
        <tr class="info">
			<td><?php echo $isi['nim']; ?> </td>
            <td><?php echo $isi['nama']; ?> </td>
            <td><?php echo $isi['alamat']; ?> </td>
         </tr>
		<?php
			}
		?>
	</table>
</div>

   
	<script src="../dist/js/jquery.js"></script>
	<script src="../dist/js/bootstrap-transition.js"></script>
    <script src="../dist/js/bootstrap-alert.js"></script>
	<script src="../dist/js/bootstrap-modal.js"></script>
    <script src="../dist/js/bootstrap-dropdown.js"></script>
    <script src="../dist/js/bootstrap-scrollspy.js"></script>
    <script src="../dist/js/bootstrap-tab.js"></script>
    <script src="../dist/js/bootstrap-tooltip.js"></script>
    <script src="../dist/js/bootstrap-popover.js"></script>
    <script src="../dist/js/bootstrap-button.js"></script>
    <script src="../dist/js/bootstrap-collapse.js"></script>
    <script src="../dist/js/bootstrap-carousel.js"></script>
    <script src="../dist/js/bootstrap-typeahead.js"></script>
</body>
</html>
