<!-- Bottom Navbar -->
<nav class="navbar navbar-light bg-light navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none">
    <ul class="navbar-nav nav-justified w-100">
      <li class="nav-item">
        <a href="../pages/index?id_ikm=0" class="nav-link">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
        </a>
      </li>
      <?php
      include'koneksi.php';
   $query9 = "SELECT * from tb_ukm where id_ikm='$_SESSION[id_ikm]'";
   $result9 = mysqli_query($koneksi, $query9);
   $jumlah2 = mysqli_num_rows($result9);
   if($jumlah2 > 0){
   }else{
   ?>
      <li class="nav-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
        </a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a href="../pages/profile?id_ikm=<?= $_SESSION['id_ikm'] ?>" class="nav-link">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
        </a>
      </li>
    </ul>
  </nav>