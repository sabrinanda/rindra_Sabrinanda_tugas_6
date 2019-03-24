<?php
include "config.php";
$no = $_GET['no'];
if( !isset($_GET['no']) ){
    header('Location: index.php');
}
$query = mysqli_query($connection,"SELECT * FROM barang WHERE no='$no'");
$data = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");}
?>
<body>
	<h1><font face=algerian color=blue size=20>Ubah Data Barang</font></h1>
<link rel="stylesheet" href="style.css">
<form action="update.php" method="post">
<div class="box1" style="text-align: center;">
<br><br>
	<ul>
		<li>
			<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
			<label for="barang">Nama Barang : </label> 
			<input type="text" name="barang" value="<?php echo $data['barang'];?>">
		</li><br>
		<li>
			<label for="jumlah">Jumlah&emsp;&emsp;&emsp;: </label> 
			<input type="text" name="jumlah" value="<?php echo $data["jumlah"];?>">
		</li><br>
		<li>
			<label for="harga">Harga&emsp;&emsp;&emsp;&nbsp;: </label> 
			<input type="text" name="harga" value="<?php echo $data["harga"];?>">
		</li>
	</ul>
	<button class="btn btn-primary" type="submit" name="update">Simpan!</button>
</div>
</form>
</body>