<?php 
$loop = 20;
$num =1;
for ($i=0; $i <= $loop; $i++) { 
	if ($i==1) {
		echo "aku data ke ".$num++."dan mendapatkan mendali emas <br>";
		
	}elseif ($i==2) {
		echo "aku data ke ".$num++."dan mendapatkan mendali perak <br>";
			
	}elseif ($i==3) {
		echo "aku data ke ".$num++."dan mendapatkan mendali perunggu <br>";
	}elseif ($i>=7 && $i<=6 ) {
		echo "aku data ke ".$i."dan mendapatkan tas laptop <br>";
	}elseif ($i>= 7 && $i <=9) {
		echo "aku data ke ".$i."dan mendapatkan tas karung <br>";
    }elseif ($i>=10) {
		echo "aku data ke ".$i."dan tidak mendapatkan apapun <br>";
}
}

 ?>