<?php
include "config.php";
$no=$_GET["no"];
mysqli_query($connection,"Delete From barang Where no=$no");
echo "
		<script>
			alert('Barang Berhasil Dihapus');
			document.location.href='index.php';
		</script>";
?>