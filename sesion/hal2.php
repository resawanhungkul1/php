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
 			<td align="center">LUAS LINGKARAN</td>
 		</tr>
 			<tr>
 				<td>Jari</td>
 				<td><input type="text" name="jari" required></td>
 			</tr>

 				<td><button name="input">masukan</button></td>
 			</tr>
 		</table>
 		</form>

  <?php 
  		if (isset($_POST['input'])) {
  			$al=$_POST['jari'];

  			$r=$al;
  			$total=3.14*$r*$r;
  			echo "jari :  $al";
  			echo "keliling :";

  			echo "luas lingkaran : ".$total;
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