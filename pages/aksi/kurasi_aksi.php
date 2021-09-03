<?php
session_start();
include '../../assets/koneksi.php';
$id_ikm = $_POST['id_ikm2'];
$text1 = $koneksi -> real_escape_string($_POST['text1']);
$text2 = $koneksi -> real_escape_string($_POST['text2']);
$text3 = $koneksi -> real_escape_string($_POST['text3']);
$text4 = $koneksi -> real_escape_string($_POST['text4']);
$text5 = $koneksi -> real_escape_string($_POST['text5']);
$text6 = $koneksi -> real_escape_string($_POST['text6']);
$text7 = $koneksi -> real_escape_string($_POST['text7']);
$text8 = $koneksi -> real_escape_string($_POST['text8']);
$text9 = $koneksi -> real_escape_string($_POST['text9']);
$text10 = $koneksi -> real_escape_string($_POST['text10']);
$text11 = $koneksi -> real_escape_string($_POST['text11']);
$text12 = $koneksi -> real_escape_string($_POST['text12']);
$text13 = $koneksi -> real_escape_string($_POST['text13']);
$text14 = $koneksi -> real_escape_string($_POST['text14']);
$text15 = $koneksi -> real_escape_string($_POST['text15']);
$text16 = $koneksi -> real_escape_string($_POST['text16']);
$text17 = $koneksi -> real_escape_string($_POST['text17']);
$text18 = $koneksi -> real_escape_string($_POST['text18']);
$text19 = $koneksi -> real_escape_string($_POST['text19']);
$text20 = $koneksi -> real_escape_string($_POST['text20']);
$text21 = $koneksi -> real_escape_string($_POST['text21']);
$text22 = $koneksi -> real_escape_string($_POST['text22']);
$text23 = $koneksi -> real_escape_string($_POST['text23']);
$text23 = $koneksi -> real_escape_string($_POST['text23']);
$text24 = $koneksi -> real_escape_string($_POST['text24']);
$text25 = $koneksi -> real_escape_string($_POST['text25']);
$text26 = $koneksi -> real_escape_string($_POST['text26']);
$text27 = $koneksi -> real_escape_string($_POST['text27']);
$text28 = $koneksi -> real_escape_string($_POST['text28']);
$text29 = $koneksi -> real_escape_string($_POST['text29']);
$text30 = $koneksi -> real_escape_string($_POST['text30']);
$text31 = $koneksi -> real_escape_string($_POST['text31']);
$text32 = $koneksi -> real_escape_string($_POST['text32']);
$text33 = $koneksi -> real_escape_string($_POST['text33']);

if($_SESSION['level']=="1"){
    $query = "SELECT * from tb_kurasi Where id_ikm='$id_ikm' ";
    $result2 = mysqli_query($koneksi, $query);
    $cek=mysqli_num_rows($result2);
    if($cek > 0 ){
        $myquery = "UPDATE tb_kurasi SET supply='$text1',proses_pengolahan='$text2',kapasitas_produksi='$text3',konsistensi_produksi='$text4',tempat_produksi='$text5',
        keterlibatan='$text6',dampak='$text7',kearifan='$text8',kreativitas='$text9',citra_rasa='$text10',varian='$text11',keunikan='$text12',perijinan_dasar='$tex32',perijinan_tingkat='$text33' WHERE id_ikm='$id_ikm'";
        $proses = mysqli_query($koneksi, $myquery);
        header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    }else{
   // jalankan query INSERT untuk menambah data ke database
   $query = "INSERT INTO tb_kurasi VALUES ('$id_ikm','$text1','$text2','$text3', '$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11','$text12','$text32','$text33','$text13','$text14','$text18','$text19','$text20','$text21','$text22','$text23','$text24','$text25','$text26','$text27','$text28','$text29','$text30','$text31')";
   $result = mysqli_query($koneksi, $query);
   header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    } 
    
}elseif($_SESSION['level']=="13"){
    $query = "SELECT * from tb_kurasi Where id_ikm='$id_ikm' ";
    $result2 = mysqli_query($koneksi, $query);
    $cek=mysqli_num_rows($result2);
    if($cek > 0 ){
        $myquery = "UPDATE tb_kurasi SET jenis_kemasan='$text13',visual='$text14',attribut='$text18',daya_tahan='$text19',struktur='$text20',administrasi='$text21',keuangan='$text22' WHERE id_ikm='$id_ikm'";
        $proses = mysqli_query($koneksi, $myquery);
        header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    }else{
   // jalankan query INSERT untuk menambah data ke database
   $query = "INSERT INTO tb_kurasi VALUES ('$id_ikm','','','','','','','','','','','','','','','$text13','$text14','$text18','$text19','$text20','$text21','$text22','','','','','','','','','')";
   $result = mysqli_query($koneksi, $query);
   header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    } 

}elseif($_SESSION['level']=="12"){
    $query = "SELECT * from tb_kurasi Where id_ikm='$id_ikm' ";
    $result2 = mysqli_query($koneksi, $query);
    $cek=mysqli_num_rows($result2);
    if($cek > 0 ){
        $myquery = "UPDATE tb_kurasi SET supply='$text1',proses_pengolahan='$text2',kapasitas_produksi='$text3',konsistensi_produksi='$text4',tempat_produksi='$text5',
        keterlibatan='$text6',dampak='$text7',kearifan='$text8',kreativitas='$text9',citra_rasa='$text10',varian='$text11',keunikan='$text12',perijinan_dasar='$text32',perijinan_tingkat='$text33' WHERE id_ikm='$id_ikm'";
        $proses = mysqli_query($koneksi, $myquery);
        header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    }else{
   // jalankan query INSERT untuk menambah data ke database
   $query = "INSERT INTO tb_kurasi VALUES ('$id_ikm','$text1','$text2','$text3', '$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11','$text12','$text32','$text33','','','','','','','','','','','','','','','','')";
   $result = mysqli_query($koneksi, $query);
   header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    } 

}elseif($_SESSION['level']=="14"){
    $query = "SELECT * from tb_kurasi Where id_ikm='$id_ikm' ";
    $result2 = mysqli_query($koneksi, $query);
    $cek=mysqli_num_rows($result2);
    if($cek > 0 ){
        $myquery = "UPDATE tb_kurasi SET retail='$text23',b_t_b='$text24',export='$text25',b_t_c='$text26',reseller='$text27',media='$text28',market='$text29',website='$text30',e_payment='$text31' WHERE id_ikm='$id_ikm'";
        $proses = mysqli_query($koneksi, $myquery);
        header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    }else{
   // jalankan query INSERT untuk menambah data ke database
   $query = "INSERT INTO tb_kurasi VALUES ('$id_ikm','','','','','','','','','','','','','','','','','','','','','','$text23','$text24','$text25','$text26','$text27','$text28','$text29','$text30','$text31')";
   $result = mysqli_query($koneksi, $query);
   header("location:../profile?id_ikm=$id_ikm&pesan=simpan");
    } 
}
?>
