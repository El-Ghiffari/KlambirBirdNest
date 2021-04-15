<!DOCTYPE html>
<html>
<head>
    <title> Home | KlambirBirdNest </title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <!--  <script>
  // Get the modal
    var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="<?php echo base_url() ?>">KlambirBirdNest.ID</a>
        <a class="navbar-brand"><img style="height: 70px; width: 70px; padding-top: 0px" src="<?php echo base_url(); ?>assets/images/logo.png"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('index.php/home/about') ?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/product') ?>" class="nav-link">Products</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('index.php/home/service') ?>" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/news') ?>" class="nav-link">News</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('index.php/home/contacts') ?>" class="nav-link">Partners</a></li>
            <li class="nav-item"><button style="border: 0" class="nav-link"><a href="<?php echo base_url('index.php/home/registrasi') ?>">Login</a></button></li>
	        </ul>
	      </div>
	    </div>
	 </nav>

	 <center><img src="<?php echo base_url(); ?>assets/images/klambirBG.png" class="img-fluid" alt="Responsive image"></center>

      <div class="block-quick-info-2">
      <div class="container">
        <div class="block-quick-info-2-inner">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-home mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Visit our Location</strong>
                  <i class="fa fa-map-marker"></i><span class="excerpt"> Bogor, Indonesia</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-phone mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Call us today</strong>
                  <i class="fa fa-whatsapp"></i><span class="excerpt"><a href="#"> +62 82272399639</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-envelope mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Send us a message</strong>
                  <i class="fa fa-envelope"></i><span class="excerpt"><a href="#"> klambirbirdnest@gmail.com</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-clock-o mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Social Media</strong>
                  <i class="fa fa-instagram"></i>
                  <span class="excerpt"> KlambirBirdNest</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--batas disini-->

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h2>Tentang Kami</h2><br>
          <h4>Klambirbirdnest.id adalah sebuah grup perusahaan teknologi sarang burung walet  yang hadir pada tahun 2020, berawal dari sebuah mimpi untuk memunculkan peternak-peternak walet baru serta meningkatkan kuota ekspor sarang burung walet Indonesia. Klambirbirdnest.id melalui Layanannya yaitu Birdnest.id, BirdnestFund, dan BirdnestSupply hingga hari ini terus mewujudkan ekosistem bisnis sarang burung walet yang lebih baik.</h4><br>
          <p>Klambirbirdnest.id adalah sebuah grup perusahaan teknologi sarang burung walet  yang hadir pada tahun 2020, berawal dari sebuah mimpi untuk memunculkan peternak-peternak walet baru serta meningkatkan kuota ekspor sarang burung walet Indonesia. Klambirbirdnest.id melalui Layanannya yaitu Birdnest.id, BirdnestFund, dan BirdnestSupply hingga hari ini terus mewujudkan ekosistem bisnis sarang burung walet yang lebih baik.</p>
          <br>
          <a href="<?php echo base_url('index.php/home/about') ?>" class="btn btn-primary btn-pill">More...</a>
        </div>
      <div class="col-sm-4">
      <i class="fa fa-signal" style="font-size: 200px"></i>
      </div>
    </div>
    <br>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <i class="fa fa-globe" style="font-size: 200px"></i>
        </div>
        <div class="col-sm-8">
          <h2>Value Kami</h2><br>
          <h4><strong>VISI KAMI:</strong> Menjadi inisiator modernisasi sektor walet dan menjadi pemasar terbesar di Indonesia dengan kualitas ekspor terbaik</h4><br>
          <p><strong>MISI :</strong> <br>1. Mengedukasi Keterampilan dan pengetahuan untuk petani dan karyawan Sarang Burung Walet di Indonesia</br>
              <br>2.  Memudahkan pelaku bisnis SBW dalam bertransaksi</br>
              <br>3.  Menghasilkan produk SBW dengan kualitas sesuai permintaan pasar</br>
              <br>4.  Mengembangkan inovasi dalam hal pelayanan dan produk bisnis SBW yang modern</br>
              <br>5.  Mengembangkan industri SBW dibeberapa tempat yang strategis di Indonesia</br>
          </p>
        </div>
      </div>
    </div>
    <br>
  
    <!-- batas -->
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5"> A Solution to SBW's Climate in Indonesia <span class="typed-words"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-services-1 py-5">
      <div class="container">
        <div class="row">
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <h3 class="mb-3">Get the latest Product!</h3>
            <p>We offer a vast number of SBW Products with guaranteed quality and reasonable price. Buckle Up and explore our catalog for more info related to our product</p>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="<?php echo base_url(); ?>assets/images/kotoreuy.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3">A. SBW Kotor</h3>
              <div class="block-service-1-excerpt">
                  <p style="text-align: left;">Bentuk    : Mangkok, Oval, Sudut, Patahan, Kakian</p>
                  <p style="text-align: left;">Warna   : Putih Kapas, Putih Beras Cerah, Putih Beras, Kuning/Krem, Orange, Abu</p>
              </div>
              <p><a href="<?php echo base_url('index.php/home/news') ?>" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="<?php echo base_url(); ?>assets/images/mangkok1.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3">B. SBW Bersih</h3>
              <div class="block-service-1-excerpt">
                  <p style="text-align: left;">Bentuk : Mangkok, Oval, Sudut, Lempeng, PK 2/3, Kakian, Terian, Yenping</p>
                  <p style="text-align: left;">Warna : Putih Kapas, Putih Beras Cerah, Putih Beras, Kuning/Krem, Orange, Abu</p>
              </div>
              <p><a href="<?php echo base_url('index.php/home/news') ?>" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
            <div class="block-service-1-card">
              <a href="#" class="thumbnail-link d-block mb-4"><img src="<?php echo base_url(); ?>assets/images/mangkok2.jpeg" alt="Image" class="img-fluid"></a>
              <h3 class="block-service-1-heading mb-3">C. SBW Serpihan</h3>
              <div class="block-service-1-excerpt">
                  <p style="text-align: left;">1. Kateran </p>
                  <p style="text-align: left;">2. Rontokan </p>
              </div>
              <p><a href="<?php echo base_url('index.php/home/news') ?>" class="d-inline-flex align-items-center block-service-1-more"><span>Find out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
  <!--   <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'"
    class="close" title="Close Modal">&times;</span> -->

    <!-- Modal Content -->
   <!--  <div class="container" style="border-radius: 8px">
      <form class="modal-content animate" action="<?php echo base_url('index.php/home/login') ?>" class="form-consultation">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit px-3">Login</button>
        </div>
        <div class="container" style="background-color:#f1f1f1; border-radius: 8px">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Belum Punya Akun?</span>
          <a href="<?php echo base_url('index.php/home/registrasi') ?>">Register</a>
        </div>
      </form>
    </div>
  </div> -->

  <footer class="footer">
  <div class="container-fluid px-lg-5">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-4">
            <h2 class="footer-heading">Follow Us On</h2>
            <p>Follow our social media to get the latest update.</p>
            <ul class="ftco-footer-social p-0">
                  <li><a target="_blank" rel="noopener noreferrer" href="https://www.twitter.com/klambirbirdnest.id/" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/klambirbirdnest.id" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/klambirbirdnest.id/" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
          </div>
          <div class="col-md-8">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10">
                <div class="row">
                  <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Data Mitra</h2>
                        <ul class="list-unstyled">
                          <li><strong>KlamBirBirdNest.id</strong></li>
                          <li><strong>Petani / Pengepul</strong></li>
                          <li><strong>Pencuci</strong></li>
                          <li><strong>Buyer</strong></li>
                        </ul>
                      </div>
                      <div class="col-md-6 mb-md-0 mb-4">
                        <br>
                        <br>
                        <ul class="list-unstyled">
                          <li>-------------------------------</li>
                          <li>Lokasi, Hasil Produksi</li>
                          <li>Lokasi, Hasil Produksi, Jumlah Karyawan, Kandungan</li>
                          <li>Lokasi, Jumlah Permintaan, Jenis Permintaan</li>
                        </ul>
                      </div>
                      <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Messages Us</h2>
                        <a href="<?php echo base_url('index.php/home/contacts') ?>" class="btn btn-primary btn-pill">
                          <i class="fa fa-comments-o fa-3x"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-md-5">
              <div class="col-md-12">
                <center>
                  <p class="copyright"> Copyright &copy;2021 All rights reserved to KlambirBirdNest.id </p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>