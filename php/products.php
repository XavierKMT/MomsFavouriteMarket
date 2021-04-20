<?php
    function findImg($item)
    {
        if($item=="Strawberries")
        {
           return "../Images/strawberry.jpg";
        }
            //Dairy Section
        else if($item==("Shredded Mozzarella Cheese Bag"))
        {
            return "../Images/shreddedcheese.png";
        }

        else if($item==("Bagel"))
        {
            return "../Images/bagel.jpg";
        }

        else if($item==("Milk"))
        {
            return "../Images/milk.jpg";
        }

        else if($item==("Cheddar Cheese"))
        {
            return "../Images/cheddarcheese.png";
        }

        else if($item==("Strawberry Yogurt Pack"))
        {
            return "../Images/straberryyogurt.png";
        }

        else if($item==("Blueberry Yogurt Pack"))
        {
           return "../Images/yogurtcup.png";
        }

        else if($item==("Mixed Fruit Flavored Yogurt Pack"))
        {
            return "../Images/yogurtpack.png";
        }

        else if($item==("Large Eggs"))
        {
            return "../Images/30eggs.png";
        }

        else if($item==("Large White Eggs"))
        {
            return "../Images/10whiteeggs.png";
        }

        else if($item==("Large Brown Eggs"))
        {
            return "../Images/12browneggs.png";
        }

        else if($item==("1% Milk Large"))
        {
            return "../Images/1milk4L.png";
        }

        else if($item==("1% Milk small"))
        {
            return"../Images/1milk1L.png";
        }

        else if($item==("2% Milk Large"))
        {
            return "../Images/2milk4L.png";
        }

        else if($item==("2% Milk small"))
        {
            return "../Images/2milk1L.png";
        }

        else if($item==("Salted Butter"))
        {
            return "../Images/butter.png";
        }

        else if($item==("Unsalted Butter"))
        {
            return "../Images/unsaltedbutter.png";
        }

        else if($item==("Honeycrips Apple"))
        {
            return "../Images/apple1.png";
        }

        else if($item==("Banana"))
        {
            return "../Images/banana.png";
        }

        else if($item==("Large Navel Orange"))
        {
            return "../Images/orange.png";
        }

        else if($item==("Bartlett Pear"))
        {
             return "../Images/pear.png";
        }

        else if($item==("Celery"))
        {
            return "../Images/celery.png";
        }

        else if($item==("English HH Seedless Cucumber"))
        {
            return "../Images/cucumber.png";
        }

        else if($item==("Romaine Lettuce"))
        {
            return "../Images/lettuce.png";
        }

        else if($item==("Red Pepper"))
        {
            return "../Images/redpepper.png";
        }

        //--------------------------------------------------------

        else if($item==("Plain Bagels"))
        {
            return "../Images/plainbagel.png";
        }

        else if($item==("Whole Wheat Bagels"))
        {
            return "../Images/wholewheatbagel.png";
        }

        else if($item==("Sliced White Bread"))
        {
            return "../Images/whitebread.png";
        }

        else if($item==("Sliced Whole Wheat Bread"))
        {
            return "../Images/wholewheatbread.png";
        }

        else if($item==("French Baguette"))
        {
            return "../Images/Breadrolls.png";
        }

        else if($item==("Maple Pastry Bites"))
        {
            return "../Images/mapplepastry.png";
        }

        else if($item==("Palm Leaf Pastries"))
        {
            return "../Images/leafpastry.png";
        }

        //--------------------------------------------------------------------------------------

        else if($item==("Lean Ground Beef"))
        {
            return "../Images/groundbeef.png";
        }

        else if($item==("Rib Steak"))
        {
            return "../Images/steak.png";
        }

        else if($item==("Butterfly Pork Chops"))
        {
            return "../Images/pork.png";
        }

        else if($item==("Boneless Chicken Breast"))
        {
            return "../Images/chickenbreast.png";
        }

        else if($item==("Lean Minced Turkey"))
        {
            return "../Images/mincedturkey.png";
        }

        else if($item==("Confit Duck Legs"))
        {
            return "../Images/duckconfit.png";
        }

        else if($item==("Salmon Fillet"))
        {
            return "../Images/salmonfillet.png";
        }

        else if($item==("Haddock Fillet"))
        {
            return "../Images/haddockfillet.png";
        }

        else if($item==("Live Lobster"))
        {
            return "../Images/lobster.png";
        }

        //------------------------------------------------------------------------------------------

        else if($item==("All Purpose Flour"))
        {
            return "../Images/flour.png";
        }

        else if($item==("Sugar"))
        {
            return "../Images/sugar.png";
        }

        else if($item==("Table Salt"))
        {
            return "../Images/salt.png";
        }

        else if($item==("Chocolate Chips"))
        {
            return "../Images/chocolatechip.png";
        }


        else if($item==("Canned Peas"))
        {
            return "../Images/cannedpeas.png";
    
        }

        else if($item==("Canned Tuna Chunks"))
        {
            return "../Images/cannedtuna.png";
        }

        else if($item==("Diced Tomatoes"))
        {
            return "../Images/dicedtomatoes.png";
        }

        else if($item==("Tomato Soup"))
        {
            return "../Images/cannedsoup.png";
        }

        else if($item==("Cream of Mushroom Soup"))
        {
            return "../Images/creamofmushroom.png";
        }

        else if($item==("Pea and Ham Soup"))
        {
            return "../Images/peaandhamsoup.png";
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

    function findPrice($item)
    {
        if($item=="Strawberries")
        {
           return "3";
        }
            //Dairy Section
        else if($item==("Shredded Mozzarella Cheese Bag"))
        {
            return "5.99";
        }

        else if($item==("Bagel"))
        {
            return "4";
        }

        else if($item==("Milk"))
        {
            return "6.56";
        }

        else if($item==("Cheddar Cheese"))
        {
            return "4.49";
        }

        else if($item==("Strawberry Yogurt Pack"))
        {
            return "5.99";
        }

        else if($item==("Blueberry Yogurt Pack"))
        {
           return "5.99";
        }

        else if($item==("Mixed Fruit Flavored Yogurt Pack"))
        {
            return "5.99";
        }

        else if($item==("Large Eggs"))
        {
            return "4.77";
        }

        else if($item==("Large White Eggs"))
        {
            return "2.99";
        }

        else if($item==("Large Brown Eggs"))
        {
            return "4.69";
        }

        else if($item==("1% Milk Large"))
        {
            return "6.38";
        }

        else if($item==("1% Milk small"))
        {
            return"1.85";
        }

        else if($item==("2% Milk Large"))
        {
            return "6.68";
        }

        else if($item==("2% Milk small"))
        {
            return "1.93";
        }

        else if($item==("Salted Butter"))
        {
            return "4.69";
        }

        else if($item==("Unsalted Butter"))
        {
            return "4.89";
        }

        else if($item==("Honeycrips Apple"))
        {
            return "1.05";
        }

        else if($item==("Banana"))
        {
            return "0.33";
        }

        else if($item==("Large Navel Orange"))
        {
            return "1";
        }

        else if($item==("Bartlett Pear"))
        {
             return "0.88";
        }

        else if($item==("Celery"))
        {
            return "3.69";
        }

        else if($item==("English HH Seedless Cucumber"))
        {
            return "1.50";
        }

        else if($item==("Romaine Lettuce"))
        {
            return "2.99";
        }

        else if($item==("Red Pepper"))
        {
            return "3.96";
        }

        //--------------------------------------------------------

        else if($item==("Plain Bagels"))
        {
            return "2.99";
        }

        else if($item==("Whole Wheat Bagels"))
        {
            return "5.89";
        }

        else if($item==("Sliced White Bread"))
        {
            return "2.50";
        }

        else if($item==("Sliced Whole Wheat Bread"))
        {
            return "4.19";
        }

        else if($item==("French Baguette"))
        {
            return "2.49";
        }

        else if($item==("Maple Pastry Bites"))
        {
            return "4.99";
        }

        else if($item==("Palm Leaf Pastries"))
        {
            return "6.99";
        }

        //--------------------------------------------------------------------------------------

        else if($item==("Lean Ground Beef"))
        {
            return "3.87";
        }

        else if($item==("Rib Steak"))
        {
            return "5.29";
        }

        else if($item==("Butterfly Pork Chops"))
        {
            return "4.30";
        }

        else if($item==("Boneless Chicken Breast"))
        {
            return "5.11";
        }

        else if($item==("Lean Minced Turkey"))
        {
            return "2.99";
        }

        else if($item==("Confit Duck Legs"))
        {
            return "8.50";
        }

        else if($item==("Salmon Fillet"))
        {
            return "3.42";
        }

        else if($item==("Haddock Fillet"))
        {
            return "1.61";
        }

        else if($item==("Live Lobster"))
        {
            return "9.55";
        }

        //------------------------------------------------------------------------------------------

        else if($item==("All Purpose Flour"))
        {
            return "8.29";
        }

        else if($item==("Sugar"))
        {
            return "4.49";
        }

        else if($item==("Table Salt"))
        {
            return "1.79";
        }

        else if($item==("Chocolate Chips"))
        {
            return "16.99";
        }


        else if($item==("Canned Peas"))
        {
            return "1.69";
    
        }

        else if($item==("Canned Tuna Chunks"))
        {
            return "1.49";
        }

        else if($item==("Diced Tomatoes"))
        {
            return "0.99";
        }

        else if($item==("Tomato Soup"))
        {
            return "1.69";
        }

        else if($item==("Cream of Mushroom Soup"))
        {
            return "3.29";
        }

        else if($item==("Pea and Ham Soup"))
        {
            return "1.99";
        }
        
    }
?>