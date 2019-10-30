<?php
class Laptop
{
    //buat protected property
    protected $pemilik;
    //buat protected pemilik
    protected function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }
}
$Laptop_anto=new Laptop();

$Laptop_anto->pemilik="anto";
echo $Laptop_anto->pemilik;
echo $Laptop_anto->hidupkan_laptop();//"Hidupkan Laptop"
?>