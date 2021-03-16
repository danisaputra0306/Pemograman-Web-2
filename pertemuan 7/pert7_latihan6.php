<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan List 2</title>
	<style type="text/css">
		h3 {
			color: Green;
		}	
	</style>
</head>
<body>

	<h3>Fungsi List Array 2</h3>
	<h3>By Dani Saputra</h3>
	<?php 
	$program = array('Bobo','Doraemon','Spiderman');
	list($Majalah, ,$Film) = $program;
	echo "Jenis Buku & Hiburan";
	echo "<br/>";
	echo "Cerpen : $Majalah ";
	echo "<br/>";
	echo "Bioskop : $Film";


	 ?>
</body>
</html>