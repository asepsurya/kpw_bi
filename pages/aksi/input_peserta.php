<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../assets/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
  $id_kota = $_POST['id_kota'];
  $tanggal=date('d-m-Y');
  $id_ikm=$_POST['id_ikm'];
	// membuat variabel untuk menampung data dari form
  $nama_ikm = $_POST['nama_ikm'];
  $kelas = $_POST ['kelas'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  // membuat variabel untuk detail Produk
  $varian = $_POST['varian'];
  $jenis_produk = addslashes($_POST['jenis_produk']);
  $merek=addslashes($_POST['merek']);
  $tagline=addslashes($_POST['tagline']);
  $kelebihan= addslashes($_POST['kelebihan_produk']);
  $segmen = addslashes($_POST['segmen']);
  $gramasi = $_POST['gramasi'];
  $harga = $_POST['harga'];
  $kapasitas_produksi = $_POST['kapasitas_produksi'];
  $omset = $_POST['omset'];
  $komposisi1 = addslashes($_POST['komposisi']);
  $redaksi = addslashes($_POST['redaksi']);
  $keterangan = addslashes($_POST['keterangan']);
  // membuat variabel untuk Kelengkapan Adm IKM
  $nama_perusahaan = addslashes($_POST['nama_perusahaan']);
  $nib=$_POST['nib'];
  $pirt = $_POST['pirt'];
  $layak_sehat=$_POST['layak_sehat'];
  $hallal = $_POST['hallal'];
  $cppob = $_POST['cppob'];
  $iso = $_POST['iso'];
  $haki = $_POST['haki'];
  $haccp = $_POST['haccp'];
  $legalitas = $_POST['legalitas'];
 // $logo_perusahaan = $_POST['logo_perusahaan'];
  $media_penjualan = $_POST['media_penjualan']; 
// Variabel Upload Dokumen nama foto
$namafile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto']['size'];

// End
// Variabel Upload Dokumen nama foto
$namafile2 = $_FILES['foto2']['name'];
$tmp2 = $_FILES['foto2']['tmp_name'];
$tipe_file2 = pathinfo($namafile2, PATHINFO_EXTENSION);
$ukuran2 = $_FILES['foto2']['size'];

// End

// menyeleksi data admin dengan username dan password yang sesuai
$data1 = mysqli_query($koneksi,"select * from tb_ukm where id_ikm='$id_ikm'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data1);
// jalankan query INSERT untuk menambah data ke database
   $query = "INSERT INTO tb_ukm VALUES ('$id_ikm','550','$nama_ikm', '$alamat','$gender','$kelas','$telp')";
   $result = mysqli_query($koneksi, $query);

  $query = "INSERT INTO tb_formulir VALUES ('$id_ikm','$tanggal', '$jenis_produk', '$merek','$komposisi1','$varian','$kelebihan','$tagline','$gramasi','','$harga','$kapasitas_produksi','$omset','$segmen','','$nama_perusahaan','$hallal', '$pirt', '$legalitas','$media_penjualan','$redaksi','$keterangan')";
  $result = mysqli_query($koneksi, $query);
  
  $query = "INSERT INTO tb_legalitas VALUES ('$id_ikm','$nib','$pirt', '$layak_sehat', '$hallal','$cppob','$iso','$haki','$haccp','$legalitas')";
  $result = mysqli_query($koneksi, $query);
  $temp='../media/dokumen/';
  move_uploaded_file($_FILES["foto"]["tmp_name"], $temp.$namafile);
  move_uploaded_file($_FILES["foto2"]["tmp_name"], $temp.$namafile2);
  
	$x = $namafile;
  $y= $namafile2;

  $query = "INSERT INTO tb_dokumen VALUES ('$id_ikm','$x','$y')";
  $result = mysqli_query($koneksi, $query);

  $_SESSION['ubah']="$nama_ikm Berhasil di tambahkan";
  
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));

    }
}
$a=$_SESSION['id_ikm'];
// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../profile?id_ikm=$a&pesan=simpan");
?>
