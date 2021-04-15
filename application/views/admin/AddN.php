<!DOCTYPE html>
<html>
<head>
    <title> Add News | Heavenly Health </title>
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
	    	<a class="navbar-brand" href="<?php echo base_url('index.php/admin') ?>">HEAVENLY<span>HEALTH</span></a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="<?php echo base_url('index.php/admin') ?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/admin/about') ?>" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="<?php echo base_url('index.php/admin/news') ?>" class="nav-link">News</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/admin/doctors') ?>" class="nav-link">Doctors</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/admin/messages') ?>" class="nav-link">Messages</a></li>
	        </ul>
	      </div>
	    </div>
	 </nav>

	 <img src="<?php echo base_url(); ?>assets/images/bg_6.jpg" class="img-fluid" alt="Responsive image">

	<section class="site-section">
	    <div class="container">
	        <div class="row justify-content-center pb-5 mb-3">
	          <div class="col-md-7 heading-section text-center">
	            <h1> Add News </h1>
	            <span class="subheading">FILL DATA CORRESPONDINGLY</span>
	        </div>
	    </div>

  		 <form method="POST" action="addNews" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control" id="description">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type='file' name="userfile" id="userfile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

		</div>
	</section>

    <footer class="footer">
  <div class="container-fluid px-lg-5">
    <div class="row">
      <div class="col-md-9 py-5">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-4">
            <h2 class="footer-heading">About us</h2>
            <p>A Project with a theme of "Health".</p>
            <ul class="ftco-footer-social p-0">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
          </div>
          <div class="col-md-8">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10">
                <div class="row">
                  <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Treatment</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">COVID-19</a></li>
                          <li><a href="#" class="py-1 d-block">Mental Illness</a></li>
                          <li><a href="#" class="py-1 d-block">Trauma</a></li>
                          <li><a href="#" class="py-1 d-block">Disabilities</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Information</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">Pandemic</a></li>
                          <li><a href="#" class="py-1 d-block">Healthy Life</a></li>
                          <li><a href="#" class="py-1 d-block">Recommended Diet</a></li>
                          <li><a href="#" class="py-1 d-block">Hospitals</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Resources</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">Terms & Conditions</a></li>
                          <li><a href="#" class="py-1 d-block">Privacy</a></li>
                          <li><a href="#" class="py-1 d-block">Security</a></li>
                          <li><a href="#" class="py-1 d-block">Report</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-md-5">
              <div class="col-md-12">
                <p class="copyright"> Copyright &copy;2020 All rights reserved </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
            <h2 class="footer-heading">Hi, <?php echo $this->session->userdata("name"); ?></h2>
            <form method="POST" action="<?php echo base_url('index.php/admin/logout') ?>" class="form-consultation">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="You have been logged in as Admin" disabled>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control submit px-3">Logout</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </footer>
</body>
</html>