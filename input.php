<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>CLEAN IN CLICK</h1>
		
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">
			
		<table>
			<tr>
				<td>Id Lapak</td>
				<td><input type="text" name="id_lapak_laundry"></td>					
			</tr>	
			<tr>
				<td>Nama Lapak</td>
				<td><input type="text" name="Nama_lapak"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><select name="Kategori" class="form-control form-control-sm">
				<option>Antar Jemput</option>
				<option>Tidak Antar Jemput</option>
				</select></td>					
			</tr>	<tr>
				<td>No Tlp</td>
				<td><input type="text" name="No_Tlp"></td>		<tr>
				<input type="text" name="deskripsi"></td>					
			</tr>	
				<td>Email</td>
				<td><input type="text" name="Email"></td>	
					
				<td></td>		
				</tr>	<tr><td></td>
				<td><input type="file" name="file"></td></tr>	<tr></tr>	<tr><td></td>
				<td><input type="submit" value="Simpan"> </td>					
			</tr>				
		</table>
	</form>
</body>
</html>