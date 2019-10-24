<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host,"SELECT * FROM registrasi_laundry WHERE id_lapak_laundry='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Id_lapak</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_lapak_laundry'] ?>">
					<!-- <input type="text" name="nama" value="<?php echo $data['lapak'] ?>"> -->
				</td>					
			</tr>	
            <tr>
				<td>Nama_lapak</td>
				<td><input type="text" name="Nama_lapak" value="<?php echo $data['Nama_lapak'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><select name="Kategori" class="form-control form-control-sm">
  <option>Antar Jemput</option>
  <option>Tidak Antar Jemput</option>
  <tr>
				<td>No_Tlp</td>
				<td><input type="text" name="No_Tlp" value="<?php echo $data['No_Tlp'] ?>"></td>					
			</tr>	<tr>
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $data['Email'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>