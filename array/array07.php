<?php
$nilai = array("ani" => 80, "otim" =>  90, "sri" => 75, "budi" => 85);
echo "<b> array sebelum pengurutan </b>";
echo "<pre>";
print_r($nilai);
echo "</pre>";

sort($nilai);
reset($nilai);
echo "<b>array setelah pengurutan sort()</b>";
echo"<pre>";
print_r($nilai);
echo "</pre>";

rsort($nilai);
reset($nilai);
echo "<b>array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($nilai);
echo "</pre>";

?>