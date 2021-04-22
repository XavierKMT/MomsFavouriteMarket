<!--The header-->
<?php 
    include("headerForAisles.php");
?>

    <!--The banner-->
    <br></br>
    <center> <img class="img-fluid" src="../Images/Bakery.jpg " banner for Fruits & Vegetables"> </center>
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
                    <a class="dropdown-item" href="Bakery_Relevance.html">Relevance</a>
                    <a class="dropdown-item" href="Bakery_AZ.html">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="Bakery_ZA.html">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="Bakery_PriceLH.html">Price (low to high)</a>
                    <a class="dropdown-item" href="Bakery_PriceHL.html">Price (high to low)</a>
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
                            <th scope="col">Bakery</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">Bagels</td>
                        </tr>
                        <tr>
                            <td scope="row">Breads</td>
                        </tr>
                        <tr>
                            <td scope="row">Pastries</td>
                        </tr>
                        </tbody>
                </table>
            </div>
    
            <div class = "col-md-10"> 
                      <!--The bagels header-->
    <div>
        <h4>Bagels</h4>
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
                    <a href="PlainBagel.html"><img class="img-fluid" src="../Images/<?php echo $products[116];?>" alt="plain bagel">
                        </imag></a>
                </center>
                <a href="PlainBagel.html"><?php echo $products[104];?> </a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[108];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[107];?> ea.</p>
                <p id="p1">(<?php echo $products[110];?> un - <?php echo $products[109];?>)</p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(35)">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="WholeWheatBagel.html"><img class="img-fluid" src="../Images/<?php echo $products[129];?>"
                            alt="whole wheat bagel"> </img></a>
                </center>
                <a href="WholeWheatBagel.html"><?php echo $products[117];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[120];?></span> ea.</b>
                <p id="p1">(<?php echo $products[123];?> un - <?php echo $products[122];?>)</p>
                <br></br>
                <br />
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(49)">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="emptyslots">
            </div>
        </div>
    </div>

    <!--The bread header-->

    <div>
        <center>
            <h4>Breads</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="WhiteBread.html"><img class="img-fluid" src="../Images/<?php echo $products[142];?>" alt="white bread"></a>
                </center>
                <a href="WhiteBread.html"><?php echo $products[130];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[134];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[133];?> ea.</p>
                <p id="p1">(<?php echo $products[135];?>)</p>
                <p id="p1"><?php echo $products[136];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(48)">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="WholeWheatBread.html"><img class="img-fluid" src="../Images/<?php echo $products[155];?>"
                            alt="whole wheat bread"></a>
                </center>
                <a href="WholeWheatBread.html"><?php echo $products[143];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[146];?></span> ea.</b>
                <p id="p1">(<?php echo $products[148];?>)</p>
                <p id="p1"><?php echo $products[149];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(50)">Add to cart</button>
                <br></br>
            </div>
            <!--The third product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="BreadRolls.html"><img class="img-fluid" src="../Images/<?php echo $products[168];?>" alt="baguette"></a>
                </center>
                <a href="BreadRolls.html"><?php echo $products[156];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[160];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[159];?> ea.</p>
                <p id="p1">(<?php echo $products[161];?>)</p>
                <p id="p1"><?php echo $products[162];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(11)">Add to cart</button>
                <br></br>
            </div>
        </div>
    </div>
    <!--The bread header-->

    <div>
        <center>
            <h4>Pastries</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="MaplePastry.html"><img class="img-fluid" src="../Images/<?php echo $products[181];?>"
                            alt="maple pastry"></a>
                </center>
                <a href="MaplePastry.html"><?php echo $products[169];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[172];?></span> ea.</b>
                <p id="p1">(<?php echo $products[174];?>)</p>
                <p id="p1"><?php echo $products[175];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(29)">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="PalmLeafPastry.html"><img class="img-fluid" src="../Images/<?php echo $products[194];?>"
                            alt="leaf pastry"></a>
                </center>
                <a href="PalmLeafPastry.html"><?php echo $products[182];?></a>
                <br></br>
                <b id="p1"><span class="bigger"><?php echo $products[185];?></span> ea.</b>
                <p id="p1">(<?php echo $products[187];?>)</p>
                <p id="p1"><?php echo $products[188];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle" onclick="addToCart(31)">Add to cart</button>
                <br></br>
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

    <!--The footer-->
<?php
    include ("footerForAisle.php");
?>