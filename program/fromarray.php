<!DOCTYPE html>
<html>
<head>
	<title>form array</title>
</head>
<body>
<center>form array</center>
<fieldset>
	<form action=""  method="post">
	<legend >form array</legend>
	<table>
		<tr> 
			<td>nomer</td>
			<td><input type="number" name="no" min="1"></td>
			<td><button name="simpan">simpan</button><td>
		</tr>
	</form>
</fieldset>

<form action="formarraypro.php" method="post">
<?php 
	if (isset($_POST['simpan'])) {
		$no =$_POST['no'];
		for ($i=1; $i <=$no ; $i++) { 
?>
 <table>
 	<tr>
 		<td>nama</td>
 		<td><input type="text" name="nama[]"></td>
 		<td>kelas</td>
 		<td><input type="text" name="kelas[]"></td>
 	</tr>

 </table>
 <?php 
	}

  ?>
<table>
	<tr>
		<button name="input">simpan</button>
		<button type="reset" >reset</button>
	</tr>
</table>

  <?php 
}
   ?>
   </form>
   </body>
</html>
