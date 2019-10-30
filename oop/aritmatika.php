<?php
    class Aritmatika{
        public $a;
        public $b;


        public function tambah($a,$b)
        {

            return "perhitungan $a + $b = ".($a+$b);
        }
        public function kurang($a,$b)
        {
            return "perhitungan $a - $b = ".($a-$b);
        }
        public function kali($a,$b)
        {
            return "perhitungan $a x $b = ".($a*$b);
        }
        public function bagi($a,$b)
        {
            return "perhitungan $a : $b = ".($a/$b);
        }


    }
    $perhitungan = new Aritmatika();
    echo $perhitungan->tambah('20','10');
    echo "<br>". $perhitungan->kurang('20','10');
    echo "<br>". $perhitungan->kali('20','10');
    echo "<br>". $perhitungan->bagi('20','10');
    echo "<hr>";

    $perhitungan2 = new Aritmatika();
    echo $perhitungan2->tambah('30','10');
    echo "<br>". $perhitungan2->kurang('30','10');
    echo "<br>". $perhitungan2->kali('30','10');
    echo "<br>". $perhitungan2->bagi('30','10');
   

?>