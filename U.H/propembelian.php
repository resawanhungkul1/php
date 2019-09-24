<?php 

if (isset($_POST['input'])) {
		
			$nama =$_POST['nama'];
			
			$alama=$_POST['alama'];
			$kel=$_POST['kelamin'];
			$tgl=$_POST['tgl'];
			$jumlah=$_POST['jumlah'];
			
			$jdl=$_POST['judul'];
			$kode=$_POST['kode'];
			$peng=$_POST['pengarang'];
			$jenis=$_POST['jenis'];
			$harga=$_POST['harga'];
			$sub_total=0;
	



			
			?>	

			<html>
			<head>
				<title></title>
			</head>
			<body>
			
			<h1 align="center">Assalaam Book Store </h1>
			<h3 align="center" style="color:red" >invoice pembayaran</h3>
			<table border="" align="center" width="94%" bgcolor="#ffffff" > 
			<tr>
			
				<th>Nama</th>
				<th>Alamat</th>
				<th>jenis kelamin</th>
				<th>tanggal</th>
				<th colspan="2">jumlah buku</th>
				
			</tr>
			<tr>
				<td align="center"><?php  echo "$nama"; ?></td>
				<td align="center"> <?php  echo "$alama"; ?></td>
				<td align="center"><?php  echo "$kel"; ?></td>
				<td align="center"><?php  echo "$tgl"; ?></td>
				<td align="center" colspan="2"><?php  echo "$jumlah"; ?></td>
			</tr>
			<tr>
				<th colspan="6">Daftar buku Yang Dibeli</th>
			</tr>
			<tr>
					<th rowspan="">Nomor</th>
					<th rowspan="">Judul</th>
					<th rowspan="">Kode</th>
					<th rowspan="">Pengarang</th>
					<th>jenis<br>Buku </th>
					<th>Harga <br> Rp</th>
			</tr>
				
				<?php 
						$i=1;
				for ($key=0; $key < count($harga); $key++) { 

					$sub_total=$sub_total+$harga[$key];

					?>
		
						<tr>
						    <td align="center"> <?php  echo $i++; ?></td>
							<td align="center"><?php echo "$jdl[$key]";?></td>
							<td align="center"><?php echo "$kode[$key]";?></td>
							<td align="center"><?php echo "$peng[$key]";?></td>
							<td align="center"><?php echo "$jenis[$key]";?></td>
							<td align="center"><?php echo "$harga[$key]";?></td>
						</tr>

						<?php 
						

						 } 
						 	
						 
						 	if ($jumlah>= 3) {
						 		$Diskon  ="5%";
						 		$jum =$sub_total*5/100;
						 	}
						 	elseif ($jumlah>=5) {
						 		$Diskon="10%";
						 		 $jum=$sub_total*10/100;
						 	}else{
						 		$Diskon="0%";
						 		$jum =0;
						 	}
						 	$hasil=$sub_total-$jum;
						 

						 ?>
						<tr>
							<th align="center" colspan="6">Total pembayaran</th>
						</tr>
						<tr>
							<th align="left" colspan="5">Sub Total</th>			
								
						<th align="center"><?php echo "Rp.". "$sub_total"; ?></th>
						</tr>
						<tr>
							<th align="left" colspan="5">Diskon <?php echo "("."$Diskon".")"; ?> </th>

							<th><?php  echo  "Rp.$jum"; ?></th>
						</tr>
						<tr>
							<th colspan="5"  align="left">Total </th>
							<th ><?php  echo "Rp."."$hasil"; ?></th>
						</tr>
<!-- 						<tr>
							<th colspan="5" align="left"> Masukan uang pembayaran</th>
							<th> <input align="center" type="text" name="pem"> <button name="bayar">Bayar</button></th>
						</tr> -->

						
						



			</table>
			<form action="" method="post"></form>
			<table> 
						<tr> 

								<td> masukan uang pembayaran</td>
								<td> <input type="text" name="pem"></td>
								<td> <button name="bayar"> Bayar </button></td>

						</tr>
			</table>
			</form>
			
			
	</body>
</html>


			<?php
}

					if (isset($_POST['bayar'])) {
						$pem =['pem'];
						var_dump('$pem');
						echo "uang pembayaran anda : $pem";
					 	
					 } 

			 ?>