<?php 
   class Elang{
      public $warna_bulu ="coklat";
      public $sayap  =2;
      public $benar =true;
      public $salah =false;
      public $berat =20.5;

      public function berburu()
      {
         return "memburu ular";
      }
      public function terbang($var)
      {
         return "elang terbang dengan sayapnya ".$var;
      }
      public function  makan($m1,$m2)
      {
         return "makanan elang adalah " .$m1. " dan " . $m2;
      }
      public function kawin()
      {
         return "elang kawin dengan elang";
      }
      public function  bertelur()
      {
         return "elang mengerami telur ";
      }

   }

   $eagle=new Elang;
      echo 'berbbulu : ' .$eagle->warna_bulu; 
      echo '<br>'.'jumlah sayap :' .$eagle->sayap;
      echo '<br>'."" .$eagle->benar;
      echo '<br>' .$eagle->berat;
      echo '<br>' .$eagle->berburu();
      echo '<br>' .$eagle->terbang('ke angkasa');
      echo '<br>' .$eagle->makan('ular','beas');
      echo '<br>' .$eagle->kawin();
      echo '<br>' .$eagle->bertelur();


?>