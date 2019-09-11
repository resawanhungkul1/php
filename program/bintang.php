<html>
<head>
	<title>bintang</title>
</head>
<body>
<form action="" method="post">

	masukan bintang :<input type="number" name="bintang" required><br>
			 <td><input type="submit" name="Input" value="masukan" required></td>

			 </form> 
		
</body>
</html>

<?php 
if (isset($_POST['Input'])) {  
	$bintang = $_POST['bintang'];
	echo "bintang<br>";
	

	for ($a=1; $a <=$bintang ; $a++) { 
	 
			echo "*";
		
		
	


	 
} 
echo "<br>";
	echo "Total bintang = $bintang";
	echo "<br>";
	echo "<hr>";


echo "bintang piramid";
echo "<br>";

	

	

	for ($a=1; $a <= $bintang ; $a++) { 
		
		for ($b=$bintang; $b >= $a; $b--) {
		 
echo "&nbsp;";
			
		}
		for ($k=1; $k <=$a ; $k++) { 
			# code...
			echo "*";
		
		
	}
	echo "<br>";
}

	echo "<br>";
	echo "Total bintang = $bintang";
echo "<hr>";
}
echo "bintang terbalik";
echo "<br>";
if (isset($_POST['Input'])) {  
	$bintang = $_POST['bintang'];
	

	

	for ($a=1; $a <= $bintang ; $a++) { 
		
		for ($b=1; $b <= $a; $b++) {
		 
echo "&nbsp;";
			
		}
		for ($k=$bintang; $k >=$a ; $k--) { 
			# code...
			echo "*";
		
		
	}
	echo "<br>";
}

	echo "<br>";
	echo "Total bintang = $bintang";
echo "<hr>";
}

echo "ketupat<br>";  
if (isset($_POST['Input'])) {  
	$bintang = $_POST['bintang'];
	

	

	for ($a=1; $a <= $bintang ; $a++) { 
		
		for ($b=$bintang; $b >= $a; $b--) {
		 
echo "&nbsp;";
			
		}
		for ($k=1; $k <=$a ; $k++) { 
			# code...
			echo "*";
		
		
	}
	echo "<br>";
}
	

	

	for ($a=1; $a <= $bintang ; $a++) { 
		
		for ($b=1; $b <= $a; $b++) {
			echo "&nbsp;";
		 

			
		}
		for ($k=$bintang; $k >=$a ; $k--) { 
			# code...
			echo "*";
			
		
		
	}
	echo "<br>";
}

	echo "<br>";
	echo "Total bintang = $bintang";
}
	 
	  
?>