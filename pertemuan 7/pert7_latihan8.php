<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan Join</title>
	<style type="text/css">
		h3 {
			color:Green;
		}
	</style>
</head>
<body>
	<h3>Penggunaan Join</h3>
	<h3>By Dani Saputra</h3>

	<?php 
	$var = array('18','11','2010');
	$tanggal = join("/",$var);
	echo "$tanggal";
	 ?>
</body>
</html>