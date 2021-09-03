<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
  if (empty($_SESSION["username"])) {
   header("Location:login.php?pesan=invalid");
  }
 ?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    KPW Bank Indonesia - Data Peserta
</title>
<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.7/cropper.min.css" crossorigin="anonymous"/>
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

<link href="../assets/css/upload.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- CSS Files -->
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
<style>
  .custom{
    font-size:10px;
  }
  .modal-lg{
  			max-width: 1000px !important;
		}
    /* Style the tab */
    .tab {
      overflow: hidden;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
  }

  /* Style the buttons inside the tab */
  .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
      background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
      background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
      display: none;
      padding: 6px 12px;
      
      border-top: none;
  }
  .image_area {
		  position: relative;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}
	
		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 8px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
</style>
</head>
<?php include'../assets/koneksi.php' ?>
<body class="g-sidenav-show  bg-gray-100">
 <?php include'../assets/sidebar.php' ?>
 
 <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
          </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="login/logout" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Logout</span>
        </a>
    </li>
    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
      <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
        <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler -line"></i>
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
      </div>
  </a>
</li>
<li class="nav-item px-3 d-flex align-items-center">
  <a href="javascript:;" class="nav-link text-body p-0">
    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
</a>
</li>
<li class="nav-item dropdown pe-2 d-flex align-items-center">
  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-bell cursor-pointer"></i>
</a>
<ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
    <li class="mb-2">
      <a class="dropdown-item border-radius-md" href="javascript:;">
        <div class="d-flex py-1">
          <div class="my-auto">
            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h6 class="text-sm font-weight-normal mb-1">
              <span class="font-weight-bold">New message</span> from Laur
          </h6>
          <p class="text-xs text-secondary mb-0">
              <i class="fa fa-clock me-1"></i>
              13 minutes ago
          </p>
      </div>
  </div>
</a>
</li>
<li class="mb-2">
  <a class="dropdown-item border-radius-md" href="javascript:;">
    <div class="d-flex py-1">
      <div class="my-auto">
        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
    </div>
    <div class="d-flex flex-column justify-content-center">
        <h6 class="text-sm font-weight-normal mb-1">
          <span class="font-weight-bold">New album</span> by Travis Scott
      </h6>
      <p class="text-xs text-secondary mb-0">
          <i class="fa fa-clock me-1"></i>
          1 day
      </p>
  </div>
</div>
</a>
</li>
<li>
  <a class="dropdown-item border-radius-md" href="javascript:;">
    <div class="d-flex py-1">
      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>credit-card</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(453.000000, 454.000000)">
                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
              </g>
          </g>
      </g>
  </g>
</svg>
</div>
<div class="d-flex flex-column justify-content-center">
    <h6 class="text-sm font-weight-normal mb-1">
      Payment successfully completed
  </h6>
  <p class="text-xs text-secondary mb-0">
      <i class="fa fa-clock me-1"></i>
      2 days
  </p>
</div>
</div>
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<!-- End Navbar -->
<?php 

$query = "SELECT * from tb_brainstorming where id_ikm='$_GET[id_ikm]' ";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result)
?>
<?php 
$query2 = "SELECT * from tb_kurasi  where id_ikm ='$_GET[id_ikm]' ";
$result1 = mysqli_query($koneksi, $query2);
$data2 = mysqli_fetch_array($result1)
?>
<?php 
$query3 = "SELECT * from user  where id_ikm ='$_GET[id_ikm]' ";
$result2 = mysqli_query($koneksi, $query3);
$data3 = mysqli_fetch_array($result2)
?>
<div class="container-fluid">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
    <span class="mask bg-gradient-primary opacity-6"></span>
</div>
<div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
    <div class="row gx-4">
      <div class="col-auto"><br>
        <div class="avatar avatar-xl position-relative">
          
          <div class="image_area">
						<form method="post">
							<label for="upload_image">
								<img src="media/foto/<?= $data3['gambar'] ?>" id="uploaded_image"  class="border-radius-lg shadow-sm" />
								<div class="overlay">
									<div class="text"><a href="#" data-bs-toggle="modal" data-bs-target="#change">Ubah Gambar</a></div>
								</div>
							</label>
						</form>
					</div>
			    </div>
        </a>
        </div>
  
  <div class="col-auto my-auto">
    <div class="h-100">
      <h5 class="mb-1">
        <?= $data['nama'] ?>
    </h5>
    <p class="mb-0 font-weight-bold text-sm">
      <?= $data['jenis_produk'] ?> (<?= $data['telp'] ?>)
  </p>
</div>
</div>
<div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
    
</div>
</div>
</div>
</div>
<div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
              </div>
              <div class="col-md-4 text-end">
                  <a href="aksi/hapus_peserta.php?id_ikm=<?= $data['id_ikm'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini ...?')">
                      
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Hapus" aria-label="Edit Profile"></i><span class="sr-only">Hapus</span>
                </a>
                
            </div>
        </div>
        <br>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Informasi Produk</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Legalitas/ Informasi UKM</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Media dan Gallery </button>
          <?php
          if($_SESSION['level']=="1" or $_SESSION['level']=="12" or $_SESSION['level']=="13" or $_SESSION['level']=="14"){?>
            <button class="tablinks" onclick="openCity(event, 'laporan')">Laporan</button>
              <?php
              $myquery = "SELECT * from tb_kurasi  where id_ikm ='$_GET[id_ikm]' ";
              $result2 = mysqli_query($koneksi, $myquery);
               $cek = mysqli_num_rows($result2);
                if($cek > 0){?>
                   <button class="tablinks" onclick="openCity(event, 'nilai')">Penilaian Produk</button>
                <?php
                }
              ?>
         <?php } ?>
          
      </div>

      <div id="London" class="tabcontent">
        <form action="aksi/ubah_data_peserta.php" name="MyForm" method="POST">
          
          <div class="row mg-b-30">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Jenis Produk <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" id="id_ikm" name="id_ikm" placeholder="Enter lastname" hidden value="<?php echo $data['id_ikm'] ?>" ReadOnly>
                <input class="form-control" type="text" id="jenis_produk" name="jenis_produk" disabled placeholder="Enter lastname" value="<?php echo $data['jenis_produk'] ?>">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label">Merk </label>
            <input class="form-control" type="text"id="merk" name="merk" disabled placeholder="Enter lastname" value="<?php echo $data['merek'] ?>">
        </div>
    </div><!-- col-4 -->
    <div class="col-lg-6">
      <div class="form-group">
        <label class="form-control-label">Tagline</label>
        <input class="form-control" type="text" id="tagline" name="tagline" disabled value="<?php echo $data['tagline'] ?>">
    </div>
</div><!-- col-4 -->
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Kelebihan Produk</label>
    <input class="form-control" type="text" id="kelebihan" name="kelebihan" disabled value="<?php echo $data['kelebihan_produk'] ?>">
</div>
</div><!-- col-4 -->
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Gramasi(g) </label>
    <div class="input-group">
      <input type="text" class="form-control" id="gramasi" name="gramasi"id="gramasi" disabled value="<?php echo $data['gramasi'] ?>">
      <div class="input-group-append">
        <span class="input-group-text">gram</span>
    </div>
</div>
</div>
</div>
<div class="col-lg-6">
      <input type="text" class="form-control" hidden name="gramasi_new" id="gramasi_new" disabled value="<?php echo $data['gramasi_new'] ?>">
              </div>

<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Segmentasi Produk </label>
    <input class="form-control" type="text" disabled id="segmentasi" name="segmentasi"  placeholder="Masukan Segementasi Produk"value="<?php echo $data['segmentasi'] ?>">
</div>
</div><!-- col-4 -->
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Harga Produk</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Rp.</span>
    </div>
    <input type="text" class="form-control" disabled name="harga" id="harga" value="<?php echo $data['harga'] ?>">
</div>
</div>
</div><!-- col-4 -->
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Varian Produk </label>
    <textarea  rows="4" cols="100" disabled name="varian" class="form-control" id="varian_prod" value="" Required><?php echo $data['varian_rasa'] ?></textarea>
    <small>* Masukan Varian Produk</small>
</div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <label class="form-control-label">Komposisi Produk</label>
    <textarea  rows="4" cols="100"disabled name="komposisi" class="form-control" id="komposisi" value=" " Required><?php echo $data['komposisi'] ?></textarea>
    <small>* Masukan Komposisi Produk</small>
</div>
</div>
<div class="row-lg-9">
  <div class="form-group">
    <label class="form-control-label">Redaksi Produk </label>
    <textarea  rows="6" cols="100" disabled name="redaksi" class="form-control" id="redaksi" value=" " Required><?php echo $data['redaksi'] ?></textarea>
    <small>* Masukan redaksi Produk</small>
</div>
</div>
<div class="row-lg-9">
  <div class="form-group">
    <label class="form-control-label">Keterangan Lainnya </label>
    <textarea  rows="6" cols="100" disabled name="keterangan" class="form-control" id="keterangan" value=" " Required><?php echo $data['ket_lain'] ?></textarea>
    <small>* Contoh : cara memasak , Saran Penyajian</small>
</div>
</div>

</div>
<button type="button" id="aktif" class="btn btn-primary " onclick="myFunction()"> <i class="fa fa-pen"></i> Update Data</button>
<input type="submit" id="ubah" class="btn btn-primary " name="ubah" hidden value="+ Simpan">

</form>
</div>

<div id="Paris" class="tabcontent">
<form action="aksi/ubah_data_ikm.php" method="POST">
    <div class="row mg-b-25">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label">Nama Lengkap: </label>
          <input class="form-control" id="nama_ikm" type="text" name="nama_ikm"  value="<?php echo $data['nama'] ?>" Required disabled >
          <input class="form-control" id="id_ikm" type="text" name="id_ikm" ReadOnly hidden value="<?php echo $data['id_ikm'] ?>" Required>
      </div>
  </div><!-- col-4 -->
  <div class="col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email </label>
      <input class="form-control" id="email" type="text" name="kelas"  placeholder="Kelas" value=" <?php echo $data['kelas'] ?>" disabled>
  </div>
</div><!-- col-4 -->
<div class="col-lg-4">
  <div class="form-group">
      <label class="form-control-label">Telepon</label>
      <input type="text" class="form-control" id="telp" name="telp" placeholder="(999) 999-9999" value=" <?php echo $data['telp'] ?>" disabled>
  </div>
</div><!-- col-4 -->
<div class="col-lg-8">
    <div class="form-group mg-b-10-force">
      <label class="form-control-label">Alamat Lengkap </label>
      <textarea class="form-control" type="text" id="alamat" name="alamat"  placeholder="Alamat Lengkap" Required disabled><?php echo $data['alamat'] ?></textarea>
  </div>
</div><!-- col-8 -->
<div class="col-lg-4">
    <div class="form-group mg-b-10-force">
      <label class="form-control-label">Jenis Kelamin </label>
      <select class="form-control select2" data-placeholder="Choose country" name="gender" Required id="jk" disabled>
        <?php
        if($data['gender']=="L"){
          echo' <option value="L" selected>Laki - Laki</option>';
        }else{
          echo' <option value="P" selected>Perempuan</option>';
        }
        ?>  
        <option value="L">Laki - Laki</option>
        <option value="P">Perempuan</option>
        
    </select>
</div>
</div><!-- col-4 -->
</div><!-- row -->
<div class="row mg-b-25">
<div class="row ">
        <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">Nama Perusahaan</label>
              <input class="form-control" type="text" name="nama_perusahaan"  id="nama_perusahaan" placeholder="Nama Perusahaan"  value="<?= $data['nama_perusahaan'] ?>" disabled>
          </div>
      </div>
  <br>
  <?php 
$query2 = "SELECT * from tb_legalitas where id_ikm='$_GET[id_ikm]' ";
$result2 = mysqli_query($koneksi, $query2);
$mydata = mysqli_fetch_assoc($result2)
?>
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
          <input class="form-control" type="text" name="nib"  id="nib" placeholder="NIB" value="<?= $mydata['nib'] ?>" disabled>
      </div>
      <div class="form-group">
          <label class="form-control-label">Nomor SP - IRT</label>
          <input class="form-control" type="text" name="pirt"  id="pirt" placeholder="SP-IRT"  value="<?= $mydata['spirt'] ?>"disabled>
      </div>
      <div class="form-group">
          <label class="form-control-label">Layak Sehat</label>
          <input class="form-control" type="text" name="layak_sehat"  id="layak" placeholder="Layak Sehat"  value="<?= $mydata['layak_sehat'] ?>"disabled>
      </div>
      <div class="form-group">
          <label class="form-control-label">Halal</label>
          <input class="form-control" type="text" name="hallal"  id="hallal" placeholder="Halal"  value="<?= $mydata['halal'] ?>"disabled>
      </div>
      <div class="form-group">
          <label class="form-control-label">CPPOB</label>
          <input class="form-control" type="text" name="cppob"  id="cppob" placeholder="CPPOB"  value="<?= $mydata['cppob'] ?>"disabled>
      </div>
      <div class="form-group">
      <label class="form-control-label">Kapasitas Produksi</label>
      <input class="form-control" type="text" name="kapasitas"  id="kapasitas" placeholder="kapasitas_produksi"  value="<?= $data['kapasitas_produk'] ?>" disabled>
  </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label class="form-control-label">ISO</label>
      <input class="form-control" type="text" name="iso"  id="iso" placeholder="ISO"  value="<?= $mydata['iso'] ?>" disabled>
  </div>
  <div class="form-group">
      <label class="form-control-label">Hak Merek (HAKI)</label>
      <input class="form-control" type="text" name="haki"  id="haki" placeholder="Hak Merek"  value="<?= $mydata['haki'] ?>" disabled>
  </div>
  <div class="form-group">
      <label class="form-control-label">HACCP</label>
      <input class="form-control" type="text" name="haccp"  id="haccp" placeholder="HACCP"  value="<?= $mydata['haccp'] ?>" disabled>
  </div>
  <div class="form-group">
      <label class="form-control-label">Legalitas Lainnya</label>
      <textarea class="form-control" type="text" name="legalitas" id="legalitas" placeholder="Legalitas Lainnya" disabled> <?= $mydata['legalitas_lainnya'] ?></textarea>
      <small>* Catatan:  Kosongkan Jika tidak memiliki legalitas atau sertifikasi</small>
  </div><br>
  <div class="form-group">
      <label class="form-control-label">Omset</label>
      <input class="form-control" type="text" name="omset"  id="omset" placeholder="Omset"  value="<?= $data['omset'] ?>" disabled>
  </div>
  
</div>

<hr><br>
<div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Media Penjualan </label>
      <textarea class="form-control" type="text" name="media_penjualan" id="media_penjualan" disabled placeholder="Media Penjualan"> <?= $data['media_penjualan'] ?></textarea>
      <small>*Contoh : Facebook, Instagram dll</small>
  </div>
</div>

   

<div class="col-lg-6">
<div class="form-group">
  <label>  Company Profile / Deskripsi Perusahaan</label><br>
  <input type="file" name="doc1" class="form-control"><br>
  <button type="button" class="btn btn-default"> Download Dokumen</button>
  
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
  <label> Foto Sertifikat / legalitas <br><br>
  <input type="file" name="doc2" class="form-control"><br>
  <button type="button" class="btn btn-default"> Tampilkan Gambar </button>
</div>
</div>
</div>
</div><!-- row-->
<button type="button" id="aktif2" class="btn btn-primary " onclick="myFunction()"> <i class="fa fa-pen"></i> Update Data</button>
<input type="submit" id="simpan2" class="btn btn-primary " name="ubah" value="+ Simpan" hidden>
</form>
</div><!-- row -->
</div>
<div id="laporan" class="tabcontent">
<div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      
                      <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                      <a href="javascript:;">
                        <h5>
                         Dokumen Brainstorming
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        As Uber works through a huge amount of internal management turmoil.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Laporan Kurasi
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4"> <br><br>
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4"> <br><br>
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4"> <br><br>
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="media/25.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                      <a href="javascript:;">
                        <h5>
                          Minimalist
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Different people have different taste, and various types of music.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Download</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               <br>
              </div>
</div>
<!-- tab penilaian Produk -->
<div id="nilai" class="tabcontent">
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
  <form action="aksi/update_kurasi.php" method="POST">
  <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <input name="id_ikm" value="<?= $data2['id_ikm'] ?>" hidden>
        <div class="form-group">
          <label class="form-control-label">Supply Bahan Baku <span class="tx-danger">*</span></label>
          <textarea name="text1" class="form-control" cols="4" rows="10" id="text1" disabled><?php echo $data2['supply'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Proses Pengolahan Bahan Baku <span class="tx-danger">*</span></label>
          <textarea name="text2" class="form-control" cols="4" rows="10" id="text2" disabled><?php echo $data2['proses_pengolahan'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Kapasitas Produksi <span class="tx-danger">*</span></label>
          <textarea name="text3" class="form-control" cols="4" rows="10" id="text3" disabled><?php echo $data2['kapasitas_produksi'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Konsistensi Produksi <span class="tx-danger">*</span></label>
          <textarea name="text4" class="form-control" cols="4" rows="10" id="text4" disabled><?php echo $data2['konsistensi_produksi'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Tempat Produksi <span class="tx-danger">*</span></label>
          <textarea name="text5" class="form-control" cols="4" rows="10" id="text5" disabled><?php echo $data2['tempat_produksi'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Keterlibatan Teknologi <span class="tx-danger">*</span></label>
          <textarea name="text6" class="form-control" cols="4" rows="10" id="text6" disabled><?php echo $data2['keterlibatan'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Dampak sosial dan Lingkungan <span class="tx-danger">*</span></label>
          <textarea name="text7" class="form-control" cols="4" rows="10" id="text7" disabled><?php echo $data2['dampak'] ?></textarea>
        </div>

      </div><!-- /home1-->
      <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Kearifan Lokal <span class="tx-danger">*</span></label>
          <textarea name="text8" class="form-control" cols="4" rows="10" id="text8" disabled><?php echo $data2['kearifan'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Kreativitas <span class="tx-danger">*</span></label>
          <textarea name="text9" class="form-control" cols="4" rows="10" id="text9" disabled><?php echo $data2['kreativitas'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Cita Rasa <span class="tx-danger">*</span></label>
          <textarea name="text10" class="form-control" cols="4" rows="10" id="text10" disabled><?php echo $data2['citra_rasa'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
          <textarea name="text11" class="form-control" cols="4" rows="10"id="text11" disabled><?php echo $data2['varian'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Keunikan <span class="tx-danger">*</span></label>
          <textarea name="text12" class="form-control" cols="4" rows="10" id="text12" disabled><?php echo $data2['keunikan'] ?></textarea>
        </div>
      </div><!-- profile1-->
      <div class="tab-pane fade" id="kemasan" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Jenis Kemasan <span class="tx-danger">*</span></label>
          <textarea name="text13" class="form-control" cols="4" rows="10" id="text13" disabled><?php echo $data2['jenis_kemasan'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Visual/Desain Kemasan <span class="tx-danger">*</span></label>
          <textarea name="text14" class="form-control" cols="4" rows="10" id="text14" disabled><?php echo $data2['visual'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Atribut Kemasan <span class="tx-danger">*</span></label>
          <textarea name="text18" class="form-control" cols="4" rows="10" id="text18" disabled><?php echo $data2['attribut'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Daya tahan Kemasan<span class="tx-danger">*</span></label>
          <textarea name="text19" class="form-control" cols="4" rows="10"id="text19" disabled><?php echo $data2['daya_tahan'] ?></textarea>
        </div>
        
      </div><!-- kemasan -->
      <div class="tab-pane fade " id="manajemen" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Struktur Organisasi<span class="tx-danger">*</span></label>
          <textarea name="text20" class="form-control" cols="4" rows="10" id="text20" disabled><?php echo $data2['struktur'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Adminitrasi <span class="tx-danger">*</span></label>
          <textarea name="text21" class="form-control" cols="4" rows="10" id="text21" disabled><?php echo $data2['administrasi'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Keuangan <span class="tx-danger">*</span></label>
          <textarea name="text22" class="form-control" cols="4" rows="10" id="text22" disabled><?php echo $data2['keuangan'] ?></textarea>
        </div>
        
      </div><!-- manajemen -->
      <div class="tab-pane fade " id="pemasaran" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Retail <span class="tx-danger">*</span></label>
          <textarea name="text23" class="form-control" cols="4" rows="10" id="text23" disabled><?php echo $data2['retail'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">B to B dengan Perusahaan lain <span class="tx-danger">*</span></label>
          <textarea name="text24" class="form-control" cols="4" rows="10" id="text24" disabled><?php echo $data2['b_t_b'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Export <span class="tx-danger">*</span></label>
          <textarea name="text25" class="form-control" cols="4" rows="10" id="text25" disabled><?php echo $data2['export'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">B to C<span class="tx-danger">*</span></label>
          <textarea name="text26" class="form-control" cols="4" rows="10" id="text26" disabled><?php echo $data2['b_t_c'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Reseller dan Agen<span class="tx-danger">*</span></label>
          <textarea name="text27" class="form-control" cols="4" rows="10" id="text27" disabled><?php echo $data2['reseller'] ?></textarea>
        </div>
      </div><!-- pemasaran -->
      <div class="tab-pane fade " id="digital" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Media Sosial dan Konten <span class="tx-danger">*</span></label>
          <textarea name="text28" class="form-control" cols="4" rows="10" id="text28" disabled><?php echo $data2['media'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Marketplace<span class="tx-danger">*</span></label>
          <textarea name="text29" class="form-control" cols="4" rows="10" id="text29" disabled><?php echo $data2['market'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">website <span class="tx-danger">*</span></label>
          <textarea name="text30" class="form-control" cols="4" rows="10" id="text30" disabled><?php echo $data2['website'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">e-Payment<span class="tx-danger">*</span></label>
          <textarea name="text31" class="form-control" cols="4" rows="10" id="text31" disabled><?php echo $data2['e_payment'] ?></textarea>
        </div>
        
      </div><!-- digital -->
      <div class="tab-pane fade custom" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
        <br>
        <div class="form-group">
          <label class="form-control-label">Perijinan Dasar UMKM<span class="tx-danger">*</span></label>
          <textarea name="text32" class="form-control" cols="4" rows="10"id="text32" disabled><?php echo $data2['perijinan_dasar'] ?></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label">Perijinan Tingkat Lanjut<span class="tx-danger">*</span></label>
          <textarea name="text33" class="form-control" cols="4" rows="10"id="text33" disabled><?php echo $data2['perijinan_tingkat'] ?></textarea>
        </div>
        
      </div><!-- contact1 -->
      <!-- button Edit-->
      <button type="button" id="aktif3" class="btn btn-primary " onclick="myFunction()"> <i class="fa fa-pen"></i> Update Data</button>
  <input type="submit" id="simpan3" class="btn btn-primary " name="ubah" value="+ Simpan" hidden>
    </form>
    </div><!-- tab content -->
      </div><!-- end nilai tab -->
        
<div id="Tokyo" class="tabcontent">  
  <div class="row">
      <h6> Foto Tempat Usaha/ Tempat produksi Max.10 </h6><hr>
      <?php 
      $query2 = "SELECT * from tb_media_produksi where id_ikm='$_GET[id_ikm]'";
      $result1 = mysqli_query($koneksi, $query2);
      while($data2 = mysqli_fetch_assoc($result1)){
        
      echo'
     
      <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block  border-radius-xl">
                 <a href="aksi/download.php?filename='.$data2['gambar_produk'].'&id_ikm='.$data2['id_ikm'].'">
                <img src="media/tempat_usaha/'.$data2['gambar_produk'].'" alt="img-blur-shadow" class="img-fluid border-radius-xl" width="300">
                  </a>
            </a>
        </div>
        <div class="card-body px-1 pb-0">
        <p class="text-gradient text-dark mb-2 text-sm">'.date("d-m-Y").'</p>
        <div class="d-flex align-items-center justify-content-between">
        
                        <a href="aksi/hapus_gallery.php?id_gambar='.$data2['id_gambar'].'&id_ikm='.$data2['id_ikm'].'"  >
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Hapus</button></a>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                        </div>
        </div>
        <br>
    </div>
    </div>
</div>'; } ?>


<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
  <div class="card h-100 card-plain border">
    <div class="card-body d-flex flex-column justify-content-center text-center">
      <a href="" data-bs-toggle="modal" data-bs-target="#edit-modal">
        <br>
        <br>
        <br>
        <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
        <h5 class=" text-secondary"> Upload Gambar </h5>
        <br>
        <br>
        <br>
    </a>
</div>
</div>
</div>
</div>

<div class="row">
      <h6> Foto Produk Asli / <small> disesuaikan dengan jenis produk yang dimiliki</small> </h6><hr>
      <?php 
      $query2 = "SELECT * from tb_media_produk where id_ikm='$_GET[id_ikm]'";
      $result1 = mysqli_query($koneksi, $query2);
      while($data2 = mysqli_fetch_assoc($result1)){
        
      echo'
     
      <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block  border-radius-xl">
                 <a href="aksi/download.php?filename='.$data2['gambar_produk'].'&id_ikm='.$data2['id_ikm'].'">
                <img src="media/'.$data2['gambar_produk'].'" alt="img-blur-shadow" class="img-fluid border-radius-xl" width="300">
                  </a>
            </a>
        </div>
        <div class="card-body px-1 pb-0">
        <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
        <div class="d-flex align-items-center justify-content-between">
        
                        <a href="aksi/hapus_gallery_produk.php?id_gambar='.$data2['id_gambar'].'&id_ikm='.$data2['id_ikm'].'"  >
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Hapus</button></a>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                        </div>
        </div>
        <br>
    </div>
    </div>
</div>'; } ?>

<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
  <div class="card h-100 card-plain border">
    <div class="card-body d-flex flex-column justify-content-center text-center">
      <a href="" data-bs-toggle="modal" data-bs-target="#input-produk">
        <br>
        <br>
        <br>
        <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
        <h5 class=" text-secondary"> Upload Gambar </h5>
        <br>
        <br>
        <br>
    </a>
</div>
</div>
</div>
<br>
<br>
</div>
      </div>
</div>
</main>

<!-- extras modal -->
<?php include'../assets/tapbar.php' ?>
<?php include'../assets/modal_ubah_foto.php' ?>
<!-- Bootstrap core JavaScript -->
<!--   Core JS Files   -->
<!-- Modal -->
<div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
      <form action="aksi/upload_profile.php" method="POST"  enctype="multipart/form-data">
        <input type="file" name="foto" class="form-control">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.7/cropper.min.js" crossorigin="anonymous"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>

<script>
  $(document).ready(function(){
    $('form input').change(function () {
      $('form p').text(this.files.length + " file(s) selected");
  });
});
</script>

<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
  function myFunction() {
    document.getElementById("simpan3").hidden = false;
    document.getElementById("aktif3").hidden = true;
    document.getElementById("simpan2").hidden = false;
    document.getElementById("aktif2").hidden = true;
    document.getElementById("aktif").hidden = true;
    document.getElementById("ubah").hidden = false;  
    document.getElementById("jenis_produk").disabled = false;
    document.getElementById("merk").disabled = false;
    document.getElementById("tagline").disabled = false;
    document.getElementById("kelebihan").disabled = false;
    document.getElementById("gramasi").disabled = false;
    document.getElementById("gramasi_new").disabled = false;
    document.getElementById("segmentasi").disabled = false;
    document.getElementById("harga").disabled = false;
    document.getElementById("varian_prod").disabled = false;
    document.getElementById("komposisi").disabled = false;
    document.getElementById("redaksi").disabled = false;
    document.getElementById("keterangan").disabled = false;
document.getElementById("nama_ikm").disabled = false;
document.getElementById("keterangan").disabled = false;
document.getElementById("email").disabled = false;
document.getElementById("telp").disabled = false;
document.getElementById("alamat").disabled = false;
document.getElementById("jk").disabled = false;
document.getElementById("nama_perusahaan").disabled = false;
document.getElementById("nib").disabled = false;
document.getElementById("pirt").disabled = false;
document.getElementById("layak").disabled = false;
document.getElementById("hallal").disabled = false;
document.getElementById("cppob").disabled = false;
document.getElementById("iso").disabled = false;
document.getElementById("haki").disabled = false;
document.getElementById("haccp").disabled = false;
document.getElementById("legalitas").disabled = false;
document.getElementById("media_penjualan").disabled = false;
document.getElementById("kapasitas").disabled = false;
document.getElementById("omset").disabled = false;
document.getElementById("text1").disabled = false;
document.getElementById("text2").disabled = false;
document.getElementById("text3").disabled = false;
document.getElementById("text4").disabled = false;
document.getElementById("text5").disabled = false;
document.getElementById("text6").disabled = false;
document.getElementById("text7").disabled = false;
document.getElementById("text8").disabled = false;
document.getElementById("text9").disabled = false;
document.getElementById("text10").disabled = false;
document.getElementById("text11").disabled = false;
document.getElementById("text12").disabled = false;
document.getElementById("text13").disabled = false;
document.getElementById("text14").disabled = false;
document.getElementById("text18").disabled = false;
document.getElementById("text19").disabled = false;
document.getElementById("text20").disabled = false;
document.getElementById("text21").disabled = false;
document.getElementById("text22").disabled = false;
document.getElementById("text23").disabled = false;
document.getElementById("text24").disabled = false;
document.getElementById("text25").disabled = false;
document.getElementById("text26").disabled = false;
document.getElementById("text27").disabled = false;
document.getElementById("text28").disabled = false;
document.getElementById("text29").disabled = false;
document.getElementById("text30").disabled = false;
document.getElementById("text31").disabled = false;
document.getElementById("text32").disabled = false;
document.getElementById("text33").disabled = false;
}
</script>
<script>
		 $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
	</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
<script src="../assets/js/modal.js"></script>


</body>

</html>