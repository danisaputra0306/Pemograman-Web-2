<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan Split</title>
	<style type="text/css">
		h3	{
			color: Green;
		}
	</style>
</head>
<body>
	<h3>Penggunaan Split</h3>
	<h3>By Dani Saputra</h3>

	<?php 
	$tanggal = "17-05-2010";
	//dikarenakan fungsi split sudah dihapus di php 7
	// saya menggantinya dengan explode 
	list($hari,$bulan,$tahun) = explode("-", $tanggal);
	echo "Hari = $hari";
	echo "<br/>";
	echo "Bulan = $bulan";
	echo "<br/>";
	echo "Tahun = $tahun";

	 ?>
</body>
</html>