

<!-- Modal -->
<div class="modal fade" id="kurasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penilaian UMKM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <label> Silahkan Pilih UMKM yang akan dinilai</label>
    <select name="nama" class="form-control select2">
     
    <?php
 include 'koneksi.php';
 $query = "SELECT * from tb_ukm ";
 $result = mysqli_query($koneksi, $query);
 while($data = mysqli_fetch_assoc($result)){
    echo'<option>'.$data['nama'].'</option>';
 }
 ?>
      
      </select>
      <hr>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">1. Produksi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">2. Inovasi & Orisinalitas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact" aria-selected="false">3. Legalitas & Sertifikasi</button>
        </li>
    </ul>
    <form action="../pages/aksi/input_peserta.php" method="POST" enctype="multipart/form-data">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
              <label class="form-control-label">Kearifan Lokal <span class="tx-danger">*</span></label>
              <textarea name="text1" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Proses Pengolahan Bahan Baku <span class="tx-danger">*</span></label>
              <textarea name="text2" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Kapasitas Produksi <span class="tx-danger">*</span></label>
              <textarea name="text3" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Konsistensi Produksi <span class="tx-danger">*</span></label>
              <textarea name="text4" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Tempat Produksi <span class="tx-danger">*</span></label>
              <textarea name="text5" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Keterlibatan Teknologi <span class="tx-danger">*</span></label>
              <textarea name="text6" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Dampak sosial dan Lingkungan <span class="tx-danger">*</span></label>
              <textarea name="text6" class="form-control" cols="4" rows="10"></textarea>
          </div>

</div><!-- /tab pane -->
<div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
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
    <select class="form-control" type="text" name="kapasitas_produksi" id="kapasitas_produksi" Required>
      <option>hari</option>
      <option>Bulan</option>
      <option>Tahun</option>
  </select>
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Omset(Per)<span class="tx-danger">*</span></label>
    <select class="form-control" type="text" name="omset" id="omset" Required>
      <option>Bulan</option>
      <option>Tahun</option>
      
  </select>
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


<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
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