<?php
 
// https://www.malasngoding.com
// menghubungkan dengan koneksi database

include 'koneksi.php';
 
// mengambil data barang dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(id_ikm) as kodeTerbesar FROM tb_ukm");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
 
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "ukm";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
 
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Peserta Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">1. Data Pemilik Usaha</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">2. Informasi Produk</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">3. Legalitas Produk dan Usaha</button>
        </li>
    </ul>
    <form action="../pages/aksi/input_peserta.php" method="POST" enctype="multipart/form-data">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="row mg-b-25">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
              <input class="form-control" id="nama_ikm" type="text" name="nama_ikm"  placeholder="Nama Lengkap" value="<?= $_SESSION['nama'] ?>" Required>
              <input class="form-control" id="nama_ikm" type="text" name="id_ikm"  value="<?= $_SESSION['id_ikm'] ?>" ReadOnly hidden>
          </div>
      </div><!-- col-4 -->
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label">Email<span class="tx-danger">*</span></label>
          <input class="form-control" id="kelas" type="email" name="kelas"  placeholder="inopakinstitute@gmail.com" Required>
      </div>
  </div><!-- col-4 -->
  <div class="col-lg-4">
      <div class="form-group">
          <label class="form-control-label">Nomor Handphone<span class="tx-danger">*</span></label>
          <input type="text" class="form-control" id="telp" name="telp" placeholder="(999) 999-9999" Required>
          
      </div>
  </div><!-- col-4 -->
  <div class="col-lg-8">
    <div class="form-group mg-b-10-force">
      <label class="form-control-label">Alamat Lengkap <span class="tx-danger">*</span></label>
      <textarea class="form-control" type="text" id="alamat" name="alamat"  placeholder="Alamat Lengkap" Required></textarea>
  </div>
</div><!-- col-8 -->
<div class="col-lg-4">
    <div class="form-group mg-b-10-force">
      <label class="form-control-label">Jenis Kelamin <span class="tx-danger">*</span></label>
      <select class="form-control select2" data-placeholder="jenis kelamin" name="gender" Required>
        <option label="Pilih Gender"></option>
        <option value="L">Laki - Laki</option>
        <option value="P">Perempuan</option>
        
    </select>
</div>
</div><!-- col-4 -->
</div><!-- row -->
</div><!-- /tab pane -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <br>
    <div class="row ">
        
        <div class="col-lg-5">
          <div class="form-group">
            <label class="form-control-label">Jenis Produk <span class="tx-danger">*</span></label>
            <input class="form-control " type="text" id="jenis_produk" name="jenis_produk"  placeholder="Jenis produk " Required>
            <small>Contoh : Kue Kering, Sisik Keju</small>
        </div>
    </div>
    <div class="col-lg-7">
      <div class="form-group">
        <label class="form-control-label">Merek <span class="tx-danger">*</span></label>
        <input class="form-control" type="text" id="merek" name="merek"  placeholder="Merk produk" Required>
    </div>
</div>

  <div class="form-group">
    <input class="form-control" type="text" id="tagline" name="tagline"  hidden placeholder="Tagline Produk " value="-">
</div>

<div class="col-lg-12">
  <div class="form-group">
    <label class="form-control-label">Kelebihan Produk <span class="tx-danger">*</span></label>
    <input type="text" class="form-control"id="kelebihan_produk" name="kelebihan_produk" placeholder="Kelebihan Produk"Required>
    <small>contoh : Renyah Gurih Nikmat</small>
</div>
</div>
<div class="col-lg-5">
  <div class="form-group">
    <label class="form-control-label">Segmentasi Pasar yang Ingin dituju</label>
    <input class="form-control" type="text" id="segmen" name="segmen"  placeholder="Segmentasi Produk">
    <small>* Diisi oleh Team </small>
</div>
</div>
<div class="col-lg-3">
  <div class="form-group">
    <label class="form-control-label">Gramasi(g) <span class="tx-danger">*</span></label>
    <div class="input-group">
      <input type="text" class="form-control" name="gramasi"id="gramasi" Required>
      <div class="input-group-append">
        <span class="input-group-text">gram</span>
    </div>
</div>
</div>
</div>
<div class="col-lg-4">
  <div class="form-group">
    <label class="form-control-label">Harga Produk <span class="tx-danger">*</span></label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Rp.</span>
    </div>
    <input type="text" class="form-control" name="harga" id="harga" Required>
</div>
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Kapasitas Produksi (Per)<span class="tx-danger">*</span></label>
    <input type="text" name="kapasitas_produksi" id="kapasitas_produksi" class="form-control" Required >
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Omset(Per)<span class="tx-danger">*</span></label>
    <input type="text" name="omset" id="kapasitas_produksi" class="form-control" Required >
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
    <textarea  rows="4" cols="100" name="varian" class="form-control" id="varian" placeholder="Masukan Varian Produk.... "Required></textarea>
    <small>* Masukan Varian Produk</small>
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Komposisi Produk <span class="tx-danger">*</span></label>
    <textarea  rows="4" cols="100" name="komposisi" class="form-control" id="komposisi" placeholder="Masukan Komposisi Produk.... "Required></textarea>
    <small>* Masukan Komposisi Produk</small>
</div>
</div>
</div>
<textarea name="redaksi" rows="4" cols="100" class="form-control" hidden >Lorem Ipsum dolor</textarea><br>
<label class="form-control-label">Keterangan Lainnya<span class="tx-danger">*</span></label>
<textarea name="keterangan" id="redaksi" class="form-control" rows="4" cols="100"></textarea>
<small>* Contoh :  Saran Penyajian, Cara Masak, dll.</small>

</div>


<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <br>
    <div class="row ">
        <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">Nama Perusahaan<span class="tx-danger">*</span></label>
              <input class="form-control" type="text" name="nama_perusahaan"  id="nama_perusahaan" placeholder="Nama Perusahaan"Required>
          </div>
      </div>
  <br>
      <div class="col-lg-6">
       <label class="form-control-label">1. Perijinan Dasar UMKM</label>
      </div>
      <div class="col-lg-6">
      <label class="form-control-label">2. Perijinan Tingkat Lanjut</label>
      </div>
      <hr>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label">Nomor NIB</label>
          <input class="form-control" type="text" name="nib"  id="hallal" placeholder="NIB">
      </div>
      <div class="form-group">
          <label class="form-control-label">Nomor SP - IRT</label>
          <input class="form-control" type="text" name="pirt"  id="hallal" placeholder="SP-IRT">
      </div>
      <div class="form-group">
          <label class="form-control-label">Layak Sehat</label>
          <input class="form-control" type="text" name="layak_sehat"  id="hallal" placeholder="Layak Sehat">
      </div>
      <div class="form-group">
          <label class="form-control-label">Halal</label>
          <input class="form-control" type="text" name="hallal"  id="hallal" placeholder="Halal">
      </div>
      <div class="form-group">
          <label class="form-control-label">CPPOB</label>
          <input class="form-control" type="text" name="cppob"  id="hallal" placeholder="CPPOB">
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label class="form-control-label">ISO<span class="tx-danger">*</span></label>
      <input class="form-control" type="text" name="iso"  id="pirt" placeholder="ISO">
  </div>
  <div class="form-group">
      <label class="form-control-label">Hak Merek (HAKI)<span class="tx-danger">*</span></label>
      <input class="form-control" type="text" name="haki"  id="pirt" placeholder="Hak Merek">
  </div>
  <div class="form-group">
      <label class="form-control-label">HACCP<span class="tx-danger">*</span></label>
      <input class="form-control" type="text" name="haccp"  id="pirt" placeholder="HACCP">
  </div>
  <div class="form-group">
      <label class="form-control-label">Legalitas Lainnya<span class="tx-danger">*</span></label>
      <textarea class="form-control" type="text" name="legalitas" id="legalitas" placeholder="Legalitas Lainnya"></textarea>
      <small>* Catatan:  Kosongkan Jika tidak memiliki legalitas atau sertifikasi</small>
  </div>
</div>
<hr><br>
<div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Media Penjualan <span class="tx-danger">*</span></label>
      <textarea class="form-control" type="text" name="media_penjualan" id="media_penjualan"  placeholder="Media Penjualan"></textarea>
      <small>*Contoh : Facebook, Instagram dll</small>
  </div>
</div>

   

<div class="col-lg-6">
<div class="form-group">
  <label> Upload File Berkas ( Company Profile / Deskripsi Perusahaan)
  <input type="file" name="foto" class="form-control">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
  <label> Upload File Berkas ( Legalitas Perusahaan Foto Sertifikat / legalitas lainnya)
  <input type="file" name="foto2" class="form-control">
</div>
</div>
</div>
</div><!-- row-->


</div><br>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="sumbit" class="btn btn-primary" name="input">Simpan Data</button>
</form>
</div>
</div>
</div>
</div>
</div>