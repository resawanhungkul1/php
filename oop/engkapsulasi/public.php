<?php
class Laptop
{
    public $pemilik;
    public function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }
}
//buat objek dari class laptop(instansiasi)
$Laptop_anto=new Laptop();
//set property
$Laptop_anto->pemilik="anto";
//Tampilkan property
echo $Laptop_anto->pemilik;//anto
//tampilkan method
echo $Laptop_anto->hidupkan_laptop();//"Hidupkan Laptop"
?>