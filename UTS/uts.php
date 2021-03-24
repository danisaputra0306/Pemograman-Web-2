<!DOCTYPE html>
<html>
<head>
	
	<title>UTS</title>
	<style type="text/css">
	

		form {
		  background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
		  background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
		  background: linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
		  margin: auto;
		  position: relative;
		  width: 550px;
		  height: 450px;
		  font-family: Times New Roman, Geneva, sans-serif;
		  font-size: 14px;
		  font-style: none;
		  line-height: 24px;
		  font-weight: bold;
		  color: #800000;
		  text-decoration: none;
		  border-radius: 10px;
		  padding: 10px;
		  border: 1px solid #999;
		  border: inset 1px solid #333;
		  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		}

		input,select {
		  width: 375px;
		  display: block;
		  border: 1px solid #999;
		  height: 25px;
		  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		}

		input[type="submit"] {
		  width: 100px;
		  position: absolute;
		  right: 20px;
		  bottom: 20px;
		  background: #000080;
		  color: #fff;
		  font-family: Tahoma, Geneva, sans-serif;
		  height: 30px;
		  border-radius: 15px;
		  border: 1p solid #999;
		}

		input.submit:hover {
		  background: #fff;
		  color: #000080;
		}
	</style>

</head>
	<body style="background-size: cover; background-image: url('gambar1.jpeg');" >
<body>	
		<form action="hasil.php" method="get">
		<div>
			<h1><center>Data Kasus COVID 19</h1></center>
			<label>
				<span>Wilayah</span>
				<select name="wilayah">
					<option>Pilih Wilayah</option>
					<option value="DKI Jakarta">DKI Jakarta</option>
					<option value="Jawa Barat">Jawa Barat</option>
					<option value="Banten">Banten</option>
					<option value="Jawa Tengah">Jawa Tengah</option>
				</select>
			</label>

			<label>
				<span>Jumlah Positif</span>
				<input type="text" name="jmlpositif">
			</label>
			<label>
				<span>Jumlah Dirawat</span>
				<input type="text" name="jmldirawat">
			</label>

			<label>
				<span>Jumlah Sembuh</span>
				<input type="text" name="jmlsembuh">
			</label>

			<label>
				<span>Jumlah Meninggal</span>
				<input type="text" name="jmlmeninggal">
			</label>

			<label>
				<span>Nama Operator</span>
				<input type="text" name="nmoperator">
			</label>
			
			<label>
				<span>NIM</span>
				<input type="text" name="nim_mahasiswa">
			</label>
				
			<label>					
				<input type="submit" name="tambah">
			</label>	
			
	</div>
	</form>
	
</body>
</html>