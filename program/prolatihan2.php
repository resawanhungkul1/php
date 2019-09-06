<?php 
if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];
	$mapel1 = $_POST['mapel1'];
	$mapel2 = $_POST['mapel2'];
	$rata =($mapel1+$mapel2)/2;
	$alamat = $_POST['alamat'];
	 echo "Nama Anda : <b>$nama</b> <br>"; 
	   echo "kelas Anda : <b>$mapel1</b><br>";
	    echo "Alamat Anda : <b>$mapel2</b><br>";
	    echo "rata rata : <b>$rata</b><br>" ;
	     echo "Hobi Anda : <b>$alamat</b><br>";
	     echo "status : lulus ";
	
	if ($rata>75) {
		# code...
	

	     echo "status : lulus ";
	 }
	 else {

	     echo "status : tidak lulus ";
	 	
	 }

	} 
?>