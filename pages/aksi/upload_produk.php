<?php
include '../../assets/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$namafile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto']['size'];
$id=$_POST['id_ikm'];
$id_gambar=$_POST['id_gambar'];


    if($ukuran > $limit){
		header("location:../profile?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../media/tempat_usaha/'.$namafile);
			$x = $namafile;
            $query = "INSERT INTO tb_media_produksi VALUES ('','$id','$x')";
            $result = mysqli_query($koneksi, $query);
			header("location:../profile.php?id_ikm=$id&pesan=simpan#tabs-3");
		
	}
?>  