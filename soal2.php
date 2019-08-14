<?php 
$sewamobil=375000;
$a=25000;
$denda=25000/2;
$jam=24;
$b=625000;
$c=$b-$sewamobil;
$d=$c/$denda;
$e=$d+$jam;

echo "harga sewa mobil 24 jam: ".($sewamobil);
echo "<br>denda :" .($a);
echo "<br>denda yang harus dibayar :".($c); 
echo "<br>harga sewa mobil jerry : ".($b);
echo "<br>jerry menyewa mobil dalam waktu : ".$e;

 ?>