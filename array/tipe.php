<?php 
$nim="0411500400";
$nama='resawan';
$umur=23;
$nilai=82.25;
$status=TRUE;

echo "nim : ".$nim."<br>";
echo "nama : ".$nama."<br>";
print "Umur : " . $umur; print "<br>"; 
printf("nilai : %.3f<br>",$nilai);
if($status)
	echo "status : aktif";
else
	echo "status : tidak aktif";
	


 ?>