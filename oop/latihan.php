<?php
class Luas{
   public $alas,$tinggi;
    
    public function __construct($a,$b) {
        $this->alas=$a;
        $this->tinggi=$b;

    }
    public function hitungluas(){
        return(0.5*$this->alas*$this->tinggi);
    }
}
class Bangunruang{
    public $jari;
     
     public function __construct($c) {
         $this->jari=$c;
         
 
     }
     public function hitungling(){
         return(2*3.14*$this->jari);
     }
     public function hitunguas(){
         return(3.14*$this->jari*$this->jari);

     }
 }
$segitiga= new Luas(10,12);
echo "menghitung luas segitiga <br>";
echo "alas = $segitiga->alas <br>
tinggi = $segitiga->tinggi<br>".
 "Luas =".$segitiga->hitungluas();
 echo "<hr>";
$lingkaran= new Bangunruang(10);
echo "menghitung luas segitiga <br>";
echo "Luas lingkaran".$lingkaran->hitunguas()."<br>";
echo "Luas keliling".$lingkaran->hitungling();
?>