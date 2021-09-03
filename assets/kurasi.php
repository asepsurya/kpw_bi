
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
    <select name="nama" class="form-control theSelect" onchange="changeValue(this.value)">
     
    <?php
 include 'koneksi.php';
 $query = "SELECT * from tb_ukm ";
 $result = mysqli_query($koneksi, $query);
 $jsArray = "var prdName = new Array();\n";
 while($data = mysqli_fetch_assoc($result)){
    echo'<option value='.$data['id_ikm'].'>'.$data['nama'].'</option>';
    $jsArray .= "prdName['" . $data['id_ikm'] . "'] = {nama:'" . addslashes($data['id_ikm']) . "'};\n";
      
 }
 ?>
      
      </select>
      
      <hr>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php 
        if($_SESSION['level']=="12" or $_SESSION['level']=="1"){
        ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">Produksi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile" aria-selected="false"> Inovasi & Orisinalitas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact" aria-selected="false">Legalitas & Sertifikasi</button>
        </li>
        <?php } ?>
        <?php 
        if($_SESSION['level']=="13" or $_SESSION['level']=="1"){
        ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#kemasan" type="button" role="tab" aria-controls="contact" aria-selected="false"> Kemasan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#manajemen" type="button" role="tab" aria-controls="contact" aria-selected="false"> Manajemen Usaha</button>
        </li>
        <?php } ?>
        <?php 
        if($_SESSION['level']=="14" or $_SESSION['level']=="1"){
        ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pemasaran" type="button" role="tab" aria-controls="contact" aria-selected="false"> Pemasaran</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#digital" type="button" role="tab" aria-controls="contact" aria-selected="false"> Digital Marketing</button>
        </li>
        <?php } ?>
    </ul>
    <form action="../pages/aksi/kurasi_aksi.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="id_ikm2" class="form-control" id="nama">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
              <label class="form-control-label">Supply Bahan Baku <span class="tx-danger">*</span></label>
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
              <textarea name="text7" class="form-control" cols="4" rows="10"></textarea>
          </div>

</div><!-- /tab pane -->
<div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
    <br>
    <div class="form-group">
              <label class="form-control-label">Kearifan Lokal <span class="tx-danger">*</span></label>
              <textarea name="text8" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Kreativitas <span class="tx-danger">*</span></label>
              <textarea name="text9" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Cita Rasa <span class="tx-danger">*</span></label>
              <textarea name="text10" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
              <textarea name="text11" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Keunikan <span class="tx-danger">*</span></label>
              <textarea name="text12" class="form-control" cols="4" rows="10"></textarea>
          </div>
         

</div>
<div class="tab-pane fade" id="kemasan" role="tabpanel" aria-labelledby="home-tab">
  <br>
        <div class="form-group">
              <label class="form-control-label">Jenis Kemasan <span class="tx-danger">*</span></label>
              <textarea name="text13" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Visual/Desain Kemasan <span class="tx-danger">*</span></label>
              <textarea name="text14" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Atribut Kemasan <span class="tx-danger">*</span></label>
              <textarea name="text18" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Daya tahan Kemasan<span class="tx-danger">*</span></label>
              <textarea name="text19" class="form-control" cols="4" rows="10"></textarea>
          </div>
          
</div>
<div class="tab-pane fade " id="manajemen" role="tabpanel" aria-labelledby="home-tab">
<br>
        <div class="form-group">
              <label class="form-control-label">Struktur Organisasi<span class="tx-danger">*</span></label>
              <textarea name="text20" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Adminitrasi <span class="tx-danger">*</span></label>
              <textarea name="text21" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Keuangan <span class="tx-danger">*</span></label>
              <textarea name="text22" class="form-control" cols="4" rows="10"></textarea>
          </div>
         
</div>
<div class="tab-pane fade " id="pemasaran" role="tabpanel" aria-labelledby="home-tab">
<br>
        <div class="form-group">
              <label class="form-control-label">Retail <span class="tx-danger">*</span></label>
              <textarea name="text23" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">B to B dengan Perusahaan lain <span class="tx-danger">*</span></label>
              <textarea name="text24" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Export <span class="tx-danger">*</span></label>
              <textarea name="text25" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">B to C<span class="tx-danger">*</span></label>
              <textarea name="text26" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Reseller dan Agen<span class="tx-danger">*</span></label>
              <textarea name="text27" class="form-control" cols="4" rows="10"></textarea>
          </div>
</div>
<div class="tab-pane fade " id="digital" role="tabpanel" aria-labelledby="home-tab">
  <br>
      <div class="form-group">
              <label class="form-control-label">Media Sosial dan Konten <span class="tx-danger">*</span></label>
              <textarea name="text28" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Marketplace<span class="tx-danger">*</span></label>
              <textarea name="text29" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">website <span class="tx-danger">*</span></label>
              <textarea name="text30" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">e-Payment<span class="tx-danger">*</span></label>
              <textarea name="text31" class="form-control" cols="4" rows="10"></textarea>
          </div>
          
</div>
<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
    <br>
    <div class="form-group">
              <label class="form-control-label">Perijinan Dasar UMKM<span class="tx-danger">*</span></label>
              <textarea name="text32" class="form-control" cols="4" rows="10"></textarea>
          </div>
          <div class="form-group">
              <label class="form-control-label">Perijinan Tingkat Lanjut<span class="tx-danger">*</span></label>
              <textarea name="text33" class="form-control" cols="4" rows="10"></textarea>
          </div>
          

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
<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(x){  
    document.getElementById('nama').value = prdName[x].nama;   
    };  
    </script> 