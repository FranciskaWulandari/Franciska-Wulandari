<!DOCTYPE html>
<html>
<head>
	<title>Clean in Click</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Clean in Click</h1>
		
	</div>
	<br/>
 
	<?php //untuk membuat pesan bahwa data berhasil di inputkan
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan']; 
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<!--elemen tabel-->
	<table border="1" class="table"> 
		<tr>
			<th>Id Lapak</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kategori</th>
			<th>No Tlp</th>		
            <th>Email</th>	
		</tr>
		<?php 
		//include merupan perintah untuk menyisipkanfile php ke dalam file php yang lainnya
		include "koneksi.php";
		//query mysql untuk menjalankan perintah pada mysql (untuk menampilkan data pada tabel user variabel)
		$query_mysql = mysqli_query($host,"SELECT * FROM registrasi_laundry")or die(mysql_error());
		$nomor = 1;

		//menggunakan while php
		while($data = mysqli_fetch_array($query_mysql)){// $data perintah untuk menampilkan data

			//berfungsi memecahkan data menjadi array dan memasukkan ke dalma variabel data dalam bentuk perulangan
		?> 
		<tr>
			<td>B0<?php echo $data['id_lapak_laundry']; ?></td>
			<td><?php echo $data['Nama_lapak']; ?></td>
			<td><?php echo $data['Alamat']; ?></td>
			<td><?php echo $data['Kategori']; ?></td>
            <td><?php echo $data['No_Tlp']; ?></td>
            <td><?php echo $data['Email']; ?></td>
			<td>
			<!--variabel data sudah menjadi array -->

				<a class="edit" href="edit.php?id=<?php echo $data['id_lapak_laundry']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id_lapak_laundry']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
    
</body>
</html>