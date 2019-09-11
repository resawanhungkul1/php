<html>  
<head>
<title>Pengolahan Form</title>
</head>  
<body>  
<center><h1>tugas</h1></center> 
<FORM ACTION="prolatihan3.php" METHOD="POST" > 

<table>
   <tr>
   <td>Nama  </td>
    <td><input type="text" name="nama" required><br><br></td>
    </tr>
    <tr>
    <td>Nis</td>
    <td><input type="number" name="nis" required><br><br></td>
    </tr>

   <tr>
    <td>Alamat   </td>
   	<td><textarea name="alamat" cols="50" rows="10"></textarea></td>
   	</tr>
   <tr>
   <td>Jenis kelamin</td>
   <td>
     <input type="radio" name="jurusan" value="laki" checked> laki laki  
     <input type="radio" name="jurusan" value="perempuan"> perempuan <br>
    
     </td>
</tr>
<tr>
	<td>agama </td>
	<td>
	  <select name="a" id="">     
      <option value="islam">islam</option>     
      <option value="kristen">kristen</option>     
      <option value="budha">budha</option>
      <option value="konghucu">konghucu</option>     
    
      </select>
      
	</td>
	</tr>
	 <tr>
   <td>Asal sekolah  </td>
    <td><input type="text" name="sekolah" required><br><br></td>
    </tr>
    <tr>
   <td>Nama Orang tua/wali  </td>
    <td><input type="text" name="tua" required><br><br></td>
    </tr>

    <tr>
   <td>Mata pelajaran yang di sukai  </td>
   <td>
    <input type="checkbox" name="pel1" value="Matematika" checked> Matematika   
      <input type="checkbox" name="pel2" value="Ilmu pengetahuan alam"> Ilmu pengetahuan alam    
      <input type="checkbox" name="pel3" value="Ilmu pengetahuan sosial"> Ilmu pengetahuan sosial<br>    
      <input type="checkbox" name="pel4" value="Pendidikan agama islam"> Pendidikan agama islam
      <input type="checkbox" name="pel5" value="Bahasa indonesia"> Bahasa indonesia
       </td>
    </tr>

     <tr>
    <td>total nilai ijasah SMK</td>
    <td><input type="number" name="smk" required><br></td>
    </tr>

     <tr>
    <td>Email</td>
    <td><input type="email" name="email" required><br></td>
    </tr>
<tr>
    <td><input type="submit" name="Input" value="save" required></td> 
    <td><input type="reset" name="reset" value="reset" required></td>
    </tr> 
   </table>


       
       </FORM>  
  </body> 
</html> 