<!DOCTYPE html>
<html>
<head>
	<title>pangkat</title>
</head>
<body>
<fieldset>
<form method="post">
	<legend>bilangan</legend>
	<table>
		<tr>
			<td>masukan jumlah </td>
			<td><input  type="number" name="no"></td>
		</tr>
		<tr>
			<td>
				<button name="input">simpan</button>
			</td>
		</tr>
	</table>
	</form>

</fieldset>
<form action="probilangan.php" method="post">
	<?php 
		if (isset($_POST['input'])) {
			$no =$_POST['no'];
			for ($i=1; $i <=$no ; $i++) { 

	 ?>
	 <table>
	 	<tr>
	 		<td>masukan bilangan </td>
	 		<td><input type="number" name="bilangan[]"> </td>
	 		<td>masukan pangkat bilangan</td>
	 		<td><input type="number" name="pangkat[] "> </td>
	 	</tr>
	 </table>
	 <?php } ?>
	 <table>
	 	<tr>
	 		<td><button name="simpan">simpan</button></td>
	 		<td><button type="reset">reset</button></td>
	 	</tr>
	 </table>
	 <?php } ?>
</form>

</body>
</html>