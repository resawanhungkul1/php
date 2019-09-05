<?php
$aso=array(
	[
	'nama'=>'ujang',
	'kelas'=>'11',
	'alamat'=>'bojong'

	],
	[
	'nama'=>'mahmud',
	'kelas'=>'11',
	'alamat'=>'jakarta'
	],
	[
	'nama'=>'ucok',
	'kelas'=>'12',
	'alamat'=>'bandung'
	]


	);
echo "<pre>"; 
print_r ($aso); 
echo "</pre>";

echo "<pre>";
$key = key($aso[2]);
$mode =current($aso[2]);
echo "$key : "."$mode"."<br>"; 

$a = next($aso[2]);
$key =key($aso[2]);
$mode = current($aso[2]);
echo "$key : "."$mode"."<br>"; 

$a = next($aso[2]);
$key =key($aso[2]);
$mode = current($aso[2]);
echo "$key : "."$mode"."<hr>"; 
 echo "</pre>";

?>