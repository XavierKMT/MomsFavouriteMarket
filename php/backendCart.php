<?php 

function removeItem($itemName)
{
 //Contents of the whole text file
 $content= file_get_contents("cartOrder.txt")."<br/>";           //Saves As a String

 //----------------------------------------------

 //Collect the information from the order
 $data=explode("\n",$content);

 $orderNumber=$data[0];
 $num= sizeof($data);

 $items=array();
 $price=array();
 $qty=array();
 $info=array();
 for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$data[$x]);

     if($temp[0]==$itemName)
     {

     }

     else
     {
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
 }
 
array_push($info,"$orderNumber\n");

for($x=0;$x<sizeof($items);$x++)
{
    array_push($info,"$items[$x],$price[$x],$qty[$x]\n");
}

 $file=fopen("cartOrder.txt","w");

    for($x=0; $x<sizeof($info);$x++)
    {   
        fwrite($file,($info[$x]));
    }
}

if(isset($_POST['deleItem']))
{
   removeItem($_POST['it']);
}
?>
