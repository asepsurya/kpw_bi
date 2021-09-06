<?php
session_start();
include '../../assets/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['ubah'])) {
    // membuat variabel untuk detail Produk
    $id_ikm= $_POST['id_ikm'];
    $varian = $_POST['varian'];
    $jenis_produk = $_POST['jenis_produk'];
    $merek=addslashes($_POST['merk']);
    $tagline=addslashes($_POST['tagline']);
    $kelebihan= $_POST['kelebihan'];
    $segmen = addslashes($_POST['segmentasi']);
    $gramasi = $_POST['gramasi'];
    $gramasi_new = $_POST['gramasi_new'];
    $harga = $_POST['harga'];
    $kapasitas_produksi = $_POST['kapasitas_produksi'];
    $omset = $_POST['omset'];
    $komposisi1 = addslashes($_POST['komposisi']);
    $redaksi = addslashes($_POST['redaksi']);
    $keterangan= addslashes($_POST['keterangan']);
    // membuat variabel untuk Kelengkapan Adm IKM

mysqli_query($koneksi,"UPDATE tb_brainstorming SET jenis_produk='$jenis_produk',merek='$merek',tagline='$tagline',kelebihan_produk='$kelebihan',gramasi='$gramasi',gramasi_new='$gramasi_new',segmentasi='$segmen',harga='$harga',varian_rasa='$varian',komposisi='$komposisi1',redaksi='$redaksi',ket_lain='$keterangan' WHERE id_ikm = '$id_ikm'");
$_SESSION['update']="Data Berhasil Disimpan $jenis_produk"; 
header("location:../profile.php?id_ikm=$id_ikm&pesan=ubah&#info");   
  
}

?>


