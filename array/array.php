<?php 
$a = array('ahmad',19,true,3.19,"dadang" );

//menampilkan array satu satu\
echo "array menggunakan echo<br>";
echo $a[0]."<br>";
echo $a[3]."<br>";

echo "<br>";
echo "array menggunakan looping for<br>";
for ($i=0; $i < count($a) ; $i++) {

	echo "array - " .$a[$i]. "<br>";
}


echo "<br>";
echo "array menggunakan  foreach <br>";

foreach ($a as  $value) {
	echo "array  - " .$value. "<br>";
}
 ?>