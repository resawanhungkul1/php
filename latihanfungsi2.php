<?php
function luas_segitiga($alas,$tinggi,$luas){
echo "alas segitiga adalah : $alas <br>";
echo "tinggi segitiga adalah : $tinggi <br>";
echo "luas segitiga adalah : $luas";

}
$a=100;
$t=9;
$l=$a*$t/2;
echo "<b>menghitung luas segitiga  : </b><br>"; 
luas_segitiga($a,$t,$l); 
echo "<hr>";

function lingkaran($jari,$luas,$keliling){
	echo "jari-jari  lingkaran adalah : $jari<br>";
	echo "luas  lingkaran adalah : $luas<br>";
	echo "keliling  lingkaran adalah : $keliling";
	


}
$s=10;
$j=10;
$i=3.14*($j*$j);
$r=2*(3.14*$j);
echo "<b>menghitung lingkaran :</b><br>";
lingkaran($j,$i,$r);
echo "<hr>";

?>