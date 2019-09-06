<html>  
<head>
<title>Pengolahan Form</title>
</head>  
<body>   
<FORM ACTION="" METHOD="POST" > 
   Nama Anda   : <input type="text" name="nama" required><br><br>
   Kelas Anda  : <input type="text" name="kelas" required><br><br>
   Alamat Anda : <input type="text" name="alamat" required><br><br>
   hobi Anda   : <input type="text" name="hobi" required><br><br>
       <input type="submit" name="Input" value="save" required>   
       </FORM>  
  </body> 
</html> 
 
<?php 
if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$hobi = $_POST['hobi'];
	  echo "Nama Anda : <b>$nama</b> <br>"; 
	   echo "kelas Anda : <b>$kelas</b><br>";
	    echo "Alamat Anda : <b>$alamat</b><br>";
	     echo "Hobi Anda : <b>$hobi</b>";
	} 
?>