		<?php  
		if (isset($_POST['akses'])) {
			$a=$_POST['nama'];
			$b=$_POST['ps'];

			if ($a=="resawan" && $b=="123") {
				$_SESSION['akseslogin']=$a;
				header("location:tugas1.php");
			}else{
				echo "Login Gagal";
			}
		}elseif (isset($_SESSION['akseslogin'])) {
			echo "<script> alert ('anda sudah login');"."window.location.href='tugas1.php'</script>";
		}

 ?>