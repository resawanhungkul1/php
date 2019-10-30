<?php
class Komputer
{
    private $Jenis="intel core i7-4790 3.6Ghz";
    public function tampilkan_processor()
    {
        return $this->Jenis;
    }
}
//buat class laptop
class Laptop extends Komputer{ 
    public function tampilkan_processor(){
        return $this->Jenis;
    }
}
$komputer_baru = new Komputer();
$laptop_baru= new Laptop();
echo $komputer_baru-> tampilkan_processor();
echo $laptop_baru->tampilkan_processor();
?>