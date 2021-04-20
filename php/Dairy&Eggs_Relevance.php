<!--The header-->
<?php 
    include("headerForAisles.php");
?>

    <!--The banner-->
    <br></br>
    <center> <img class="img-fluid" src="../Images/Dairy&Eggs.jpg " alt="banner for dairy & eggs"> </center>
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
                    <a class="dropdown-item" href="Dairy&Eggs_Relevance.html">Relevance</a>
                    <a class="dropdown-item" href="Dairy&Eggs_AZ.html">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_ZA.html">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_PriceLH.html">Price (low to high)</a>
                    <a class="dropdown-item" href="Dairy&Eggs_PriceHL.html">Price (high to low)</a>
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
                            <th scope="col">Dairy & Eggs</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">Cheese & Yogurt</td>
                        </tr>
                        <tr>
                            <td scope="row">Eggs</td>
                        </tr>
                        <tr>
                            <td scope="row">Milk, Cream & Butter</td>
                        </tr>
                        </tbody>
                </table>
            </div>
    
            <div class = "col-md-10"> 
                      <!--The cheese & yogurt header-->
    <div>
        <h4>Cheese & Yogurt</h4>
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
                    <a href="ShreddedCheese.html"><img class="img-fluid" src="../Images/<?php echo $products[324];?>"
                            alt="shredded cheese"></imag></a>
                </center>
                <a href="ShreddedCheese.html"><?php echo $products[312];?></a>
                <b id="p1"><span class="bigger"><?php echo $products[315];?></span> ea.</b>
                <p id="p1">(<?php echo $products[317];?>)</p>
                <p id="p1"><?php echo $products[318];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="CheddarCheese.html"><img class="img-fluid" src="../Images/<?php echo $products[337];?>"
                            alt="cheddar cheese"> </img></a>
                </center>
                <a href="CheddarCheese.html"><?php echo $products[325];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[328];?></span> ea.</b>
                <p id="p1">(<?php echo $products[330];?>)</p>
                <p id="p1"><?php echo $products[331];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="StrawberryYogurt.html"><img class="img-fluid" src="../Images/<?php echo $products[350];?>"
                            alt="strawberry yogurt"></img></a>
                </center>
                <a href="StrawberryYogurt.html"><?php echo $products[338];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[342];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[341];?> ea.</p>
                <p id="p1"><?php echo $products[343];?></p>
                <p id="p1"><?php echo $products[344];?></p>
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
                    <a href="0yogurt.html"><img class="img-fluid" src="../Images/<?php echo $products[363];?>"
                            alt="blueberry yogurt"></img></a>
                </center>
                <a href="0yogurt.html"><?php echo $products[351];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[355];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[354];?> ea.</p>
                <p id="p1"><?php echo $products[256];?></p>
                <p id="p1"><?php echo $products[357];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="YogurtPack.html"><img class="img-fluid" src="../Images/<?php echo $products[376];?>"
                            alt="yogurt pack"></img></a>
                </center>
                <a href="YogurtPack.html"><?php echo $products[364];?></a>
                <b id="p1"><span class="bigger"><?php echo $products[367];?></span> ea.</b>
                <p id="p1"><?php echo $products[369];?></p>
                <p id="p1"><?php echo $products[370];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="emptyslots">
            </div>

        </div>
    </div>

    <!--The eggs header-->

    <div>
        <center>
            <h4>Eggs</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="30eggs.html"><img class="img-fluid" src="../Images/<?php echo $products[389];?>" alt="30 eggs"></a>
                </center>
                <a href="30eggs.html"><?php echo $products[377];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[381];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[380];?> ea.</p>
                <p id="p1">(<?php echo $products[382];?>)</p>
                <p id="p1"><?php echo $products[383];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="10eggsWhite.html"><img class="img-fluid" src="../Images/<?php echo $products[402];?>"
                            alt="10 white eggs"></a>
                </center>
                <a href="10eggsWhite.html"<?php echo $products[390];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[393];?></span> ea.</b>
                <p id="p1">(<?php echo $products[395];?>)</p>
                <p id="p1"><?php echo $products[396];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The third product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="12eggsBrown.html"><img class="img-fluid" src="../Images/<?php echo $products[415];?>"
                            alt="10 brown eggs"></a>
                </center>
                <a href="12eggsBrown.html"><?php echo $products[403];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[406];?></span> ea.</b>
                <p id="p1">(<?php echo $products[408];?>)</p>
                <p id="p1"><?php echo $products[409];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>

        </div>
    </div>
    <!--The milk, cream & butter header-->
    <div>
        <h4>Milk, Cream & Butter</h4>
    </div>
    <!--The grid for the product (bootstrap)-->

    <div class="container">
        <!--First row-->
        <div class="row" >
            <!--First Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="1milk4L.html"><img class="img-fluid" src="../Images/<?php echo $products[428];?>" alt="1% milk 4L"></img></a>
                </center>
                <a href="1milk4L.html"><?php echo $products[416];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[419];?></span> ea.</b>
                <p id="p1">(<?php echo $products[421];?>)</p>
                <p id="p1"><?php echo $products[422];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="1milk1L.html"><img class="img-fluid" src="../Images/<?php echo $products[441];?>" alt="1milk1L"> </img></a>
                </center>
                <a href="1milk1L.html"><?php echo $products[429];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[432];?></span> ea.</b>
                <p id="p1">(<?php echo $products[434];?>)</p>
                <p id="p1"><?php echo $products[435];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="2milk4L.html"><img class="img-fluid" src="../Images/<?php echo $products[454];?>" alt="2milk4L"></img></a>
                </center>
                <a href="2milk4L.html"><?php echo $products[442];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[445];?></span> ea.</b>
                <p id="p1">(<?php echo $products[447];?>)</p>
                <p id="p1"><?php echo $products[448];?></p>
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
                    <a href="2milk4L.html"><img class="img-fluid" src="../Images/<?php echo $products[467];?>" alt="2milk4L"></img></a>
                </center>
                <a href="2milk4L.html"><?php echo $products[455];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[458];?></span> ea.</b>
                <p id="p1">(<?php echo $products[460];?>)</p>
                <p id="p1"><?php echo $products[461];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="SaltedButter.html"><img class="img-fluid" src="../Images/<?php echo $products[480];?>"
                            alt="salted butter"></img></a>
                </center>
                <a href="SaltedButter.html"><?php echo $products[468];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[471];?></span> ea.</b>
                <p id="p1">(<?php echo $products[473];?>)</p>
                <p id="p1"><?php echo $products[474];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="UnsaltedButter.html"><img class="img-fluid" src="../Images/<?php echo $products[493];?>"
                            alt="unsalted butter"></img></a>
                </center>
                <a href="UnsaltedButter.html"><?php echo $products[481];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[484];?></span> ea.</b>
                <p id="p1">(<?php echo $products[486];?>)</p>
                <p id="p1"><?php echo $products[487];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
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

 <!--The footer-->
<?php
    include ("footerForAisle.php");
?>