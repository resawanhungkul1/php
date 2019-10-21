<?php  
session_start();
if ($_SESSION['akseslogin']) {

 ?>


<!DOCTYPE html>
<html>
<head>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="logot.php">LOGOUT <span class="sr-only">(current)</span></a>
      </li>		


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="padding:20px">
					<div class="card">
						<div class="card-header">Jumlah siswa</div>
						<div class="card-body">
							<form action="tugas2.php" method="post">
								<div class="form-group">
									<label >masukan jumlah  siswa</label>
									<input type="text" name="nama" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" name="simpan" class="btn btn-primary btn-block">simpan</button>
								</div>
							</form>
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