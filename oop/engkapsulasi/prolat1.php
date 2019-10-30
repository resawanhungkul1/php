<?php
class Anggota{
    public $wali,$km,$sk,$be;
                            
    public function __construct($a,$b,$c,$d) {
        $this->wali=$a;
        $this->km=$b;
        $this->sk=$c;
        $this->be=$d;

    }
    public function datadiri(){
        for ($i = 0; $i < count($this->wali); $i++) {
        $datadiri[$i] ="<br>Nama : ".$this->wali[$i];
        $datadiri[$i] .="<br> NIK : ".$this->km[$i];
        $datadiri [$i].="<br> Alamat : ".$this->sk[$i];
        $datadiri[$i] .="<br> umur : ".$this->be[$i];
        
        
    }
    return $datadiri;
    
    
}
}

if (isset($_POST['save'])) {
    $jml = $_POST['jumlah'];
    $nama = $_POST['nama'];
    $nik = $_POST['kelas'];
    $alamat = $_POST['n_harian'];
    $umur = $_POST['n_uts'];

}
$a=new Anggota($nama,$nik,$alamat,$umur);

foreach($a->datadiri() as $data ){
    echo "$data"."<hr>";
}
?>
