<?php  
session_start();
if (isset($_SESSION['akseslogin'])) {

		echo "<script> alert ('berhasil login');"."window.location.href='home2.php'</script>";
	unset($_SESSION);
	session_destroy();
	header("location:home.php");

	# code...
}

 ?>