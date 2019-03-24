<?php
include "config.php";
if(isset($_POST['update']))
{
$no = $_POST['no'];
$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
mysqli_query($connection,"UPDATE barang SET barang='$barang', jumlah='$jumlah', harga='$harga' WHERE no='$no'");
}
if(mysqli_affected_rows($connection)>0){
	echo "
		<script>
			alert('Barang Berhasil Diubah');
			document.location.href='index.php';
		</script>";}
	else{
		echo "gagal";}
?>