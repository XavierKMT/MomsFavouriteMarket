<!--The header-->
<?php 
    include("headerForAisles.php");
?>

    <!--The banner-->
    <br></br>
    <center> <img class="img-fluid" src="../Images/Fruits&Veggies.jpg " alt="banner for Fruits & Vegetables"> </center>
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

<!--The footer-->
<?php
    include ("footerForAisle.php");
?>