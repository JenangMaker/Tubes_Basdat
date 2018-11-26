<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar Basis Data</title>

	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style_form_daftar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
 	<link rel="stylesheet" type="text/css" href="css/css_raleway.css">
 	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg " style="background-color: #dce0e8;">
	<a class="navbar-brand" href="">
    	<img src="foto/telu.png" width="50" height="40">
    	Integrated Smart Shop
  	</a>

  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    	<li class="nav-item">
	    		<a class="nav-link" href="homepage.php">Home</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="index.php">Log-in</a>
	    	</li>
	    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Product
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Motherboard</a>
		          <a class="dropdown-item" href="#">Processor</a>
		          <a class="dropdown-item" href="#">Graphic Card</a>
		          <a class="dropdown-item" href="#">Hardisk</a>
		          <a class="dropdown-item" href="#">SSD</a>
		          <a class="dropdown-item" href="#">RAM</a>
		          <a class="dropdown-item" href="#">Power Supply</a>
		          <a class="dropdown-item" href="#">Casing</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		    </li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="simulasi.php">Simulation</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="aboutus.php">About us</a>
	    	</li>
	    </ul>
  	</div>
</nav>

<div class="box-form">
	<h3 align="center">Sign Up</h3><hr>
	<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Mohon Maaf, NIM yang Anda Masukkan Harus Angka!!</div>';
			echo '<script>$("#form")[0].reset();</script>';
		}
		else if(isset($_GET['err2'])){
			echo '<div class="alert-error">Email sudah terpakai</div>';
			echo '<script>$("#form")[0].reset();</script>';
		}
		else if(isset($_GET['err3'])){
			echo '<div class="alert-error">Input Data Gagal</div>';
			echo '<script>$("#form")[0].reset();</script>';
		}
		else if(isset($_GET['err4'])){
			echo '<div class="alert-error">ID tidak ditemukan</div>';
			echo '<script>$("#form")[0].reset();</script>';
		}
		else if(isset($_GET['err5'])){
			echo '<div class="alert-error">Input data ke dalam user gagal</div>';
			echo '<script>$("#form")[0].reset();</script>';
		}
	?>
	<form id="form_d" action="proses-daftar.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail2">Nama</label>
	    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword2">Alamat</label>
	    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">No Telefon</label>
	    <input type="text" class="form-control" placeholder="Masukkan No. Telefon" name="telf">
	  </div>
	  <button type="submit" name="daftar" class="btn btn-primary">Submit</button>
	  <p> Sudah mempunyai akun? <a id="link_login" href="index.php"> Masuk </a></p>
	</form>
</div>

    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large " > 
            <div class ="footer">
                Copyright &copy; 2018. All Rights Reserved <br>
                Designed by SK - 40 - 05 
            </div>
    </footer>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>