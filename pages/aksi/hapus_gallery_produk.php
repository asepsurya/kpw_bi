<?php
session_start();
// buka koneksi dengan MySQL
include '../../assets/koneksi.php';
    $id = $_GET["id_gambar"];
    $id_ikm = $_GET["id_ikm"];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tb_media_produk WHERE id_gambar='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../profile.php?id_ikm=$id&id_ikm=$id_ikm&pesan=hapus");
  
?>
