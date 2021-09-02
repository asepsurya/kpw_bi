<?php
include '../../assets/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$namafile = $_FILES['foto2']['name'];
$tmp = $_FILES['foto2']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto2']['size'];
$id=$_POST['id_ikm'];
$id_gambar=$_POST['id_gambar1'];


    if($ukuran > $limit){
		header("location:../index?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../media/'.$namafile);
			$x = $namafile;
            $query = "INSERT INTO tb_media_produk VALUES ('','$id','$x')";
            $result = mysqli_query($koneksi, $query);
			header("location:../profile?id_ikm=$id&pesan=simpan");
		
	}
?>  