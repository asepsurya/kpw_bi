<!-- Modal -->
<div class="modal fade" id="serti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto Legalitas Usaha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
         $query = "SELECT * from tb_dokumen where id_ikm='$_GET[id_ikm]'";
         $result = mysqli_query($koneksi, $query);
         $cek=mysqli_num_rows($result);
         while($data=mysqli_fetch_assoc($result) ){
            if($cek > 0){
              echo'<center><img src="../pages/media/dokumen/'.$data['dokumen_legalitas'].'" width="700"></center>';
            }else{
              echo'
              <div class="form-group">
              <center> Maaf Anda Belum Mengupload Dokumen ini</center>
              </div>
              ';
            }
         }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>