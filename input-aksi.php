<?php 
include 'koneksi.php'; //include merupan perintah untuk menyisipkanfile php ke dalam file php yang lainnya
// $id_lapak= $_POST['d_lapak_laundry'];
$ekstensi_diperbolehkan	= array('png','jpg');
$nama_file = $_FILES['file']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];	
$Nama = $_POST['Nama_lapak'];
$Alamat= $_POST['Alamat'];
$Kategori = $_POST['Kategori'];
$No_Tlp = $_POST['No_Tlp'];
$email = $_POST['Email'];
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'file/'.$nama_file);
        $query = mysqli_query($host,"INSERT INTO registrasi_laundry  VALUES('','$Nama','$Alamat','$Kategori','$No_Tlp','$email', '$nama_file')");
        if($query){
            echo 'FILE BERHASIL DI UPLOAD';
        }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
        }
    }else{
        echo 'UKURAN FILE TERLALU BESAR';
    }
}else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
 //query mysql untuk menjalankan perintah pada mysql (untuk menampilkan data pada tabel user variabel)

//  header("location:index.php?pesan=input"); //untuk mengalihkan halaman
?>