<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Penanganan Checkbox dengan Preselecting</title>
</head>

<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pilih Makanan Favorit Anda :
		<input type="checkbox" name="mafa1" value="Nasi Goreng" checked/>Nasi Goreng <br/>
		<input type="checkbox" name="mafa2" value="Rendang"/>Rendang <br/>
		<input type="checkbox" name="mafa3" value="Sate"/>Sate <br/>
		<input type="checkbox" name="mafa4" value="Bakso"/>Bakso <br/>
		<input type="checkbox" name="mafa5" value="Rujak"/>Rujak <br/>
		<input type="submit" value="Submit"/>
	</form>
	<?php
	if(isset($_POST['mafa1'])) {
		echo $_POST['mafa1'];
		echo "<br/>";
	}
	if(isset($_POST['mafa2'])) {
		echo $_POST['mafa2'];
		echo "<br/>";
	}
	if(isset($_POST['mafa3'])) {
		echo $_POST['mafa3'];
		echo "<br/>";
	}
	if(isset($_POST['mafa4'])) {
		echo $_POST['mafa4'];
		echo "<br/>";
	}
	if(isset($_POST['mafa5'])) {
		echo $_POST['mafa5'];
		echo "<br/>";
	}
?>

</body>
</html>
		