<?php  
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
		<link rel="icon" type="image/png" href="logo.png" >
	<title> Latihan 1</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<!-- Header -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"> <span class="glyphicon glyphicon-home">HOME</span></a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">

    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-4" style="padding:20px">
					<div class="card">

                  <img src="logo.png" alt="..." class="rounded mx-auto d-block " width="70px" align="center">
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
					
									
									<input type="text" name="nama"   class="form-control is-valid" id="validationServer01" placeholder="First name" value="resawan" required >
								</div>
								<div class="form-group">
									
									<input type="Password" name="ps" class="form-control is-valid" id="validationServer01" placeholder="First name" value="123" required>
								</div>
								<div class="form-group">
									<button type="submit" name="akses" class="btn btn-primary btn-block">Login</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <img src="suzuki.png" alt="..." class=" mx-auto d-block " width="40px" >
		  <img src="logo-icon-1.png" alt="..." class="rounded mx-auto d-block " width="40px" >
		<!-- End Content-->

		<!-- footer -->
		<footer>
			<center><b>&copy; 2019 SMK ASSALAAM</b></center>

		</footer>
		<!--  End Footer-->

		<!-- Js -->
		<script  src="assets/js/jquery-3.4.1.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.js"></script>

		<!-- End Js -->
		<?php  
		if (isset($_POST['akses'])) {
			$a=$_POST['nama'];
			$b=$_POST['ps']; 

			if ($a=="resawan" && $b=="123") {
				$_SESSION['akseslogin']=$a;
			echo "<script> alert ('berhasil login');"."window.location.href='home2.php'</script>";
			}else{
				echo "Login Gagal";
			}
		}elseif (isset($_SESSION['akseslogin'])) {
			echo "<script> alert ('anda sudah login');"."window.location.href='home2.php'</script>";
		}

 ?>

</body>
</html>
