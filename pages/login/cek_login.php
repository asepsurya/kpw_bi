<?php 
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include '../../assets/koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// menyeleksi data admin dengan username dan password yang sesuai
$data1 = mysqli_query($koneksi,"select * from user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($data1);
	    // cek jika user login sebagai admin
	if($data['level']=="1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $data['level'];
        $_SESSION['nama'] = $data['nama'];
		$_SESSION['id_ikm']= $data['id_ikm'];
		header("location:../index?id_ikm=0&pesan=login_berhasil");
	    // cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "2";
        $_SESSION['nama'] = $data['nama'];
		$_SESSION['id_ikm']=$data['id_ikm'];
		header("location:../index?id_ikm=$data[id_ikm]");
	    // cek jika user login sebagai pengurus
    }else if($data['level']=="12"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "12";
        $_SESSION['nama'] = $data['nama'];
		$_SESSION['id_ikm']=$data['id_ikm'];
		header("location:../index?id_ikm=$data[id_ikm]");
	    // cek jika user login sebagai pengurus
	}else if($data['level']=="13"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "13";
        $_SESSION['nama'] = $data['nama'];
		$_SESSION['id_ikm']=$data['id_ikm'];
		header("location:../index?id_ikm=$data[id_ikm]");
	    // cek jika user login sebagai pengurus
	}else if($data['level']=="14"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "14";
        $_SESSION['nama'] = $data['nama'];
		$_SESSION['id_ikm']=$data['id_ikm'];
		header("location:../index?id_ikm=$data[id_ikm]");
	    // cek jika user login sebagai pengurus
	}
    else if($data['level']=="3"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		header("location:halaman_pengurus");
		die();
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	
	header("location:../login.php?pesan=gagal_login");
}

?>