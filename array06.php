<?php
$anilai=array("ajeng"=>90 ,"mamat"=>70, "ucup"=>87,"eng"=>95, "syahrul"=> 75 );
foreach ($anilai as $nama => $nilai ) {
	echo "<pre>";
	if ($nilai>85) {
		echo "nama : $nama ,nilai : $nilai Grade A <hr> ";
	}
	elseif ($nilai>75) {
		echo "nama : $nama ,nilai : $nilai Grade B <hr> ";
	
	}
	elseif ($nilai>65) {
		echo "nama : $nama , nilai : $nilai Grade C <hr> ";
	}
	echo "</pre>";
}

?>