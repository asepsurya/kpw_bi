<?php 
		//buka file rtf
	
	include '../assets/koneksi.php';
   error_reporting(0);
	$id_ikm=$_GET['id_ikm'];

    
// Query menampilkan data
$sql_data= "SELECT * FROM tb_brainstorming where id_ikm='$id_ikm'";
$qry_data = mysqli_query($koneksi, $sql_data) or die ("Gagal query pribadi");
$data3 = mysqli_fetch_array($qry_data);

$tpl_file = "form_penilaian.rtf";
 if (file_exists($tpl_file)) {
// Alamat file hasil parser
$target = "download/form_penilaian-".$id_ikm.".rtf";


// Membuka file template
$f = fopen($tpl_file, "r+");
$hasilbaca = fread($f, filesize($tpl_file)); 
fclose($f);


// Query menampilkan data
$sql_data6= "SELECT * FROM tb_deskripsi_usaha where id_ikm='$id_ikm'";
$qry_data6 = mysqli_query($koneksi, $sql_data6) or die ("Gagal query pribadi");
$data7 = mysqli_fetch_array($qry_data6);
// Query menampilkan data
$sql_data2= "SELECT * FROM tb_kurasi where id_ikm='$id_ikm'";
$qry_data2 = mysqli_query($koneksi, $sql_data2) or die ("Gagal query pribadi");
$data4 = mysqli_fetch_array($qry_data2);

// Query menampilkan data
$sql_data3= "SELECT * FROM tb_legalitas where id_ikm='$id_ikm'";
$qry_data3 = mysqli_query($koneksi, $sql_data3) or die ("Gagal query pribadi");
$data5 = mysqli_fetch_array($qry_data3);
// Query menampilkan data
$sql_data4= "SELECT * FROM user where id_ikm='$id_ikm'";
$qry_data4 = mysqli_query($koneksi, $sql_data4) or die ("Gagal query pribadi");
$data6 = mysqli_fetch_array($qry_data4);
$url='../pages/media/'.$data6['gambar'].'';
        $deskripsi=$data7['deskripsi'];
        $gambar=$data6['gambar'];
        $nib=$data5['nib'];
        $spirt=$data5['spirt'];
        $layak2=$data5['layak_sehat'];
        $halal=$data5['halal'];
        $cppob=$data5['cppob'];
        $iso=$data5['iso'];
        $haki=$data5['haki'];
        $haccp=$data5['haccp'];
        $legalias_lainnya=$data5['legalitas_lainnya'];
        //untuk tabel brainstorming
		$data_jenis_produk=$data3['jenis_produk'];
		$data_nama_ikm = $data3['nama'];
		$data_telp = $data3['telp'];
		$data_merk = $data3['merek'];
		$data_varian= $data3['varian_rasa'];
		$data_komposisi = $data3['komposisi'];
		$data_gramasi = $data3['gramasi'];
		$data_a = $data3['gramasi_new'];
		$data_kelebihan = $data3['kelebihan_produk'];
		$data_segmentasi = $data3['segmentasi'];
		$data_jenis_kemasan = $data3['jenis_kemasan'];
		$data_nama_perusahaan = $data3['nama_perusahaan'];
		$data_halal = $data3['halal'];
		$data_pirt = $data3['pirt'];
		$data_legalitas = $data3['legalitas_lainnya'];
		$data_kapasitas = $data3['kapasitas_produk'];
		$data_media_promosi = $data3['media_penjualan'];
		$tagline = $data3['tagline'];
		$redaksi = $data3['redaksi'];
        $email= $data3['kelas'];
        $alamat=$data3['alamat'];
        $jenis_kelamin=$data3['gender'];
        $harga=$data3['harga'];
        $omset=$data3['omset'];
        $lainnya=$data3['ket_lain'];
        // untuk tabel kurasi
        $supply = $data4['supply'];
        $proses_pengolahan = $data4['proses_pengolahan'];
        $kapasitas=$data4['kapasitas_produksi'];
        $konsistensi=$data4['konsistensi_produksi'];
        $tempat_produksi=$data4['tempat_produksi'];
        $keterlibatan=$data4['keterlibatan'];
        $dampak=$data4['dampak'];
        $kearifan=$data4['kearifan'];
        $kreatifitas=$data4['kreativitas'];
        $citra=$data4['citra_rasa'];
        $varian=$data4['varian'];
        $keunikan=$data4['keunikan'];
        $perijinan_dasar=$data4['perijinan_dasar'];
        $perijinan_tingkat=$data4['perijinan_tingkat'];
        $jenis_kemasan=$data4['jenis_kemasan'];
        $visual=$data4['visual'];
        $attribut=$data4['attribut'];
        $daya_tahan=$data4['daya_tahan'];
        $struktur=$data4['struktur'];
        $administrasi=$data4['administrasi'];
        $keuangan=$data4['keuangan'];
        $retail= $data4['retail'];
        $b_t_c=$data4['b_t_c'];
        $export=$data4['export'];
        $b_t_b=$data4['b_t_b'];
        $reseller=$data4['reseller'];
        $media=$data4['media'];
        $market=$data4['market'];
        $website=$data4['website'];
        $e_payment=$data4['e_payment'];
        
		$data_tanggal_cetak = date("d-m-Y");
// Menempatkan data pribadi kedalam template
if($jenis_kelamin =="L"){
    $jk ="Laki - Laki ";
}else{
    $jk ="Perempuan ";

}



$hasilbaca = str_replace("my_name", $data_nama_ikm, $hasilbaca);
$hasilbaca = str_replace("jenis_produk", $data_jenis_produk, $hasilbaca);
$hasilbaca = str_replace("nama_perusahaan", $data_nama_perusahaan, $hasilbaca);
$hasilbaca = str_replace("telp", $data_telp, $hasilbaca);
$hasilbaca = str_replace("textmail", $email, $hasilbaca);
$hasilbaca = str_replace("miya", $alamat, $hasilbaca);
$hasilbaca = str_replace("Jenis_kel", $jk, $hasilbaca);
$hasilbaca = str_replace("pago", $deskripsi, $hasilbaca);

$hasilbaca = str_replace("nib", $nib, $hasilbaca);
$hasilbaca = str_replace("nomor_sehat", $spirt, $hasilbaca);
$hasilbaca = str_replace("lapu", $layak2, $hasilbaca);
$hasilbaca = str_replace("halal", $halal, $hasilbaca);
$hasilbaca = str_replace("cppob", $cppob, $hasilbaca);
$hasilbaca = str_replace("Iso", $iso, $hasilbaca);
$hasilbaca = str_replace("haki", $haki, $hasilbaca);
$hasilbaca = str_replace("haccp", $haccp, $hasilbaca);
$hasilbaca = str_replace("data_lain", $legalias_lainnya, $hasilbaca);

$hasilbaca = str_replace("Textjenis",$data_jenis_produk, $hasilbaca);
$hasilbaca = str_replace("tigreal", $data_merk, $hasilbaca);
$hasilbaca = str_replace("uranus", $data_kelebihan, $hasilbaca);
$hasilbaca = str_replace("hanzo", $data_segmentasi, $hasilbaca);
$hasilbaca = str_replace("haya", $data_gramasi, $hasilbaca);
$hasilbaca = str_replace("layla", $harga, $hasilbaca);
$hasilbaca = str_replace("kufra", $data_kapasitas, $hasilbaca);
$hasilbaca = str_replace("kagura", $omset, $hasilbaca);
$hasilbaca = str_replace("angela", $data_varian, $hasilbaca);
$hasilbaca = str_replace("yuzong", $data_komposisi, $hasilbaca);
$hasilbaca = str_replace("balmon", $lainnya, $hasilbaca);

$hasilbaca = str_replace("imageareaa", $lainnya, $hasilbaca);
$hasilbaca = str_replace("Text1", $supply, $hasilbaca);
$hasilbaca = str_replace("Text2", $proses_pengolahan, $hasilbaca);
$hasilbaca = str_replace("Text3", $kapasitas, $hasilbaca);
$hasilbaca = str_replace("Text4", $konsistensi, $hasilbaca);
$hasilbaca = str_replace("Text5", $tempat_produksi, $hasilbaca);
$hasilbaca = str_replace("Text6", $keterlibatan, $hasilbaca);
$hasilbaca = str_replace("Text7", $dampak, $hasilbaca);
$hasilbaca = str_replace("Text8", $kearifan, $hasilbaca);
$hasilbaca = str_replace("Text9", $kreatifitas, $hasilbaca);
$hasilbaca = str_replace("Textrasa", $citra, $hasilbaca);
$hasilbaca = str_replace("Textvarian", $varian, $hasilbaca);
$hasilbaca = str_replace("Textkeunikan", $keunikan, $hasilbaca);
$hasilbaca = str_replace("Textperijinan", $perijinan_dasar,$hasilbaca);
$hasilbaca = str_replace("Textlanjut", $perijinan_tingkat, $hasilbaca);
$hasilbaca = str_replace("Textkemasan", $jenis_kemasan, $hasilbaca);
$hasilbaca = str_replace("Textvisual", $visual, $hasilbaca);
$hasilbaca = str_replace("hanabi", $attribut, $hasilbaca);
$hasilbaca = str_replace("Textdaya", $daya_tahan, $hasilbaca);
$hasilbaca = str_replace("Textstruktur", $struktur, $hasilbaca);
$hasilbaca = str_replace("Textadministrasi", $administrasi, $hasilbaca);
$hasilbaca = str_replace("Textkeuangan", $keuangan, $hasilbaca);
$hasilbaca = str_replace("Textretail", $retail, $hasilbaca);
$hasilbaca = str_replace("Textbtb", $b_t_b, $hasilbaca);
$hasilbaca = str_replace("Textexport", $export, $hasilbaca);
$hasilbaca = str_replace("Textbtc", $b_t_c, $hasilbaca);
$hasilbaca = str_replace("Textreseller", $reseller, $hasilbaca);
$hasilbaca = str_replace("Textmedia", $media, $hasilbaca);
$hasilbaca = str_replace("Textmarket", $market, $hasilbaca);
$hasilbaca = str_replace("Textwebsite", $website, $hasilbaca);
$hasilbaca = str_replace("Textepayment", $e_payment, $hasilbaca);
// Merekam kembali file hasil parser
$f = fopen($target, "w+"); 
fwrite($f, $hasilbaca); 
fclose($f);


// Otomatis membuka file hasil parser saat proses selesai 
echo "<META HTTP-EQUIV=\"Refresh\" target=\"_blank\" CONTENT=0;URL=$target>";

}

?>