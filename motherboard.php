<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar Basis Data</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sublime project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style_motherboard.css">
  <link rel="stylesheet" href="css/categories_responsive.css">
	<link rel="stylesheet" href="css/w3.css">
 	<link rel="stylesheet" href="css/css_raleway.css">
 	<link rel="stylesheet" href="css/font-awesome.min.css">
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

<div class="products">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <!-- Product Sorting -->
          <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
            <div class="results">Showing <span>12</span> results</div>
            <div class="sorting_container ml-md-auto">
              <div class="sorting">
                <ul class="item_sorting">
                  <li>
                    <span class="sorting_text">Sort by</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <ul>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          
          <div class="product_grid">

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
              <div class="product_extra product_new"><a href="categories.html">New</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$670</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$520</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_3.jpg" alt=""></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$710</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_4.jpg" alt=""></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$330</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_5.jpg" alt=""></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$170</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_6.jpg" alt=""></div>
              <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$240</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_7.jpg" alt=""></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$70</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_8.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$490</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_9.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$410</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_10.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$365</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_11.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$195</div>
              </div>
            </div>

            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/product_12.jpg" alt=""></div>
              <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
              <div class="product_content">
                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                <div class="product_price">$580</div>
              </div>
            </div>

          </div>
          <div class="product_pagination">
            <ul>
              <li class="active"><a href="#">01.</a></li>
              <li><a href="#">02.</a></li>
              <li><a href="#">03.</a></li>
            </ul>
          </div>
            
        </div>
      </div>
    </div>
  </div>

<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large" > 
<div class ="footer">
    Copyright &copy; 2018. All Rights Reserved <br>
    Designed by SK - 40 - 05 
</div>
</footer>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
</body>
</html>