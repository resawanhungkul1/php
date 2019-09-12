<?php 
	if (isset($_POST['input'])) { 
		$nama =  $_POST['nama'];
		$nip = $_POST['nip'];
		$alamat = $_POST['alamat'];
		$kelamin = $_POST['kelamin'];
		$stat   = $_POST['stat'];
		$jabatan =$_POST['jabatan'];
		$gol  = $_POST['gol'];
		echo "<h3 align ='right'>".date("d/m/Y H:i:s")."</h3>";




echo "<b>BIODATA</b><br>";
	echo "nama   :$nama<br>";
	echo "Nip    :$nip <br>";
	echo "kelamin  :$kelamin<br>";
	echo "alamat  :$alamat<br>";
	echo "status  :$stat";	// if ($stat=="menikah") {
	// 	echo "menikah :".$a;
	// }if ($stat=="belum") {
	// 	echo "belum menikah :" .$b;
	// }	

echo "<br>jabatan :$jabatan<br>";

echo "Potongan ";
	if (isset($_POST['a1'])) {   
		echo " ~" . $_POST['a1'] ;   
}	if (isset($_POST['a2'])) {   
		echo ", " . $_POST['a2'] ;   
}	if (isset($_POST['a3'])) {   
		echo ", " . $_POST['a3'] ;   
}	
echo "<br>golongan : $gol<br><br>";

echo "<b>keterangan</b><br>";


if ($gol == "A1") {
   $a=250000;
echo "golongan A1 = Rp.250.000";
}elseif ($gol == "A2") {
	$a=200000;
	echo "golongan A2 = Rp.200.000";
}elseif ($gol == "A3") {
	$a=150000;
	echo "golongan A3 = Rp.150.000";
}
echo "<br>";


	if ($stat == "menikah") {
		$t=100000;
		echo "menikah : Rp.100000";
	}elseif ($stat == "belum menikah"){
		$t=50000;
		echo "belum menikah : Rp.50000";
	}

	echo "<br>";

	if ($jabatan=="HRD") {
		$b=5000000;
		echo "HRD = Rp.5000.0000";
	}elseif ($jabatan=="manager") {
		$b=4500000;
		echo "manager=Rp.4500.000";
	}elseif ($jabatan=="staff") {
		$b=3000000;
		echo "staff = Rp.3000.000";
	}elseif ($jabatan=="karyawan") {
		$b=2500000;
		echo "karyawan =  Rp.2500.000" ;
	}
	echo "<br>";



if ("BPJS") {
   $c=250000;
   $po=$c;
echo "BPJS = Rp.250.000";
}if ("koperasi") {
	$c2=150000;
	$po=$c+$c2;
	echo "<br>koperasi = Rp.200.000";
}if ("jamsos") {
	$c3=150000;
	$po=$c+$c2+$c3;
	echo "<br>jamsos = Rp.150.000";
}
echo "<br>";
$kotor=($a+$t+$b)-$po;
$pajak=($kotor*2.5/100);	
$bersih=$kotor-$pajak;
echo "gaji kotor : $kotor<br>";
echo "pajak  : $pajak<br>";
echo "gaji bersih : ".$bersih;

}
 ?>