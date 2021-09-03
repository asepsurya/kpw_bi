<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../assets/koneksi.php';
// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
// membuat variabel untuk menampung data dari form
  $nama = $_POST ['nama_lengkap'];
  $username = $_POST ['username'];
  $password = md5($_POST ['password']);
  $password2 = md5($_POST ['password2']);

if($password == $password2){
  $data1 = mysqli_query($koneksi,"select * from user where username='$username'");
  $cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
        if($cek > 0){
          header("location:../register?pesan=sudah_ada");
        }else{
         // jalankan query INSERT untuk menambah data ke database
        $query = "INSERT INTO user VALUES ('','$nama','$username','$password2','2','','default.png','0')";
        $result = mysqli_query($koneksi, $query);
    
        header("location:../login.php?pesan=tambah");
        // periska query apakah ada error
        if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
          }
        }
  }else{
    header("location:../register?pesan=tidaksama");
  }
  
}

// melakukan redirect (mengalihkan) ke halaman index.php

?>