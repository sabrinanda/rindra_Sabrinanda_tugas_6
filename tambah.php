<?php
include "config.php";
if (isset($_POST["submit"])){
	$barang=$_POST["barang"];
	$jumlah=$_POST["jumlah"];
	$harga=$_POST["harga"];
	
		$query="INSERT INTO barang VALUES('','$barang','$jumlah','$harga')";
		mysqli_query($connection,$query);
	if(mysqli_affected_rows($connection)>0){
	echo "
		<script>
			alert('Barang Berhasil Ditambahkan');
			document.location.href='index.php';
		</script>";}
	else{
	echo "gagal";}
}
?>
<html>
<head>
	<title>Tambah Data Barang</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1><font face=algerian color=blue size=20>Tambah Data Barang</font></h1>
<form action="" method="post">
<div class="box1" style="text-align: center;">
<br><br>
	<ul>
		<li>
			<label for="barang">Nama Barang : </label> 
			<input type="text" name="barang" id="barang" required>
		</li><br>
		<li>
			<label for="jumlah">Jumlah&emsp;&emsp;&emsp;: </label> 
			<input type="text" name="jumlah" id="jumlah" required>
		</li><br>
		<li>
			<label for="harga">Harga&emsp;&emsp;&emsp;&nbsp;: </label> 
			<input type="text" name="harga" id="harga" required>
		</li>
	</ul>
	<br>
	<button class="btn btn-primary" type="submit" name="submit">Tambahkan!</button>
</div>
</form>
</body>
</html>