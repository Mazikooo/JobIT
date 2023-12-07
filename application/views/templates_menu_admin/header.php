<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>JobIT</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('src/css/bootstrap.css')?> " />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('src/css/style.css')?> " rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('src/css/responsive.css')?> " rel="stylesheet" />

  <style>
     
  ::-webkit-scrollbar {
    width: 15px;
  }
  
  ::-webkit-scrollbar-track {     
    background: #ffffff;    
  }
  
  ::-webkit-scrollbar-thumb {
    background: #FF7417;
    border-radius:10px;
  }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              Menu Admin
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('admin/menu_job/');?>"> Jobs </a>
                </li>
              </ul>
              <form class="form-inline  ml-0 ml-lg-4 ">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <ul class="user_option navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"> <img src="<?php echo base_url('src/images/login.png')?>" alt=""> <span> <?php echo $this->session->userdata('username'); ?></span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('login/Logout');?>"> <img src="<?php echo base_url('src/images/register.png')?>" alt="">
                    <span>Logout</span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->