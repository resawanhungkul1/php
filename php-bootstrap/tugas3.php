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
        <a class="nav-link" href="logot.php">logout <span class="sr-only">(current)</span></a>
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
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>NO</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>nilai harian</th>
								<th>nilai uts</th>
								<th>nilai uas</th>
								<th> nilai akhir</th>
								<th> status</th>
							</tr>
							<?php 
						 if (isset($_POST['sim'])) {
							$na=$_POST['na'];
							$kel=$_POST['kel'];
							$nh=$_POST['nh'];
							$nu=$_POST['nu'];
							$nua=$_POST['nua'];
							$i=1;
								$akhir=0;
					for ($key=0; $key < count($na); $key++) { 
						$akhir=$nh[$key]*(60/100)+$nu[$key]*(20/100)+$nua[$key]*(20/100);
						
					?>
							 

				              <tr>
				              <td > <?php  echo $i++; ?></td>
							<td ><?php echo "$na[$key]";?></td>
							<td ><?php echo "$kel[$key]";?></td>
							<td ><?php echo "$nh[$key]";?></td>
							<td ><?php echo "$nu[$key]";?></td>
							<td ><?php echo "$nua[$key]";?></td>
							
							<td ><?php echo "$akhir";?></td>
							<td> <?php if ($akhir>75) {
								echo "LULUS";
							}else{
								echo "REMEDIAL";
							}
							 ?></td>
				              </tr>
				              <?php } ?>
						 </table>
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