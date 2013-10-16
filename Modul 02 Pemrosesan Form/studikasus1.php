<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Seleksi dengan Preselecting</title>
</head>

<body>

<h3>-- KATEGORI FILM --</h3>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Film
		<select name="film">
			<option value="Remaja">Remaja
			<option value="Horror">Horror
			<option value="Romantis">Romantis
			<option value="Action">Action
			<option value="Anak">Anak
		</select> <br /> <br />
		
		<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['film']))
{
	echo $_POST['film'];
}
?>

</body>
</html>
