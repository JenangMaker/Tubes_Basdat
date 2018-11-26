<html>
	<head>
		<title>Tugas Besar Basis Data</title>

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

		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
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

		
		<div class="box-login">
			<center>
				<?php 
					if(isset($_GET['error_login']))
					{
						echo '<div class="alert-error">Email atau Password yang Anda Masukkan Salah</div>';
					}
					else if(isset($_GET['error_login_data_not_found']))
					{
						echo '<div class="alert-error">Data tidak ditemukan</div>';
					}
					else if(isset($_GET['sukses_daftar']))
					{
						echo '<div class="alert-error">Akun Berhasil dibuat</div>';
					}
				?>

			<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px;  margin-top:100px;" >Login
			</button>
			<div id="modal-wrapper" class="modal">
			  <form class="modal-content animate" action="login.inc.php" method="POST">      
			    
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
			      <img src="foto/1.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container">
			    	<form action="login.inc.php" method="POST" align="center">
						<input type="Email" name="email" placeholder="Email" /><br>
						<input type="Password" name="pass" placeholder="Password" /><br>
						<input type="checkbox" align="left" > Remember me<br> 
						<input type="submit" name="login" value="Login"  />
					</form>
			    </div>
			    
			  </form>
			</div>

			<script>
			// If user clicks anywhere outside of the modal, Modal will close
			var modal = document.getElementById('modal-wrapper');
			window.onclick = function(event) 
			{
			    if (event.target == modal) 
			    {
			        modal.style.display = "none";
			    }
			}
			</script>

			<form action="Form-DataDiri.php" method="POST" align="center">
				<br><input type="submit" name="daftar" value="Daftar" /><br><br>
			</form>
		</div>

		<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large" > 
		        <div class ="footer">
		            Copyright &copy; 2018. All Rights Reserved <br>
		            Designed by SK - 40 - 05 
		        </div>
        </footer>
	</body>
</html> 