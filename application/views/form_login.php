<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>login</title>

    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #ff9f01;
   
}


form{
    height: 520px;
    width: 400px;
    background-color:#080710;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    font-family: 'Poppins', sans-serif;
}
form *{
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;

}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
    font-family: 'Poppins', sans-serif;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition-duration: 0.4s;
    font-family: 'Poppins', sans-serif;
}
.social{
  margin-top: 30px;
  display: flex;
 
  
}

button:hover{
  background-color: #ff9f01;
}


.social div{
  transition-duration: 0.5s;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: #ff9f01;
 
  
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}

a{text-decoration: none;}


    </style>

</head>
<body>


    <form action="<?php echo site_url('login/aksi_login');?>" method="POST" >
    <div class="img">
        <img src="./images/logo4.png" alt="" align="center"> </div>

        <?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>
    

        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="pw">

        <button>Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i><a href="<?php echo site_url('dashboard');?>" >Dashboard</a></div>

        </div>
    </form>
</body>
</html>
