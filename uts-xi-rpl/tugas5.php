<?php  
session_start();
if ($_SESSION['akseslogin']) {

 ?>


<!DOCTYPE html>
<html>
<head>
		<link rel="icon" type="image/png" href="logo.png" >
	<title> Latihan 1</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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
        <a class="nav-link" href="#">PRODUK <span class="sr-only">(current)</span></a>
      </li>

      </li>		


    </ul>
    <form class="form-inline my-2 my-lg-0">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="padding:20px">
					<div class="card">
				<form  action="tugas1.php" method="post"> 
						<div class="card-header">Pembayaran</div>
						<div class="card-body"> 
							  <div class="form-group"> 
							  		<center> <label><h1><?php echo"Total kembalian : RP.0"; ?><h1></label></center>
							  	   <center> <label><h1><?php echo"Terimakasih" ?><h1></label></center>
							  		<center> <label> Apakah anda ingin menulang lagi</label><br>
							  				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="in"><a href="tugas1.php"></a> Ya</button>
							  		</center>
							  </div>

							  </div>
						
						</form>
						<div class="form-group"> 
						<center><button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="tidak"><a href=""></a> Tidak</button></center>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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

</body>
</html>
<?php  } ?>