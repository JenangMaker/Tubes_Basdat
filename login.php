<?php
	session_start();
	if (isset($_SESSION['Nama'])) {
	    echo "Welcome to the member's area, " . $_SESSION['Nama'] . "!";
	} else {
	    header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-popup-box.css">
	<link rel="stylesheet" href="css/boot.css">
	<script src="js/boot1.js"></script>
	<script src="js/boot2.js"></script>
	<script src="js/boot3.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg " style="background-color: #dce0e8;">
	<a class="navbar-brand">
    	<img src="foto/telu.png" width="50" height="40">Integrated Smart Shop
  	</a>

  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    <li class="nav-item">
			<a class="nav-link" href="homepage.php">Home</a>
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
			<a class="nav-link" href="simulasi.php">Simulasi</a>
		</li>
		<li class="nav-item">
	     	<a class="nav-link" href="about-us.php">About us</a>
	     </li>
	     <li class="nav-item">
	     	<a class="nav-link" href="logout.php">Log Out</a>
	     </li>
	    </ul>
  	</div>
</nav>

	<h3 align="center">~~ Selamat Datang  ~~</h3>

	<h4 align="center"><?php echo $_SESSION['Nama']; ?></h4>

	<form class="form-horizontal" action="proses-daftar.php" method="post"><br>
		<div class="form-group" align="center">
			<h4 align="center"></h4>
			<div class="row">
			  <div class="col-sm-2">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title"></h5>
			        <img class="card-img-top" src="foto/1.png" alt="Card image cap" width="200" height="200">
			        <br><br>
			        <h7><?php echo $_SESSION["Nama"]; ?></h57>
			        	<br>
               		<h7><?php echo $_SESSION["Email"]; ?></h7>
               		<br><br>
			        <a href="#" class="btn btn-primary">Go somewhere</a>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-10">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Special title treatment</h5>
			        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			        <a href="#" class="btn btn-primary">Go somewhere</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</form>



<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large" > 
		        <div class ="footer">
		            Copyright &copy; 2018. All Rights Reserved <br>
		            Designed by SK - 40 - 05 
		        </div>
        </footer>
</body>
</html>