<?php
    class Siswa{
        public $nama;
        public $alamat;
        public $usia,$hobi;

        public function datadiri($nama=null,$alamat=null,$usia=null)
        {
            $this-> nama=$nama;
            $this-> alamat=$alamat;
            $this-> usia=$usia;

            return "Nama : $nama <br> Alamat : $alamat<br> usia : $usia"."<br>";
        }
        public function hobi($hobi)
        {

            $this->hobi=$hobi;
            return $this->datadiri($this->nama, $this->alamat, $this->usia)."Hobi : $hobi";
        }
    }
    $siswa1=new  Siswa();
    $siswa1->datadiri('ahmad','bandung',18);
    echo $siswa1->hobi('mancing');
?>
