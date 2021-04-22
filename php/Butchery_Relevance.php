<!--The header-->
<?php 
    include("headerForAisles.php");
?>


    <!--The banner-->
    <br></br>
    <center> <img class="img-fluid" src="../Images/Butchery.jpg " alt="banner for the butchery"> </center>
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
                    <a class="dropdown-item" href="Butchery_Relevance.html">Relevance</a>
                    <a class="dropdown-item" href="Butchery_AZ.html">Alphabetical order (A-Z)</a>
                    <a class="dropdown-item" href="Butchery_ZA.html">Alphabetical order (Z-A)</a>
                    <a class="dropdown-item" href="Butchery_PriceLH.html">Price (low to high)</a>
                    <a class="dropdown-item" href="Butchery_PriceHL.html">Price (high to low)</a>
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
						<th scope="col">Butchery</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td scope="row">Meat</td>
					</tr>
					<tr>
						<td scope="row">Poultry</td>
					</tr>
					<tr>
						<td scope="row">Seafood</td>
					</tr>
					</tbody>
			</table>
		</div>

        <div class = "col-md-10"> 
                  <!--The meat header-->
    <div>
        <h4>Meat</h4>
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
                    <a href="GroundBeef.html"><img class="img-fluid" src="../Images/<?php echo $products[207];?>" alt="ground beef">
                        </imag></a>
                </center>
                <a href="GroundBeef.html"><?php echo $products[195];?> </a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[199];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[198];?> ea.</p>
                <p id="p1">(<?php echo $products[200];?>)</p>
                <p id="oldPrices"><?php echo $products[201];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Second Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="RibSteak.html"><img class="img-fluid" src="../Images/<?php echo $products[220];?>" alt="steak"> </img></a>
                </center>
                <a href="RibSteak.html"><?php echo $products[208];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[212];?></span> avg. ea.</b>
                <p id="oldPrices"><?php echo $products[211];?> avg. ea.</p>
                <p id="p1">(<?php echo $products[213];?> avg.)</p>
                <p id="oldPrices"><?php echo $products[214];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--Third Product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Pork.html"><img class="img-fluid" src="../Images/<?php echo $products[233];?>" alt="pork"></img></a>
                </center>
                <a href="Pork.html"><?php echo $products[221];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[225];?></span> avg. ea.</b>
                <p id="oldPrices"><?php echo $products[224];?> avg. ea.</p>
                <p id="p1">(<?php echo $products[226];?> avg.)</p>
                <p id="oldPrices"><?php echo $products[227];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
        </div>
    </div>

    <!--The Poultry header-->
    <div>
        <center>
            <h4>Poultry</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Chicken.html"><img class="img-fluid" src="../Images/<?php echo $products[246];?>"
                            alt="chicken breast"></a>
                </center>
                <a href="Chicken.html"><?php echo $products[234];?></a>
                <b id="p2"> approx.<span class="bigger"> <?php echo $products[238];?></span> ea.</b>
                <p id="oldPrices"> approx. <?php echo $products[237];?> ea.</p>
                <p id="p1">(approx. <?php echo $products[239];?>)</p>
                <p id="oldPrices"><?php echo $products[240];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Turkey.html"><img class="img-fluid" src="../Images/<?php echo $products[259];?>" alt="minced turkey"></a>
                </center>
                <a href="Turkey.html"><?php echo $products[247];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[251];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[250];?> ea.</p>
                <p id="p1">(<?php echo $products[252];?> avg.)</p>
                <p id="oldPrices"><?php echo $products[253];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The third product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Duck.html"><img class="img-fluid" src="../Images/<?php echo $products[272];?>" alt="duck confit"></a>
                </center>
                <a href="Duck.html"><?php echo $products[260];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[264];?></span> ea. </b>
                <p id="oldPrices"><?php echo $products[263];?> ea. </p>
                <p id="p1">(<?php echo $products[265];?> avg.)</p>
                <p id= "oldPrices"><?php echo $products[266];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
        </div>
    </div>

    <!--The seafood header-->
    <div>
        <center>
            <h4>Seafood</h4>
        </center>
    </div>

    <div class="container">
        <!--The first row-->
        <div class="row" >
            <!--The first product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Salmon.html"><img class="img-fluid" src="../Images/<?php echo $products[285];?>" alt="salmon fillet"></a>
                </center>
                <a href="Salmon.html"><?php echo $products[273];?></a>
                <br></br>
                <b id="p2"> <span class="bigger"><?php echo $products[277];?></span> ea.</b>
                <p id="oldPrices"> <?php echo $products[276];?> ea.</p>
                <p id="p1">(<?php echo $products[278];?>)</p>
                <p id="oldPrices"><?php echo $products[279];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The second product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Haddock.html"><img class="img-fluid" src="../Images/<?php echo $products[298];?>"
                            alt="haddock fillet"></a>
                </center>
                <a href="Haddock.html"><?php echo $products[286];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[290];?></span> ea.</b>
                <p id="oldPrices"><?php echo $products[289];?> ea.</p>
                <p id="p1">(<?php echo $products[291];?>)</p>
                <p id="oldPrices"><?php echo $products[292];?></p>
                <br></br>
                <button type="button" class="btn btn-dark btn-sm" id="addToCartStyle">Add to cart</button>
                <br></br>
            </div>
            <!--The third product-->
            <div class="col-sm" id="slots">
                <center>
                    <a href="Lobster.html"><img class="img-fluid" src="../Images/<?php echo $products[311];?>" alt="lobster"></a>
                </center>
                <a href="Lobster.html"><?php echo $products[299];?></a>
                <br></br>
                <b id="p2"><span class="bigger"><?php echo $products[303];?></span> ea. </b>
                <p id="oldPrices"><?php echo $products[302];?> ea. </p>
                <p id="p1">(<?php echo $products[304];?> avg.)</p>
                <p id="oldPrices"><?php echo $products[305];?></p>
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