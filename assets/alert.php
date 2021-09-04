<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "tambah_keranjang"){?>
      <script> 
      swal("Data berhasil ditambahkan ke keranjang anda", "", "success");
      </script>
    <?php }?>
    <?php 
    if($_GET['pesan'] == "hapus"){?>
      <script> 
      swal("Data berhasil dihapus", "", "success");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "gagal_login"){?>
      <script> 
      swal("Mohon Periksa kembali data Anda", "", "warning");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "tambah"){?>
      <script> 
      swal("Selamat Bergabung dengan Kami", "Silahkan Masukan kembali data anda di Form yang sudah tersedia", "success");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "ubah"){?>
      <script> 
      swal("Data berhasil diubah", "", "success");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "simpan"){?>
      <script> 
      swal("Data berhasil Simpan", "", "success");
      </script>
    <?php }?>
    ?>
  <?php } ?>