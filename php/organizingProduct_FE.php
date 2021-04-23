<?php

$productList = file_get_contents("../data/newProdList.txt")."</br>";

    $products = explode("\n", $productList);

    $num = count($products);

    $item = array();
    $aisle = array();
    $subAisle = array();
    $weeklyDeal = array();

    for($i = 0 ; $i<$num ; $i++){
        $temp = explode(";", $products[$i]);

        array_push($item, $temp[0]);
        array_push($aisle, $temp[1]);
        array_push($subAisle, $temp[2]);
        array_push($weeklyDeal, $temp[4]);
    } 


    $FV = array(); 
    $frozen = array();
    $bakery = array();
    $butchery = array();
    $dairy = array();
    $pantry = array();

    for($i = 0; $i<$num; $i++){
        if($aisle[$i] == "Fruits & Vegetables")
            array_push($FV, $products[$i]);
        else if($aisle[$i] == "Frozen")
            array_push($frozen, $products[$i]);
        else if($aisle[$i] == "Bakery")
            array_push($bakery, $products[$i]);
        else if($aisle[$i] == "Butchery")
            array_push($butchery, $products[$i]);
        else if($aisle[$i] == "Dairy & Eggs")
            array_push($dairy, $products[$i]);
        else if($aisle[$i] == "Pantry")
            array_push($pantry, $products[$i]);
    }

  //  foreach($bakery as $key => $value){
  //      echo "Key: $key; Value: $value <br />";
  //  }
/*
$fruits = array();
$veggies = array(); 
$bagels = array();
$breads = array();
$pastries = array();
$meat = array();
$poultry = array();
$seafood = array();
$CY = array();
$eggs = array();
$MCB = array();
$BI = array();
$CF = array();
$frozen = array();

for($i = 0; $i<$num; $i++){
    if($subAisle[$i] == "Fruits")
        array_push($fruits, $products[$i]);
    else if($subAisle[$i] == "Vegetables")
        array_push($veggies, $products[$i]);
    else if($subAisle[$i] == "Bagels")
        array_push($bagels, $products[$i]);
    else if($subAisle[$i] == "Breads")
        array_push($breads, $products[$i]);
    else if($subAisle[$i] == "Pastries")
        array_push($pastries, $products[$i]);
    else if($subAisle[$i] == "Meat")
        array_push($meat, $products[$i]);
    else if($subAisle[$i] == "Poultry")
        array_push($poultry, $products[$i]);
    else if($subAisle[$i] == "Seafood")
        array_push($seafood, $products[$i]);
    else if($subAisle[$i] == "Cheese & Yogurt")
        array_push($CY, $products[$i]);
    else if($subAisle[$i] == "Eggs")
        array_push($eggs, $products[$i]);
    else if($subAisle[$i] == "Milk, Cream & Butter")
        array_push($MCB, $products[$i]);
    else if($subAisle[$i] == "Baking Ingredients")
        array_push($BI, $products[$i]);
    else if($subAisle[$i] == "Canned Food")
        array_push($CF, $products[$i]);
    else if($subAisle[$i] == "Frozen")
        array_push($frozen, $products[$i]);
    
}
*/
//See if it's in the weekly deal
$sales = array();
$noSales = array();
    
for($i = 0; $i<$num; $i++){
    if($weeklyDeal[$i] == "no deal"){
        array_push($noSales, $products[$i]);
        }
    else{
        array_push($sales, $products[$i]);
        }
                
}

?>