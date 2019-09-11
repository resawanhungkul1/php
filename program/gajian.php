<!DOCTYPE html>
<html>
<head>
	<title>gajian</title>
</head>
<body>
<center>gajian</center>
<form action="progajian.php" method="post">
	
	<table>
		<tr>
			<td>Nama : </td>
			<td><input type="text " name="nama" required></td>
		</tr>
		<tr>
			<td>Nip :</td>
			<td><input type="number" name="nip" required></td>
		</tr>
		<tr>
			<td>Jenis kelamin : </td>
			<td>
				<input type="radio" name="kelamin" value="laki laki"> laki laki
				<input type="radio" name="kelamin" value="perempuan"> permpuan
			</td>
		</tr>
		<tr>
			<td>Alamat :</td>
			<td><textarea name="alamat" cols="50" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>status : </td>
			<td>
				<select name="stat">
				<option>PILIH -</option>
					<option name="menikah"  value="menikah"> menikah </option>
					<option name="belum" value="belum menikah">belum menikah </option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>
				<select name="jabatan">
					<option>PILIH -</option>
					<option  value="HRD">HRD</option>
					<option  value="manager">manager</option>
					<option  value="staff">staff</option>
					<option  value="karyawan">karyawan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>potongan </td>
			<td>
				<input type="checkbox"  name="a1" value="BPJS">BPJS
				<input type="checkbox"  name="a2" value="koperasi"> koperasi
				<input type="checkbox" name = "a3" value="jamsostek"> jamsostek

			</td>
		</tr>
		<tr>
			<td>golongan </td>
			<td>
				<select name="gol">
				<option>PILIH -</option>
					<option value="A1">A1</option>
					<option value="A2">A2</option>
					<option value="A3">A3</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><button type="submit"  name="input"> simpan </button> </td>
			<td><button type="reset"   name="reset"> reset </button> </td>
		</tr>

	</table>
</form>

</body>
</html>