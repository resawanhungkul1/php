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
      <li class="nav-item">
        <a class="nav-link" href="nilai.php">Raport</a>
      </li>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6" style="padding:20px">
					<div class="card">
						<div class="card-header">Latihan</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<label >Nama</label>
									<input type="text" name="nama" class="form-control">
								</div>
								<div class="form-group">
									<label>Kelas</label>
									<input type="text" name="kelas" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" name="simpan" class="btn btn-primary">simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6" style="padding:20px">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Nama</th>
								<th>Kelas</th>
							</tr>
							<!-- PHP  -->
							<?php 
								if (isset($_POST['simpan'])) {
									$a=$_POST['nama'];
									$b=$_POST['kelas'];
								
							 ?>
							 <!-- end php -->
				              <tr>
				                <td><?php if (isset($a)){ echo $a;} ?></td>
				                <td><?php if (isset($b)){ echo $b;}?></td>
				              </tr>
				              <?php } ?>
						</table>
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