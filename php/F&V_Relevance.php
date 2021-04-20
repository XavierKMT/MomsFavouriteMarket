<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/cartStyle.css">
    <link rel="stylesheet" href="CSS/asilesStyle.css">

    <script src="JS/addToCart.js"></script>
    <script src="JS/productList.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php"><img src="../../Images/logo.png" class="img-fluid"
                    alt="Responsive image"><span id="title">Mom's Favourite Market</span>
            </a>
            <!--LINK TO MAIN PAGE-->
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aisles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Dairy&Eggs_Relevance.php">Dairy & Eggs</a></li>
                            <li><a class="dropdown-item" href="F&V_Relevance.php">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="Bakery_Relevance.php">Bakery</a></li>
                            <li><a class="dropdown-item" href="Butchery_Relevance.php">Butchery</a></li>
                            <li><a class="dropdown-item" href="Pantry_Relevance.php">Non-Perishable Food</a></li>
                            <li><a class="dropdown-item" href="Frozen_Relevance.php">Frozen Food</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="WeeklyDeals.php" class="nav-link">Weekly Deals!</a>
                    </li>
                    <li class="nav-item">
                        <a href="environment1.php" class="nav-link">Environment</a>
                    </li>
                    <li class="nav-item">
                        <a href="careers.php" class="nav-link">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="About us.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="loginpage.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>
    
                    <li class="nav-item">
                        <a href="Cart.php" class="nav-link"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Alert using bootstrap built in classes-->
        <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
            -- Closing Hours May Vary Due to COVID-19 --
            <button aria-label="Close" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </header>

    <!--The banner-->
    <br></br>
    <center> <img class="img-fluid" src="../../Images/Fruits&Veggies.jpg " alt="banner for Fruits & Vegetables"> </center>
    <br></br>

   <!--buttons on top-->
   <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <!--The shop by category button-->
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Shop by category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Bakery_Relevance.php">Bakery</a>
                    <a class="dropdown-item" href="Butchery_Relevance.php">Butchery</a>
                    <a class="dropdown-item" href="Dairy&Eggs_Relevance.php">Dairy & Eggs</a>
                    <a class="dropdown-item" href="Frozen_Relevance.php">Frozen</a>
                    <a class="dropdown-item" href="F&V_Relevance.php">Fruits & Vegetables</a>
                    <a class="dropdown-item" href="Pantry_Relevance.php">Pantry</a>
                </div>
            </div>
        </div>
        <!--The sort by button-->
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sort by
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="F&V_Relevance.html">Relevance</a>
                    <a class="dropdown-item" href="F&V_AZ.html">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="F&V_ZA.html">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="F&V_PriceLH.html">Price (low to high)</a>
                    <a class="dropdown-item" href="F&V_PriceHL.html">Price (high to low)</a>
                </div>
            </div>
        </div>
  </div>

  <div class = "container" style =  "width: 85%; margin-top: 2%; border-left:2px solid black;">
    <div class="row">
		<!--The menu on the side-->
		<div class="col-sm-2 d-none d-md-block"  style = "border-right:2px solid black;">
			<table class="table">
					<thead>
					<tr>
						<th scope="col">Fruits & Vegetables</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td scope="row">Fruits</td>
					</tr>
					<tr>
						<td scope="row">Vegetables</td>
					</tr>
					</tbody>
			</table>
		</div>

        <div class = "col-md-10"> 
              <!--The fruits header-->
    <div>
        <h4>Fruits</h4>
    </div>
    <!--The grid for the product (bootstrap)-->

    <?php 
        include 'products.php';
    ?>

    <div class="container">
        <!--First row-->
        <div class="row" >
            <!--First Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Apple.html"><img class="img-fluid" src="../Images/<?php echo $products[12];?>" alt="apple"></imag></a>
                </center>
                <a href="Apple.html"><?php echo $products[0];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[4];?></span> avg. ea.</b>
                <p id="oldPrices"><?php echo $products[3];?> avg. ea.</p>
                <p id="p1">(<?php echo $products[5];?> avg.)</p>
                <p id="p1"><?php echo $products[6];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Banana.html"><img class="img-fluid" src="../Images/<?php echo $products[25];?>" alt="banana"> </img></a>
                </center>
                <a href="Banana.html"><?php echo $products[13];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[16];?></span> avg. ea.</b>
                <p id="p1">(<?php echo $products[18];?> avg.)</p>
                <p id="p1"><?php echo $products[19];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Orange.html"><img class="img-fluid" src="../Images/<?php echo $products[51];?>" alt="oranges"></img></a>
                </center>
                <a href="Orange.html"><?php echo $products[39];?></a>
                <br></br>
                <p id="p1"><?php echo $products[44];?></p>
                <b id="p1"><span class="bigger"><?php echo $products[42];?></span> ea.</b>
                <p id="p1"><?php echo $products[44];?>/un.</p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
        </div>
    </div>
    <!--Second row-->
    <div class="container">
        <div class="row" >
            <!--First Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Pear.html"><img class="img-fluid" src="../Images/<?php echo $products[38];?>" alt="pear"></img></a>
                </center>
                <a href="Pear.html"><?php echo $products[26];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[29];?></span> avg. ea.</b>
                <p id="p1">(<?php echo $products[31];?> avg.)</p>
                <p id="p1"><?php echo $products[32];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="emptyslots">
            </div>
            <!--Third Product-->
            <div class="col-sm" id="emptyslots">
            </div>
        </div>
    </div>

    <!--The vegetables header-->

    <div>
        <center>
            <h4>Vegetables</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Celery.html"><img class="img-fluid" src="../Images/<?php echo $products[64];?>" alt="celery"></a>
                </center>
                <a href="Celery.html"><?php echo $products[52];?></a>
                <br></br>
                <p id="p1"><?php echo $products[57];?></p>
                <b id="p1"> <span class="bigger"><?php echo $products[55];?></span> ea.</b>
                <p id="p1"><?php echo $products[55];?>/un.</p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Cucumber.html"><img class="img-fluid" src="../Images/<?php echo $products[77];?>" alt="cucumber"></a>
                </center>
                <a href="Cucumber.html"><?php echo $products[65];?></a>
                <p id="p1"><?php echo $products[70];?></p>
                <b id="p2"><span class="bigger"><?php echo $products[69];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[68];?> ea.</p>
                <p id="oldPrices"><?php echo $products[68];?>/un.</p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The third product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Lettuce.html"><img class="img-fluid" src="../Images/<?php echo $products[103];?>" alt="lettuce"></a>
                </center>
                <a href="Lettuce.html"><?php echo $products[91];?></a>
                <br></br>
                <p id="p1"><?php echo $products[96];?></p>
                <b id="p1"><span class="bigger"><?php echo $products[94];?></span> ea. </b>
                <p id="p1"><?php echo $products[94];?>/un.</p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
        </div>
        <!--The second row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Pepper.html"><img class="img-fluid" src="../Images/<?php echo $products[90];?>" alt="red pepper"></a>
                </center>
                <a href="Pepper.html"><?php echo $products[78];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[81];?></span> avg. ea.</b>
                <p id="p1">(<?php echo $products[83];?> avg.)</p>
                <p id="p1"><?php echo $products[84];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="emptyslots">
            </div>
            <!--The third product-->
            <div class="col-sm" id="emptyslots">
            </div>
        </div>
    </div>
		</div>
		
	</div>
</div>

  
    <!--The button for the pages-->
    <br></br>
    <center>
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
    </center>

    <!--Boot Strap Website-->
    <footer class="container-fluid"
        style="background-color:#334754; margin-top: 60px; padding-bottom: 20px; padding-top:40px;">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="text-center">Follow Us</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="#" style="padding-right: 8px;"><i
                                class="fab fa-facebook-square fa-3x" style="color: white;"></i></a>
                        <a class="text-muted" href="#" style="padding-right: 8px;"> <i class="fab fa-instagram fa-3x"
                                style="color: white;"></i></a>
                        <a class="text-muted" href="#"><i class="fab fa-twitter-square fa-3x"
                                style="color: white;"></i></a>
                    </li>
                </ul>
            </div>
            <div class=" col-lg-4">
                <h5 class="text-center">Resources</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><a class="text-muted" href="mailto: abc@example.com"><span style="color: white;">Contact Us
                    <li><a class="text-muted" href="#"><span style="color: white;">About Us</span></a></li>
                    <!--IGA 5600 Boul Henri-Bourassa O, Montréal, QC H4R 0B8-->
                    <li><a class="text-muted"
                            href="https://www.google.com/maps/place/IGA+extra+March%C3%A9+Duchemin+et+Fr%C3%A8res+inc./@45.4946104,-73.749825,11.74z/data=!4m8!1m2!2m1!1sIGA+montreal!3m4!1s0x4cc9229a0a52ef73:0x8f71f920518a186e!8m2!3d45.5172748!4d-73.7151113"><span
                                style="color: white;">Our Map</span></a></li>
                    <li><a class="text-muted" href="#"><span style="color: white;">Coupons</span></a></li>
                    <li><a class="text-muted" href="#"><span style="color: white;">FAQ</span></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="text-center">Newsletter</h5>
                <ul class="list-unstyled text-small text-center">
                    <li><span style="color: white;">Sign Up to stay up to date with our offers and more</span><a
                            class="text-muted" href="#"><span style="color:#e04362; padding-left: 5px;">Learn
                                More</span></a>
                    </li>
                    <li>
                        <form>
                            <input type="text" placeholder="Enter Your Email" class="form-control"
                                style="border-radius: 20px; border-style: none; margin-top: 10px;">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!--CDN import for header & footer-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

</body>



</html>