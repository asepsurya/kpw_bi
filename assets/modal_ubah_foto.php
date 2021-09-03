<!-- Modal -->
<div class="modal fade" id="input-produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Gambar Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    
      <form action="aksi/upload_produksi.php" method="POST"  enctype="multipart/form-data">
    
        <input name="id_gambar1" value="<?= $kodeBarang ?>" hidden>
        <input name="id_ikm" value="<?= $_GET['id_ikm'] ?>" hidden>
        <input type="file" multiple  class="form-control" name="foto2">
       
    </div>
    
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Upload</button>
    </form>
</div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Gambar Tempat Produksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     
      <form action="aksi/upload_produk.php" method="POST"  enctype="multipart/form-data">
        
        <input name="id_gambar1" value="<?= $kodeBarang ?>" hidden>
        <input name="id_ikm" value="<?= $_GET['id_ikm'] ?>" hidden>
        <input type="file" multiple  class="form-control" name="foto">
        
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Upload</button>
    </form>
</div>
</div>
</div>
</div>
