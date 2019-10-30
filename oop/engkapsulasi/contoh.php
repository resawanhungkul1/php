<?php
class Manusia
{
    public $umur,$tgl_lahir;
    protected $jenis_kelamin;
    private $status;

    public function makan()
    {
        return "manusia juga butuh makan";
    }
    public function minum()
    {
        return "manusia juga butuh minum";
    }
    public function ambil_status($status_saat_ini)
    {
        return $this->status=$status_saat_ini;

    }
    public function  status_gua()
    {
        return "Barbar namun kadang ambyar";
    }
    
}
class Pria extends Manusia{
    public function jk($jk)
    {
        return $this->$jenis_kelamin=$jk;
    }
    public function datadiri()
    {
        $datadiri ="<br>Aku seorang".$this->jenis_kelamin;
        $datadiri .="<br> Yang lahir pada".$this->tgl_lahir;
        $datadiri .="<br> Sampai saat ini masih".$this->status_gua();
        $datadiri .="<br> Karena saya masih".$this->umur;
        $datadiri .="<br> belum pantas untuk menikah";
        return $datadiri;
    }
}

$saya =new Pria();
$saya->tgl_lahir ="10 agustus 2010";
$saya->jk =("laki-laki");
$saya->ambil_status =("lajang");
$saya->umur ="17 tahun";

echo $saya->datadiri();
echo $saya ->makan();
?>