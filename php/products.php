<?php
    function findImg($item)
    {
        if($item=="Strawberries")
        {
           return "Images/strawberry.jpg";
        }
            //Dairy Section
        else if($item==("Shredded Mozzarella Cheese Bag"))
        {
            return "Images/shreddedcheese.png";
        }

        else if($item==("Bagel"))
        {
            return "Images/bagel.jpg";
        }

        else if($item==("Milk"))
        {
            return "Images/milk.jpg";
        }

        else if($item==("Cheddar Cheese"))
        {
            return "Images/cheddarcheese.png";
        }

        else if($item==("Strawberry Yogurt Pack"))
        {
            return "Images/straberryyogurt.png";
        }

        else if($item==("Blueberry Yogurt Pack"))
        {
           return "Images/yogurtcup.png";
        }

        else if($item==("Mixed Fruit Flavored Yogurt Pack"))
        {
            return "Images/yogurtpack.png";
        }

        else if($item==("Large Eggs"))
        {
            return "Images/30eggs.png";
        }

        else if($item==("Large White Eggs"))
        {
            return "Images/10whiteeggs.png";
        }

        else if($item==("Large Brown Eggs"))
        {
            return "Images/12browneggs.png";
        }

        else if($item==("1% Milk Large"))
        {
            return "Images/1milk4L.png";
        }

        else if($item==("1% Milk small"))
        {
            return"Images/1milk1L.png";
        }

        else if($item==("2% Milk Large"))
        {
            return "Images/2milk4L.png";
        }

        else if($item==("2% Milk small"))
        {
            return "Images/2milk1L.png";
        }

        else if($item==("Salted Butter"))
        {
            return "Images/butter.png";
        }

        else if($item==("Unsalted Butter"))
        {
            return "Images/unsaltedbutter.png";
        }

        else if($item==("Honeycrips Apple"))
        {
            return "Images/apple1.png";
        }

        else if($item==("Banana"))
        {
            return "Images/banana.png";
        }

        else if($item==("Large Navel Orange"))
        {
            return "Images/orange.png";
        }

        else if($item==("Bartlett Pear"))
        {
             return "Images/pear.png";
        }

        else if($item==("Celery"))
        {
            return "Images/celery.png";
        }

        else if($item==("English HH Seedless Cucumber"))
        {
            return "Images/cucumber.png";
        }

        else if($item==("Romaine Lettuce"))
        {
            return "Images/lettuce.png";
        }

        else if($item==("Red Pepper"))
        {
            return "Images/redpepper.png";
        }

        //--------------------------------------------------------

        else if($item==("Plain Bagels"))
        {
            return "Images/plainbagel.png";
        }

        else if($item==("Whole Wheat Bagels"))
        {
            return "Images/wholewheatbagel.png";
        }

        else if($item==("Sliced White Bread"))
        {
            return "Images/whitebread.png";
        }

        else if($item==("Sliced Whole Wheat Bread"))
        {
            return "Images/wholewheatbread.png";
        }

        else if($item==("French Baguette"))
        {
            return "Images/Breadrolls.png";
        }

        else if($item==("Maple Pastry Bites"))
        {
            return "Images/mapplepastry.png";
        }

        else if($item==("Palm Leaf Pastries"))
        {
            return "Images/leafpastry.png";
        }

        //--------------------------------------------------------------------------------------

        else if($item==("Lean Ground Beef"))
        {
            return "Images/groundbeef.png";
        }

        else if($item==("Rib Steak"))
        {
            return "Images/steak.png";
        }

        else if($item==("Butterfly Pork Chops"))
        {
            return "Images/pork.png";
        }

        else if($item==("Boneless Chicken Breast"))
        {
            return "Images/chickenbreast.png";
        }

        else if($item==("Lean Minced Turkey"))
        {
            return "Images/mincedturkey.png";
        }

        else if($item==("Confit Duck Legs"))
        {
            return "Images/duckconfit.png";
        }

        else if($item==("Salmon Fillet"))
        {
            return "Images/salmonfillet.png";
        }

        else if($item==("Haddock Fillet"))
        {
            return "Images/haddockfillet.png";
        }

        else if($item==("Live Lobster"))
        {
            return "Images/lobster.png";
        }

        //------------------------------------------------------------------------------------------

        else if($item==("All Purpose Flour"))
        {
            return "Images/flour.png";
        }

        else if($item==("Sugar"))
        {
            return "Images/sugar.png";
        }

        else if($item==("Table Salt"))
        {
            return "Images/salt.png";
        }

        else if($item==("Chocolate Chips"))
        {
            return "Images/chocolatechip.png";
        }


        else if($item==("Canned Peas"))
        {
            return "Images/cannedpeas.png";
    
        }

        else if($item==("Canned Tuna Chunks"))
        {
            return "Images/cannedtuna.png";
        }

        else if($item==("Diced Tomatoes"))
        {
            return "Images/dicedtomatoes.png";
        }

        else if($item==("Tomato Soup"))
        {
            return "Images/cannedsoup.png";
        }

        else if($item==("Cream of Mushroom Soup"))
        {
            return "Images/creamofmushroom.png";
        }

        else if($item==("Pea and Ham Soup"))
        {
            return "Images/peaandhamsoup.png";
        }
        
    }

    function category($item)
    {
        if($item=="Strawberries")
        {
           return "Fruits & Vegetables";
        }
            //Dairy Section
        else if($item==("Shredded Mozzarella Cheese Bag"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Bagel"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Milk"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Cheddar Cheese"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Strawberry Yogurt Pack"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Blueberry Yogurt Pack"))
        {
           return "Dairy & Eggs";
        }

        else if($item==("Mixed Fruit Flavored Yogurt Pack"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Large Eggs"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Large White Eggs"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Large Brown Eggs"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("1% Milk Large"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("1% Milk small"))
        {
            return"Dairy & Eggs";
        }

        else if($item==("2% Milk Large"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("2% Milk small"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Salted Butter"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Unsalted Butter"))
        {
            return "Dairy & Eggs";
        }

        else if($item==("Honeycrips Apple"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("Banana"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("Large Navel Orange"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("Bartlett Pear"))
        {
             return "Fruits & Vegetables";
        }

        else if($item==("Celery"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("English HH Seedless Cucumber"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("Romaine Lettuce"))
        {
            return "Fruits & Vegetables";
        }

        else if($item==("Red Pepper"))
        {
            return "Fruits & Vegetables";
        }

        //--------------------------------------------------------

        else if($item==("Plain Bagels"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Whole Wheat Bagels"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Sliced White Bread"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Sliced Whole Wheat Bread"))
        {
            return "Bread & Bakery";
        }

        else if($item==("French Baguette"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Maple Pastry Bites"))
        {
            return "Bread & Bakery";
        }

        else if($item==("Palm Leaf Pastries"))
        {
            return "Bread & Bakery";
        }

        //--------------------------------------------------------------------------------------

        else if($item==("Lean Ground Beef"))
        {
            return "Butchery";
        }

        else if($item==("Rib Steak"))
        {
            return "Butchery";
        }

        else if($item==("Butterfly Pork Chops"))
        {
            return "Butchery";
        }

        else if($item==("Boneless Chicken Breast"))
        {
            return "Butchery";
        }

        else if($item==("Lean Minced Turkey"))
        {
            return "Butchery";
        }

        else if($item==("Confit Duck Legs"))
        {
            return "Butchery";
        }

        else if($item==("Salmon Fillet"))
        {
            return "Butchery";
        }

        else if($item==("Haddock Fillet"))
        {
            return "Butchery";
        }

        else if($item==("Live Lobster"))
        {
            return "Butchery";
        }

        //------------------------------------------------------------------------------------------

        else if($item==("All Purpose Flour"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Sugar"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Table Salt"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Chocolate Chips"))
        {
            return "Non-Perishable Food";
        }


        else if($item==("Canned Peas"))
        {
            return "Non-Perishable Food";
    
        }

        else if($item==("Canned Tuna Chunks"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Diced Tomatoes"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Tomato Soup"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Cream of Mushroom Soup"))
        {
            return "Non-Perishable Food";
        }

        else if($item==("Pea and Ham Soup"))
        {
            return "Non-Perishable Food";
        }
        
    }
?>