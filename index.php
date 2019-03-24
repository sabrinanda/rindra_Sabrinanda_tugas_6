<title>Data Barang</title>
<?php
include "config.php";
$query = mysqli_query($connection,"SELECT * FROM barang");
?>
<html>
<link rel="stylesheet" href="style.css">
<form action="tambah.php" method="post">
<div style="text-align: center;">
<h1><font face=algerian color=blue size=20>Ketersediaan Barang</font></h1></div>
</br>
<div class="box">
    <table class="table1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
			<th>Aksi</th>
        </tr>
        <?php
			$i=1;
            while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $data["barang"];?></td>
			<td><?php echo $data["jumlah"];?></td>
			<td>Rp.<?php echo $data["harga"];?></td>
			<td>Rp.<?php echo $data["jumlah"]*$data["harga"];?></td>
			<td>
				<a href="edit.php?no=<?= $data["no"];?>">Edit</a>
				<a href="hapus.php?no=<?= $data["no"];?>">Hapus</a>
			</td>
        </tr>
        <?php $i++;} ?>
    </table>
</div><br>
<div style="text-align: center;"><button class="btn btn-danger">Tambah Barang</button></div>
</form>
</html>