<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar Basis Data</title>

  <style>
    .container {
                height:70px;
                width:200%;
                height:40px;
    }
    .kolom1 {
                height:40px;
                width:60%;
                float:left;
    }
    .kolom2 {
                height:35px;
                width:10%;
                float:left;    
    }
    .kolom3 {
                height:35px;
                width:28%;
                float:right;   
    }
    .button {
    background-color: ;
    border: 1;
    color: black;
    padding: 15px 250px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
  }

</style>
  


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-popup.css">
	<link rel="stylesheet" href="css/boot.css">
	<script src="js/boot1.js"></script>
	<script src="js/boot2.js"></script>
	<script src="js/boot3.js"></script>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg " style="background-color: #dce0e8;">
	<a class="navbar-brand" href="#">
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
	    <li class="nav-item">
			<a class="nav-link" href="produk.php">Produk</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="simulasi.php">Simulasi</a>
		</li>
	     <li class="nav-item">
	     	<a class="nav-link" href="aboutus.php">About us</a>
	     </li>
	    </ul>
  	</div>
</nav>

<div class="box-form">
	<h2 align="center">Simulation Integrated Smart Shop</h2>
  <br>
  <p align="center">Silahkan pilih komponen untuk rakitan komputer anda. Selamat mencoba simulasi rakitan pc.</p>
  <div class="row">
    <div id="simulasi">
      <form action="#" method="post">
        <div class="kolom1 container">
          <select class="form-control" id="select-brand">
            <option price="0" selected>-Pilih Brand Processor-</option>
            <option price="0" selected>-AMD-</option>
            <option price="0" selected>-INTEL-</option>
          </select>
        </div>
        <br><br>
        <div class="kolom1 container">
          <select class="form-control" id="select-type">
            <option price="0" selected>-Pilih Tipe Socket-</option>
          </select>
        </div>
        <br><br>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-proci">
              <option price="0" selected>-Pilih Processor-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-proci" type="number" id="qty-proci" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-proci" type="input" id="total-proci" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-mobo">
              <option price="0" selected>-Pilih Motherboard-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-mobo" type="number" id="qty-mobo" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-mobo" type="input" id="total-mobo" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-ssd">
              <option price="0" selected>-Pilih SSD-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-ssd" type="number" id="qty-ssd" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-ssd" type="input" id="total-ssd" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-hdd">
              <option price="0" selected>-Pilih Harddisk-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-hdd" type="number" id="qty-hdd" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-hdd" type="input" id="total-hdd" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-ram">
              <option price="0" selected>-Pilih Memory RAM-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-ram" type="number" id="qty-ram" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-ram" type="input" id="total-ram" class="form-control" value="0" readonly>
          </div>
        </div>
          <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-vga">
              <option price="0" selected>-Pilih VGA-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-vga" type="number" id="qty-vga" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-vga" type="input" id="total-vga" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-casing">
              <option price="0" selected>-Pilih Casing-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-casing" type="number" id="qty-casing" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-casing" type="input" id="total-casing" class="form-control" value="0" readonly>
          </div>
        </div>
        <div class="container">
          <div class="kolom1">
            <select class="form-control" id="select-psu">
              <option price="0" selected>-Pilih PSU-</option>
            </select>
          </div>
          <div class="kolom2">
            <input name="qty-proci" type="number" id="qty-psu" class="form-control" value="1">
          </div>
          <div class="kolom3">
            <input name="total-psu" type="input" id="total-psu" class="form-control" value="0" readonly>
          </div>
          <br><br>
          <div class="kolom1">
            <p align="center">Total Harga</p>
          </div>
          <div class="kolom3">
            <input name="total-psu" type="input" id="total-psu" class="form-control" value="0" readonly>
          </div>
        </div>
        <br><br><br>
        <div class="form-group kolom1 container" align="center">
          <div>
            <button class="button">Simulate</button>
          </div>

        </div>

      </form>

      </div>
    </div>
</div>




        <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large" > 
            <div class ="footer">
                Copyright &copy; 2018. All Rights Reserved <br>
                Designed by SK - 40 - 05 
            </div>
        </footer>
        
</body>
</html>