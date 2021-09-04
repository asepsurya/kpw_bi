<!-- Modal -->
<div class="modal fade" id="deskripsi_usaha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Deskripsi Usaha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="../pages/aksi/deskripsi_usaha.php" method="POST">
        <label> Deskripsi Usaha</label>
        <input type="text" name="id_ikm" value="<?= $_GET['id_ikm'] ?>"hidden >
        <textarea  class="form-control" name="deskripsi" cols="5" rows="10" placeholder="Deskiripsi yang menggambarkan Usaha UMKM"></textarea>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>