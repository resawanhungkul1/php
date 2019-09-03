<?php  

$aso  =[
	[
	'nama'=>'agung wahyudi'
	'kelas'=>'informatika 10'

	],
	[
	'nama'=>'agung 2',
	'kelas'=>'informatika 111'
	]


	];
foreach ($aso as  $value) {
  echo $value["nama"]."<br>";
  echo $value["kelas"]."<br>";
}



echo '<hr>';
 $countaso =count($aso);
for ($i=0; $i <$countaso ; $i++) { 
	echo $aso[$i]["nama"]."<br>";
		echo $aso[$i]["kelas"]."<br>";
}




 ?>