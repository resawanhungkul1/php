<?php  

$aso  =
[
[
'judul :'=>'Belajar php  & mysql untuk pemula',
'penulis :'=>'admin smk'


],

[
'judul :'=>'Tutorial php dari nol hingga mahir',
'penulis :'=>'admin smk'

],
[ 
'judul :'=>'membuat aplikasi web dengan php',
'penulis :'=>'admin smk'

]


];
foreach ($aso as $index=> $value) {
	
		# code...
	
  echo "<h1>judul : ".$value["judul :"].$index["judul :"]."</h1><br>";
  echo "<h3>penulis : ".$value["penulis :"].$index["penulis :"]."</h3><hr> <br>";
  

}








 ?>