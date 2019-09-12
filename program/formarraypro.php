<?php 
if (isset($_POST['input'])) {
	$nama =$_POST['nama'];
	$kelas= $_POST['kelas'];

var_dump($nama);
	

	foreach ($nama as $data => $x) {
		echo "nama : " .$nama[$data].
			"-kelas :".$kelas[$data]."hr";
	
	}
}
 ?>