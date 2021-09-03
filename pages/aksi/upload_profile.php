<?php
session_start();
include '../../assets/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$namafile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto']['size'];
$id=$_POST['id_ikm'];


    if($ukuran > $limit){
		header("location:../index?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../media/foto/'.$namafile);
			$x = $namafile;
            $query = "UPDATE user SET gambar ='$x' WHERE id_ikm ='$_SESSION[id_ikm]'";
            $result = mysqli_query($koneksi, $query);
			header("location:../profile.php?id_ikm=$_SESSION[id_ikm]&pesan=simpan");
		
	}
?>  