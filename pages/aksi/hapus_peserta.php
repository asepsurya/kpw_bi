<?php
session_start();
// buka koneksi dengan MySQL
include '../../assets/koneksi.php';
    $id_ikm = $_GET['id_ikm'];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tb_formulir WHERE id_ikm='$id_ikm'";
    $hasil_query = mysqli_query($koneksi, $query);
    $query = "DELETE FROM tb_ukm WHERE id_ikm ='$id_ikm'";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../index.php?id_ikm=0&pesan=hapus");
  
?>
