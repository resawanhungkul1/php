<?php  
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title> Login page</title>
</head>
<body>
		<form action="" method="post">
				email <input  type="email" name="email" required> <br>
				password <input type="password" name="pass" required><br>
				<button name="Akses"> login </button>
		 </form>

</body>
</html>
<?php  
		if (isset($_POST['Akses'])) {
			$a=$_POST['email'];
			$b=$_POST['pass'];

			if ($a=="resawan@gmail.com" && $b=="123") {
				$_SESSION['akseslogin']=$a;
				header("location:hal1.php");
			}else{
				echo "Login Gagal";
			}
		}elseif (isset($_SESSION['akseslogin'])) {
			echo "<script> alert ('anda sudah login');"."window.location.href='hal1.php'</script>";
		}

 ?>