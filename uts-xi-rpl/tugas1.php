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
  <a class="navbar-brand" href="#">RESAWAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">PRODUK <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
  
      </li>		


    </ul>
    <form class="form-inline my-2 my-lg-0" action="logot.php" method=" post">
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
						<div class="card-header">Data Diri</div>
						<div class="card-body">
							<form action="tugas2.php" method="post">
								<div class="form-group">
									<label >Nama</label>
									<input type="text" name="ni" class="form-control" placeholder="Nama"required>
								</div>
								<div class="form-group">
									<label >Alamat</label>
									<textarea name="ama" class="form-control" placeholder="Alamat"required></textarea>
								</div>
								<div class="form-group">
									<label >jenis kelamin</label><br>
									<input type="radio" name="kelamin" value="laki laki" class="from-control" placeholder="jenis kelamin"required >laki laki
									<input type="radio" name="kelamin" value="Perempuan" class="from-control" placeholder="jenis kelamin"required>Perempuan
								</div>
							    <div class="form-group">
									<label >Tanggal</label>
									<input type="date" name="tgl" class="form-control" required>
								</div>
								<div class="form-group">
									<label >masukan jumlah barang</label>
									<input type="number" name="nama" class="form-control" placeholder="jumlah barang"required>
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