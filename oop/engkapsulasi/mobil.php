<?php
    class Mobil{
        public $merek="Brio";
        private $pajak=1000000;
        protected $proses_pembuatan="hanya para pegawai yang tau";
        public function merek_mobil(){
            $this->pajak;
            return "<br>merek mobil =".$this->merek;
        }
        public function pajak_mobil(){
            $this->pajak;
            return "<br>pajak mobil =".$this->pajak;
        }
    }
    class Pembuatan extends Mobil{
        public function proses(){
            return "<br>proses pembuatan  =".$this->proses_pembuatan;
        }
    }

    $mobil= new Mobil();
    $proses= new Pembuatan();
    echo $mobil->merek_mobil();
    echo $mobil->pajak_mobil();
    echo $proses->proses();
?>