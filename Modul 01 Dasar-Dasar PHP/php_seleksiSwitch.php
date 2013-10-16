<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Seleksi switch</title>
</head>
<body>

<?php

	$i = 0;
	$b = 5;
	
	if ($i == 0) {
		echo "i equals 0<br>";
	} elseif ($i == 1) {
		echo "i equals 1<br>";
	} elseif ($i == 2) {
		echo "i equals 2<br>";
	}
	
	//Ekuivalen, dengan pendekatan switch
	switch ($i) {
		case 0:
			echo "i equals 0<br>";
			break;
		case 1:
			echo "i equals 1<br>";
			break;
		case 2:
			echo "i equals 2<br>";
			break;
	}
?>

</body>
</html>