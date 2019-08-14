<?php 
$harga=15000;
$dus=6;
$jambu=5;
$dusbekas=2000*6;

echo "hasil dari seluruh penjualan jambu : Rp." .($dus*$jambu*$harga);
echo "<br>hasil penjualan dus bekas : Rp.".($dusbekas);

echo "<br>hasil dari seluruh penjualan pedagang tersebut: Rp." .($dus*$jambu*$harga+$dusbekas);

 ?>