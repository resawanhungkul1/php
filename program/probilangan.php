<?php 
	if (isset($_POST['simpan'])) {
		$x =$_POST['bilangan'];
		$y =$_POST['pangkat'];

		# code...
		// foreach ($bil as $data => $value) {
		// 	echo "bilangan : " .$bil[$data].
		// 	"-pangkat :".$pang[$data]."<hr><br>";
		// 	for ($i=$bil[$data]; $i <=$pang[$data] ; $i++) { 
		// 		//versi perkalian
		// 		// echo "<br>$i x $i=".$j=$i*$i."<br>";
		// 		echo pow($i, $bil[$data]);
		// 	}
		// }
		for ($a=0; $a <count($x) ; $a++) { 
			# code...
			for ($z=1; $z <=$y[$a] ; $z++) { 
				# code...
				echo $x[$a];
				if ($z<$y[$a]) {
					echo "x";
					# code...
				}
			}
			$hasil =pow($x[$a], $y[$a]);
			echo "=".$hasil."->";
			if ($hasil%2==1) {
				echo "bilangan ganjil";
				# code...
			}else{
				echo "bilangan genap";
			}
		}
	}


 ?>