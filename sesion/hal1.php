<?php  
session_start();
if ($_SESSION['akseslogin']) {
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 </head>
 <body>
 <form action="" method="post">
 		<nav>
 				<a href="hal1.php">halaman 1</a>
 				<a href="hal2.php">halaman 2</a> 
 				<a href="hal3.php">halaman 3</a>   
 				<a href="logout.php">logout</a> 

 		</nav>
 		<table>
 		<tr>
 			<td align="center">LUAS SEGITIGA</td>
 		</tr>
 			<tr>
 				<td>Alas</td>
 				<td><input type="text" name="alas" required></td>
 			</tr>
 			<tr>
 				<td>Tinggi</td>
 				<td><input type="text" name="tinggi" required></td>
 			</tr>
 			<tr>
 				<td><button name="input">masukan</button></td>
 			</tr>
 		</table>
 		</form>

  <?php 
  		if (isset($_POST['input'])) {
  			$al=$_POST['alas'];
  			$ti=$_POST['tinggi'];
  			$total=$al*$ti/2;

  			echo "luas segitiga ".$total;
  		}

   ?>
 
 </body>
 </html>
 <?php  
 }	else{
 		echo "<script> alert('Silahkan Login Terlebih dahulu');"
 		."window.location.href='login.php'</script>";
 	}
 ?>

 