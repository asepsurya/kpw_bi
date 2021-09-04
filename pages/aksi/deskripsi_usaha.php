<?php
include '../../assets/koneksi.php';
$id_ikm=$_POST['id_ikm'];
$deskripsi=$koneksi -> real_escape_string($_POST['deskripsi']);
$query = "INSERT INTO tb_deskripsi_usaha VALUES ('$id_ikm','$deskripsi')";
$result = mysqli_query($koneksi, $query);
header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
?>