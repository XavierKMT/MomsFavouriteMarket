<?php
combineItems();
function combineItems()
{
    //Contents of the whole text file
    $content= file_get_contents("../data/frontCart.txt")."<br/>";           //Saves As a String

    $data=explode("\n",$content);

    $num= sizeof($data);

    $items=array();
    $price=array();
    $qty=array();

    for($x=0; $x<$num;$x++)
    {
        $temp= explode(";",$data[$x]);
        array_push($items,$temp[0]);
        array_push($price,$temp[1]);
            
        if($x<$num-1)
        {
            array_push($qty,$temp[2]);
        }
            
        else
        {
            $temp= explode("<br/>",$temp[2]);
            array_push($qty,$temp[0]);
        }
    }

    for($x=0; $x<sizeof($items);$x++)
    {
        for($y=$x+1;$y<sizeof($items)-1;$y++)
        {
            if($items[$x]==$items[$y])
            {
                echo "yesss\n";
            }

            else
            {
                echo $items[$x].",".$items[$y]."<br/>";
            }
        }
    }
}
?>