<?php  
if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$alamat = $_POST['alamat'];
	$kelamin = $_POST['jurusan'];
	$asal = $_POST['sekolah'];
	$tua = $_POST['tua'];
	$nilai = $_POST['smk'];
	$email = $_POST['email'];
	$a = $_POST['a'];

echo " <pre>";
echo "Nama           : $nama <br>";
echo "NIs            : $nis <br>";
echo "alamat         : $alamat<br>";
echo "jenis kelamin  : $kelamin<br>";
echo "agama          : $a <br>";
echo "asal sekolah   : $asal<br>";
echo "nama orang tua : $tua<br>";
echo "mata pelajaran yang disukai ";
	if (isset($_POST['pel1'])) {   
		echo " ~" . $_POST['pel1'] ;   
}	if (isset($_POST['pel2'])) {   
		echo ", " . $_POST['pel2'] ;   
}	if (isset($_POST['pel3'])) {   
		echo ", " . $_POST['pel3'] ;   
}	if (isset($_POST['pel4'])) {   
		echo " ," . $_POST['pel4']  ;   
}	if (isset($_POST['pel5'])) {   
		echo ", " . $_POST['pel5']."<br>" ;   
}

echo "<br>Email           : $email <br>";
echo "nilai ijasah smk    : $nilai <br>";
	if ($nilai>23) {
	     echo "status   : lulus<br> ";
	 }
	 else {
	     echo "status   : tidak lulus <br>";
	 	
	 }




echo " </pre>";

}
?>