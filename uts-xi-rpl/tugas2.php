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
  <a class="navbar-brand" href="#">RESAWAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> PRODUK<span class="sr-only">(current)</span></a>
      </li>
 
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
						<div class="card-header">Nilai</div>

						<div class="card-body">
													<?php 
								if (isset($_POST['simpan'])) {
									$nama=$_POST['ni'];
									$al=$_POST['ama'];
									$jk=$_POST['kelamin'];
									$tgl=$_POST['tgl'];
									$a=$_POST['nama'];
									for ($i=1; $i <=$a ; $i++) { 
										# code...
									
								
							 ?>
							<form action="tugas3.php" method="post">
					 <table>

						<tr>
							<td><input type="hidden" name="ni" value="<?php echo "$nama"; ?>"></td>

						</tr>
						<tr>
					
							<td><input type="hidden" name="ama" value=" <?php echo  "$al";?>"></td>
						</tr>
						<tr>
							
							<td><input type="hidden" name="kelamin" value="<?php echo "$jk"; ?>"></td>
							<td><input type="hidden" name="kelamin" value="<?php echo "$jk"; ?>"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="tgl" value="<?php echo "$tgl" ?>"></td>
						</tr>
						<tr>
							
							<td><input type="hidden" name="nama" value="<?php echo "$a"; ?>"></td>
						</tr>

					</table>
							<div class="form-group">
									<label><?php  echo "data ke -$i"; ?></label>
							 </div>
								<div class="form-group">
									<label >nama barang </label>
									<input type="text" name="na[]" class="form-control" placeholder="Nama Barang"required >
								</div>
								<div class="form-group">
									<label >kode</label>
									<input type="text" name="kel[]" class="form-control" placeholder="Kode Barang"required>
								</div>

								<div class="form-group">
									<label >jenis</label>
									<select name="nh[]" class="form-control"placeholder="jenis barang" required>


		 										<option value="Novel">Novel </option>
		 										<option value="Fiksi"> Fiksi</option>
		 										<option value="Horror">Horror</option>
		 										<option value="Cergam">Cergam</option>
		 										<option value="Komik">Komik</option>
		 								</select>
								</div>
								<div class="form-group">
									<label >harga</label>
									<input type="text" name="nu[]" class="form-control" placeholder="Harga Barang" required>
								</div>
								<div class="form-group">
									<label >Jumlah</label>
									<input type="text" name="nua[]" class="form-control" placeholder="Jumlah Barang" required>
								</div>
							
								<?php  } ?>

								<div class="form-group">
									<button type="submit" name="sim" class="btn btn-primary btn-block">simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
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