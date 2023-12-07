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

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('src/css/style.css')?> " rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('src/css/responsive.css')?> " rel="stylesheet" />

  <style>
     
     form {
  width: 500px;
  margin: 0 auto;
  text-align: left;
  font-family: 'Poppins', sans-serif;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="file"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.center {
  display: flex;
  justify-content: center;
}

input[type="submit"] {
  background-color: #ff9f01;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
  
}

input[type="submit"]:hover {
  background-color: #FF7417;
}

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
              JobIT
            </span>
          </a>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
             
              </ul>
             
              <ul class="user_option navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('dashboard/');?>"> <span>HOME</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <img src="<?php echo base_url('src/images/register.png')?>" alt="">
                    <span>Register</span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->