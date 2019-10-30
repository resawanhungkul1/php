<?php
class Gaji{
    public $wali,$km,$sk,$be;
                            
    public function __construct($a,$b,$c,$d) {
        $this->wali=$a;
        $this->km=$b;
        $this->sk=$c;
        $this->be=$d;

    }
    public function datadiri(){
        $datadiri ="<br>Nama : ".$this->wali;
        $datadiri .="<br> NIP : ".$this->km;
        $datadiri .="<br> Alamat : ".$this->sk;
        $datadiri .="<br> jumlah kerja harian : ".$this->be;
        return $datadiri;
    }
    public function gajikotor(){
        $kotor=$this->be*75000;
        return "gaji kotor : $kotor<br>";
    }
    public function gajibersih(){
        $kotor=$this->be*75000;
        $bersih=$kotor*0.025;
        $hasil=$kotor-$bersih;
        return "gaji bersih : $hasil <br>";

    }
}
if (isset($_POST['simpan'])) {
    $a=$_POST['wali'];
    $b=$_POST['km'];
    $c=$_POST['sk'];
    $d=$_POST['be'];
    $data=new Gaji($a,$b,$c,$d);
    echo $data->datadiri()."<br>";
    echo $data->gajikotor();
    echo $data->gajibersih();
}

?>