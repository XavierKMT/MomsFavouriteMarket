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

    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    <link rel="stylesheet" href="../CSS/weeklydealsStyle.css">

    <script src="../JS/addToCart.js"></script>
    <script src="../JS/productList.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><img src="../Images/logo.png" class="img-fluid"
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
                        <a href="index.html" class="nav-link">Home</a>
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

    <?php 
        include 'products.php';
    ?>

    <center>
        <!--Making a table with bootstrap-->
        <div id = "ProductList" class="col-md-11">
            <h2 class="text-center" style="color:#334754;">Weekly Deals!</h2>
            <div class="table-responsive">
            <!--Table of products in the weekly deals-->
            <table class="table" border="1">
                
                <tr>
                    <th colspan="8" class="table-dark" style="background-color:#334754;">All Products</th>
    
                </tr>
                <!--Row for the header of each colums-->
                <tr>
                    <td> </td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>New Price</td>
                    <td>Weight</td>
                    <td>Price per weight</td>
                    <td>Normal Price</td>
                    <td></td>
    
                </tr>
                <!--The first product (first row) with details-->
                <tr>
                    <th><a href="30eggs.html"><img class = "img-fluid" src = "../Images/<?php echo $products[377];?>"></a></th>
                    <td><a href="30eggs.html">Large Eggs</a></td>
                    <td>Dairy & Eggs</td>
                    <td id = "sales"><span class = "bigger"> $4.77</span> ea.</td>
                    <td>30 un.</td>
                    <td>$0.25/un</td>
                    <td id = "oldPrices">$7.49 ea.</td>
                    <!--Add to cart button-->
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  
                <!--The same concept for each products-->
                <tr>
                    <td><a href="0yogurt.html"><img class = "img-fluid" src = "../Images/yogurtcup.png"></img></a></td>
                    <td><a href="0yogurt.html">Blueberry Yogurt Pack</a></td>
                    <td>Dairy & Eggs</td>
                    <td id = "sales"><span class="bigger">$5.99</span> ea.</td>
                    <td>12 x 95g</td>
                    <td>$0.53/100g</td>
                    <td id = "oldPrices">$7.49 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to Cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Chicken.html"><img class = "img-fluid" src = "../Images/chickenbreast.png"></img></a></th>
                    <td><a href="Chicken.html">Boneless Chicken Breast, 3 Pack</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class="bigger">$5.11</span> ea.</td>
                    <td> approx. 600g</td>
                    <td id = "oldPrices">$1.70/100g</td>
                    <td id = "oldPrices">$10.21 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to Cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Pork.html"><img class = "img-fluid" src = "../Images/pork.png"></img></a></th>
                    <td><a href="Pork.html">Butterfly Pork Chops, 3 Pack</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger">$4.30</span> avg. ea.</td>
                    <td>600 avg. ea.</td>
                    <td id = "oldPrices">$13.21/kg</td>
                    <td id = "oldPrices">$8.59</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Duck.html"><img class = "img-fluid" src = "../Images/duckconfit.png"></img></a></th>
                    <td><a href="Duck.html">Confit Duck Legs, 2 Pack</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger">$8.50</span> ea.</td>
                    <td>500g avg.</td>
                    <td id = "oldPrices">$3.40/100g</td>
                    <td id = "oldPrices">$16.99 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to Cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Cucumber.html"><img class = "img-fluid" src = "../Images/cucumber.png"></img></a></th>
                    <td><a href="Cucumber.html">English HH Seedless Cucumber</a></td>
                    <td>Vegetables</td>
                    <td id = "sales"><span class = "bigger">$1.50</span> ea.</td>
                    <td>Sold individually</td>
                    <td id = "oldPrices">$2.50/un</td>
                    <td id = "oldPrices">$2.50</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="BreadRolls.html"><img class = "img-fluid" src = "../Images/Baguette.png"></img></a></th>
                    <td><a href="BreadRolls.html">French Baguette</a></td>
                    <td>Bakery</td>
                    <td id = "sales"><span class = "bigger">$2.49</span> ea.</td>
                    <td>250 g</td>
                    <td>$1.28/100g</td>
                    <td id = "oldPrices">$3.19</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Haddock.html"><img class = "img-fluid" src = "../Images/haddockfillet.png"></img></a></th>
                    <td><a href="Haddock.html">Haddock Fillet</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger">$1.76</span> ea.</td>
                    <td>200 g</td>
                    <td id = "oldPrices">$17.61/kg</td>
                    <td id = "oldPrices">$3.52</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Apple.html"><img class = "img-fluid" src = "../Images/apple.png"></img></a></th>
                    <td><a href="Apple.html">Honeycrips Apple</a></td>
                    <td>Fruits</td>
                    <td id = "sales"><span class = "bigger">$1.05</span> avg. ea.</td>
                    <td>160 g avg.</td>
                    <td>$8.80/kg</td>
                    <td id = "oldPrices">$1.41 avg. ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>
    
                <tr>
                    <th><a href="Orange.html"><img class = "img-fluid" src = "../Images/orange.png"></img></a></th>
                    <td><a href="Orange.html">Large Navel Orange</a></td>
                    <td>Fruits</td>
                    <td id = "sales"><span class = "bigger">$1.00</span> ea.</td>
                    <td>Sold individually</td>
                    <td id = "oldPrices">$1.49/un.</td>
                    <td id = "oldPrices">$1.49</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="GroundBeef.html"><img class = "img-fluid" src = "../Images/groundbeef.png"></img></a></th>
                    <td><a href="GroundBeef.html">Lean Ground Beef</a></td>
                    <td>Butchery</td>
                    <td id = "sales">Approx.<span class = "bigger"> $3.87</span> ea.</td>
                    <td>Approx. 500g</td>
                    <td id = "oldPrices">$1.55/100g</td>
                    <td id = "oldPrices">Approx. $7.73 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="Turkey.html"><img class = "img-fluid" src = "../Images/mincedturkey.png"></img></a></th>
                    <td><a href="Turkey.html">Lean Minced Turkey</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger"> $2.99</span> ea.</td>
                    <td>450g avg.</td>
                    <td id = "oldPrices">$1.33/100g</td>
                    <td id = "oldPrices">$5.99 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="Lobster.html"><img class = "img-fluid" src = "../Images/lobster.png"></img></a></th>
                    <td><a href="Lobster.html">Live Lobster</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger"> $9.55</span> ea.</td>
                    <td>520g avg</td>
                    <td id = "oldPrices">$1.55/100g</td>
                    <td id = "oldPrices">$19.55 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="FrozenPizza.html"><img class = "img-fluid" src = "../Images/FrozenPizza.png"></img></a></th>
                    <td><a href="FrozenPizza.html">Frozen Pepperoni & Cheese Pizza</a></td>
                    <td>Frozen</td>
                    <td id = "sales"><span class = "bigger"> $6.99</span> ea.</td>
                    <td>815g</td>
                    <td>$0.86/100g</td>
                    <td id = "oldPrices">$7.59 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="PlainBagel.html"><img class = "img-fluid" src = "../Images/plainbagel.png"></img></a></th>
                    <td><a href="PlainBagel.html">Plain Bagels</a></td>
                    <td>Bakery</td>
                    <td id = "sales"><span class = "bigger"> 2.99</span> ea.</td>
                    <td>6 un - 450g</td>
                    <td>$0.67/un</td>
                    <td id = "oldPrices">$3.99 avg. ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="RibSteak.html"><img class = "img-fluid" src = "../Images/steak.png"></img></a></th>
                    <td><a href="RibSteak.html">Rib Steak</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger"> $5.29</span> avg. ea.</td>
                    <td>300g avg.</td>
                    <td id = "oldPrices">$35.25/kg</td>
                    <td id = "oldPrices">Approx. $10.58 avg. ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="Salmon.html"><img class = "img-fluid" src = "../Images/salmonfillet.png"></img></a></th>
                    <td><a href="Salmon.html">Salmon Fillet</a></td>
                    <td>Butchery</td>
                    <td id = "sales"><span class = "bigger"> $3.42</span> ea.</td>
                    <td>200g</td>
                    <td id = "oldPrices">$34.15/Kg</td>
                    <td id = "oldPrices">$6.83 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr> 
                
                <tr>
                    <th><a href="WhiteBread.html"><img class = "img-fluid" src = "../Images/whitebread.png"></img></a></th>
                    <td><a href="WhiteBread.html">Sliced White Bread</a></td>
                    <td>Bakery</td>
                    <td id = "sales"><span class = "bigger">$2.50</span> ea.</td>
                    <td>675g</td>
                    <td >$0.38/100g</td>
                    <td id = "oldPrices">$3.58 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="StrawberryYogurt.html"><img class = "img-fluid" src = "../Images/strawberryyogurt.png"></img></a></th>
                    <td><a href="StrawberryYogurt.html">Strawberry Yogurt Pack</a></td>
                    <td>Dairy & Eggs</td>
                    <td id = "sales"><span class = "bigger"> $5.99</span> ea.</td>
                    <td>12 x 95g</td>
                    <td>$0.53/100g</td>
                    <td id = "oldPrices">$7.49 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr>  

                <tr>
                    <th><a href="TomatoSoup.html"><img class = "img-fluid" src = "../Images/cannedsoup.png"></img></a></th>
                    <td><a href="TomatoSoup.html">Tomato soup</a></td>
                    <td>Pantry</td>
                    <td id = "sales"><span class = "bigger"> $1.69</span> ea.</td>
                    <td>540 ml</td>
                    <td>$0.74/100ml</td>
                    <td id = "oldPrices">$3.99 ea.</td>
                   <td><button type="button"> <a1 href = "AddProduct.html">Add to cart</a1></button></td>
                </tr> 

            </table>

    
       
    
       </center> 

    <!--Footer-->
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