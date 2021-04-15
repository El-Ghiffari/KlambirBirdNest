<!DOCTYPE html>
<html>
<head>
    <title> Contact | KlambirBirdNest </title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
        <a><strong>KlambirBirdNest.ID</strong></a>
        <a class="navbar-brand"><img style="height: 70px; width: 70px; padding-top: 0px" src="<?php echo base_url(); ?>assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/about') ?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/product') ?>" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/service') ?>" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/news') ?>" class="nav-link">News</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/contacts') ?>" class="nav-link">Partners</a></li>
          </ul>
        </div>
      </div>
   </nav>

	 <img src="<?php echo base_url(); ?>assets/images/partner.png" class="img-fluid" alt="Responsive image">

  <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">
            <form method="POST" action="addContacts" class="p-5 bg-white" style="margin-top: -150px;">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-pill btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"> Bogor, Jawa Barat Indonesia</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+62 82272399639</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">klambirbirdnest@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p> You can send us a message or questions for free trough WhatsApp. you can ask anything related to our products and services... </p>
              <p><a target="_blank" rel="noopener noreferrer" href="https://wa.me/6282272399639" class="btn btn-primary">WhatsApp Us...</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>

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