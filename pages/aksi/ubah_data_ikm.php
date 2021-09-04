<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../assets/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
// mengecek apakah tombol input dari form telah diklik


  $id_ikm=$_POST['id_ikm'];
	// membuat variabel untuk menampung data dari form
  $nama_ikm = $_POST['nama_ikm'];
  $kelas = $_POST ['kelas'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  // membuat variabel untuk Kelengkapan Adm IKM
  $nama_perusahaan = addslashes($_POST['nama_perusahaan']);
  $hallal = $_POST['hallal'];
  $nib = $_POST['nib'];
  $pirt = $_POST['pirt'];
  $layak_sehat = $_POST['layak_sehat'];
  $cppob=$_POST['cppob'];
  $iso=$_POST['iso'];
  $haki = $_POST['haki'];
  $haccp=$_POST['haccp'];
  $legalitas = $_POST['legalitas'];
  $omset = $_POST['omset'];
  $kapasitas_produksi = $_POST['kapasitas'];
 // $logo_perusahaan = $_POST['logo_perusahaan'];
  $media_penjualan = $_POST['media_penjualan']; 
  $deskripsi = $koneksi -> real_escape_string($_POST['deskripsi']); 
 

  
    // jalankan query INSERT untuk menambah data ke database

    $a = "UPDATE tb_brainstorming SET nama='$nama_ikm',kelas ='$kelas' ,telp ='$telp',alamat='$alamat',gender='$gender' WHERE id_ikm = '$id_ikm'";
    if(mysqli_query($koneksi, $a)){
      
      header("location:../profile.php?id_ikm=$id_ikm");
      $_SESSION['update']=" Data  Berhasil Diubah";  

    }else{
      header("location:../profile.php?id_ikm=$id_ikm&gagal");
      $_SESSION['gagal']=" Data Gagal Diubah Mohon Periksa Kembali Data Anda";    
    }
    $a = "UPDATE tb_formulir SET nama_perusahaan='$nama_perusahaan', halal='$hallal', pirt='$pirt', media_penjualan='$media_penjualan', legalitas_lainnya='$legalitas',jenis_kemasan='$jenis_kemasan',kapasitas_produk='$kapasitas_produksi',omset='$omset' WHERE id_ikm = '$id_ikm'";
    if(mysqli_query($koneksi, $a)){
      header("location:../profile.php?id_ikm=$id_ikm");  
    }else{
      header("location:../profile.php?id_ikm=$id_ikm");  
    }
    $a = "UPDATE tb_legalitas SET nib='$nib',spirt ='$pirt' ,layak_sehat ='$layak_sehat',halal='$hallal',cppob='$cppob',iso='$iso',haki='$haki',haccp='$haccp',legalitas_lainnya='$legalitas' WHERE id_ikm = '$id_ikm'";
    if(mysqli_query($koneksi, $a)){
      header("location:../profile.php?id_ikm=$id_ikm");
      $_SESSION['update']=" Data  Berhasil Diubah";  

    }else{
      header("location:../profile.php?id_ikm=$id_ikm&gagal");
      $_SESSION['gagal']=" Data Gagal Diubah Mohon Periksa Kembali Data Anda";    
    }
      
// Deklarasi dokumen 1
$namafile = $_FILES['doc1']['name'];
$tmp = $_FILES['doc1']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['doc1']['size'];
 // Deklarasi dokumen 1
$namafile2 = $_FILES['doc2']['name'];
$tmp2 = $_FILES['doc2']['tmp_name'];
$tipe_file2 = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran2 = $_FILES['doc2']['size'];
$temp='../media/dokumen/';

    move_uploaded_file($_FILES["doc1"]["tmp_name"], $temp.$namafile);
    move_uploaded_file($_FILES["doc2"]["tmp_name"], $temp.$namafile2);
  
	  $x = $namafile;
    $y= $namafile2;
if($x or $y){
    if($x == ""){
      $query = "UPDATE tb_dokumen SET dokumen_legalitas='$y' WHERE id_ikm='$id_ikm'";
      $result = mysqli_query($koneksi, $query);
    }else{
      $query = "UPDATE tb_dokumen SET dokumen_compro='$x' WHERE id_ikm='$id_ikm'";
      $result = mysqli_query($koneksi, $query);
      
    }
  }
    $query5 = "SELECT * from tb_deskripsi_usaha where id_ikm ='$id_ikm'";
    $result3 = mysqli_query($koneksi, $query5);
    $cek= mysqli_num_rows($result3);
  if($cek > 0){
    $query = "UPDATE tb_deskripsi_usaha SET deskripsi='$deskripsi' WHERE id_ikm='$id_ikm'";
    $result = mysqli_query($koneksi, $query);
  }else{
    $query = "INSERT INTO tb_deskripsi_usaha VALUES ('$id_ikm','$deskripsi')";
    $result = mysqli_query($koneksi, $query);
  }
    header("location:../profile.php?id_ikm=$id_ikm&pesan=simpan");
?>
