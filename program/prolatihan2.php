<?php 
if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];
	$mapel1 = $_POST['mapel1'];
	$mapel2 = $_POST['mapel2'];
	$rata =($mapel1+$mapel2)/2;
	$alamat = $_POST['alamat'];
	echo "<pre>";
	    echo "Nama Anda : <b>$nama</b> <br>"; 
	    echo "mapel 1   : <b>$mapel1</b><br>";
	    echo "mapel 2   : <b>$mapel2</b><br>";
	    echo "rata rata : <b>$rata</b><br>" ;
	
	if ($rata>75) {
	     echo "status   : lulus ";
	 }
	 else {
	     echo "status   : tidak lulus ";
	 	
	 }

	} 
	echo "</pre>";
?>