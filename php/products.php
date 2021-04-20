<!DOCTYPE html>
<html lang= "en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php

        //$file = "../data/newProdListAisles";
        $file = "data/newProdListAisles.txt";
        $handle = fopen($file, "r") or die ("The file could not open!");
        
        if($handle){
            $products = explode(";" , fread($handle, filesize($file)));
            }
        /*
            foreach($products as $key => $value){
                echo "Key: $key, Value: $value <br/>";
            }
        */
        fclose($handle); 

       

        /*
            foreach($products as $key => $value){
                echo "Key: $key, Value: $value <br/>";
        }
        */

        /*
        $i = 0;
        while(! feof($handle))
        {
            $product = explode(";", fgets($handle));
            $i++;

            foreach($product as $key => $value){
                echo "Key: $key, Value: $value <br/>";
            }
        }
        echo "<br />";
        foreach($product as $key => $value){
            echo "Key: $key, Value: $value <br/>";
        }
    
        fclose($handle);
        */
       
        

        foreach($eachProduct as $key => $value){
            echo "Key: $key, Value: $value <br/>";
        }
        
       if(preg_match("no\sdeal", $eaProduct)){
        echo "got no deal";
        }

        /*
        $weeklyDeals = preg_grep("no\sdeal", $eaProducts);
        foreach($weeklyDeals as $key => $value){
            echo "Key: $key, Value: $value <br/>";
        }
        */
        
    ?>
</body>

</html>