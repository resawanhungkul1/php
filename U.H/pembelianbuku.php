
<!DOCTYPE html>
<html>
<head>
	<title>pembelian buku</title>
</head>
<body>
<fieldset>
	<form action="" method="post">
	<legend>pembelian buku</legend>
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>

			</tr>
			<tr>
				<td>alamat</td>
				<td><textarea name="alama" required></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="kelamin" value="laki laki" checked>laki laki</td>
				<td><input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Tanggal beli</td>
 				<td><input type="date" name="tgl" required></td>
			</tr>
			<tr>
				<td>jumlah pembelian buku</td>
				<td><input type="number" name="jumlah" required></td>
			</tr>
			<tr>
				<td><button name="simpan">simpan</button></td>
				<td><button type="reset">Reset</button></td>
			</tr>
		</table>

	</form>

</fieldset>
	<form action=" propembelian.php" method="post">
	<?php 
		if (isset($_POST['simpan'])) {
			$nama =$_POST['nama'];
			$alamat=$_POST['alama'];
			$kel=$_POST['kelamin'];
			$tgl=$_POST['tgl'];
			$jumlah=$_POST['jumlah'];
			for ($i=1; $i <=$jumlah ; $i++) {
       ?>
       		<table>
			<tr>
				<td><input type="hidden" name="nama" value="<?php echo "$nama"; ?>"></td>

			</tr>
			<tr>
		
				<td><input type="hidden" name="alama" value=" <?php echo  "$alamat";?>"></td>
			</tr>
			<tr>
				
				<td><input type="hidden" name="kelamin" value="<?php echo "$kel"; ?>"></td>
				<td><input type="hidden" name="kelamin" value="<?php echo "$kel"; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="tgl" value="<?php echo "$tgl" ?>"></td>
			</tr>
			<tr>
				
				<td><input type="hidden" name="jumlah" value="<?php echo "$jumlah"; ?>"></td>
			</tr>

		</table>
       
	 <table>
	 	<tr>
	 		<td>judul buku</td>
	 		<td><input type="text" name="judul[]" required></td>
	 	</tr>
	 	<tr>
	 		<td>kode  buku</td>
	 		<td><input type="text" name="kode[]" required></td>
	 	</tr>
	 	<tr>
	 		<td>Pengarang</td>
	 		<td><input type="text" name="pengarang[]" required></td>
	 	</tr>
	 	<tr>
	 		<td>jenis buku</td>
	 		<td><select name="jenis[]" required>
	 			<option>-PILIH</option>
	 				<option value="Novel"> Novel </option>
	 				<option value="Fiksi"> Fiksi</option>
	 				<option value="Horror">Horror</option>
	 				<option value="Cergam">Cergam</option>
	 				<option value="Komik">Komik</option>
	 		</select>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>Harga buku</td>
	 		<td><input type="number" name="harga[]" required></td>
	 	</tr>
	 </table>

	 <?php echo "<hr>";} ?>
	 	 	 	<table>
	 		<tr>
	 			<td><button name="input">Input</button></td>
	 			<td><button type="reset">Reset</button></td>
	 		</tr>
	 	</table>

	 	<?php } ?>


		
	</form>

</body>
</html>
