<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bangun ruang</title>
</head>
<body>
    <fieldset>
        <legend>Lngkaran</legend>
        <form action="" method="post">
        <label for="">Jari-Jari</label>
        <input type="text" name="jari">
        <button name="simpan">simpan</button>
        </form>
    </fieldset>
</body>
</html>
<?php
class Lingkaran{
    public $jari;
     
     public function __construct($jari) {
         $this->jari=$jari;
         
 
     }
     public function hitungling(){
         return(2*3.14*$this->jari);
     }
     public function hitunguas(){
         return(3.14*$this->jari*$this->jari);

     }
 }
 if (isset($_POST['simpan'])) {
     $jari=$_POST['jari'];

 }
 $lingkaran1=new Lingkaran($jari);
 echo "menghitung luas segitiga <br>";
 echo "jari-jari = $lingkaran1->jari <br>";
echo "Luas lingkaran".$lingkaran1->hitunguas()."<br>";
echo "Luas keliling".$lingkaran1->hitungling();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bangun ruang</title>
</head>
<body>
    <fieldset>
        <legend>segitiga</legend>
        <form action="" method="post">
        <label for="">alas</label>
        <input type="text" name="alas">
        <label for="">tinggi</label>
        <input type="text" name="tinggi">
        <button name="simp">simpan</button>
        </form>
    </fieldset>
</body>
</html>
<?php
class Luas{
   public $alas,$tinggi;
    
    public function __construct($alas,$tinggi) {
        $this->alas=$alas;
        $this->tinggi=$tinggi;

    }
    public function hitungluas(){
        return(0.5*$this->alas*$this->tinggi);
    }
}
if (isset($_POST['simp'])) {
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];

}
$luas1 =new Luas($alas,$tinggi);
    echo "alas = $luas1->alas<br>";
    echo "tinggi = $luas1->tinggi<br>";
    echo "luas = ".$luas1->hitungluas();
?>